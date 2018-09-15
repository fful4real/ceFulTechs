<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use App\Entity\Ceorder;
use App\Entity\OrderType;
use App\Entity\CeCurrency;
use App\Entity\CeStatus;
use App\Entity\ceCustomer;
use App\Entity\CeNetwork;
use App\Entity\CeCharge;
use App\Entity\CeAccount;
use App\Entity\CeAccountEntry;
use App\Repository\CeorderRepository;
use App\Repository\OrderTypeRepository;
use App\Repository\CeCustomerRepository;
use App\Repository\CeChargeRepository;
use App\Repository\CeNetworkRepository;
use App\Repository\CeStatusRepository;
use App\Repository\CeTownRepository;
use App\Repository\CeAccountRepository;
use App\Form\CeorderType;

class CeorderController extends AbstractController
{
    /**
     * @Route("/order", name="ceorder_single")
     */
    public function index()
    {
        return $this->redirectToRoute('ceorder_list');
    }
    /**
     * @Route("/orders/list", name="ceorder_list")
     */
    public function orderList(CeorderRepository $repo, CeCustomerRepository $customerRepo, CeTownRepository $townRepo,CeStatusRepository $statusRepo, Request $reqt)
    {
        $limit = 100;
        $page = intval($reqt->query->get('page')) ?:1;
        $pagination = $repo->getPagination($page,$limit);
        $offset = ($page - 1)  * $limit;
        $orders = $repo->findBy(array(), array('ceDatec' => 'DESC'),$limit,$offset);
        $customers=$statuss=$towns=$colors=[];
        $colorsRepo = $statusRepo->getStatusColors();
        foreach ($orders as $key => $order) {
            $repoCustomer = $customerRepo->find($order->getFkCeCustomer()->getId());
            $repoTown = $townRepo->find($order->getFkCeTown()->getId());
            $repoStatus = $statusRepo->find($order->getCeStatus()->getId());
            $customers[$order->getId()]['firstName']= $repoCustomer->getFirstName();
            $customers[$order->getId()]['lastName']= $repoCustomer->getLastName ();
            $towns[$order->getId()]['townName']= $repoTown->getTownName();
            $statuss[$order->getId()]['label']= $repoStatus->getLabel();
            $colors[$order->getId()]= $colorsRepo[$repoStatus->getId()];
        }
        return $this->render('ceorder/list.html.twig', [
            'orders' => $orders, 
            'customers'=>$customers,
            'towns'=>$towns,
            'status'=>$statuss,
            'colors'=>$colors,
            'pagination'=>$pagination,
            'page'=>$page,
        ]);
    }

    /**
     * @Route("/orders/new", name="ceorders_new")
     */
    public function ordersNew(CeorderRepository $repo, CeCustomerRepository $customerRepo, CeTownRepository $townRepo,CeStatusRepository $statusRepo, Request $reqt)
    {

        $limit = 100;
        $status = $statusRepo->find(1);
        $options = ['ceStatus'=>$statusRepo->find(1)];
        $pages = ceil(count($repo->findBy(['ceStatus'=>$status]))/$limit);

        $page = intval($reqt->query->get('page')) ?:1;
        $pagination = $repo->getPagination($page,$limit,$options);
        $offset = ($page - 1)  * $limit;
        $orders = $repo->getNewOrders($offset,$limit);

    	$customers=$statuss=$towns=$colors=[];
    	$colorsRepo = $statusRepo->getStatusColors();
    	foreach ($orders as $key => $order) {
    		$repoCustomer = $customerRepo->find($order->getFkCeCustomer()->getId());
    		$repoTown = $townRepo->find($order->getFkCeTown()->getId());
    		$repoStatus = $statusRepo->find($order->getCeStatus()->getId());
    		$customers[$order->getId()]['firstName']= $repoCustomer->getFirstName();
    		$customers[$order->getId()]['lastName']= $repoCustomer->getLastName	();
    		$towns[$order->getId()]['townName']= $repoTown->getTownName();
    		$statuss[$order->getId()]['label']= $repoStatus->getLabel();
    		$colors[$order->getId()]= $colorsRepo[$repoStatus->getId()];
    	}
        return $this->render('ceorder/list.html.twig', [
            'orders' => $orders, 
            'customers'=>$customers,
            'towns'=>$towns,
            'status'=>$statuss,
            'colors'=>$colors,
            'pagination'=>$pagination,
            'page'=>$page,
        ]);
    }

    /**
     * @Route("/order/{id}/abandon", name="ceorder_abandon")
     */
    public function abandonOrder(Ceorder $order, CeStatusRepository $statusRepo, ObjectManager $manager)
    {
        $abandonStatus = $statusRepo->find(3);
        $order->setCeStatus($abandonStatus);
        $manager->persist($order);
        $manager->flush();

        return $this->redirectToRoute('ceorder_show',['id'=>$order->getId()]);
    }

    /**
     * @Route("/order/{id}/reopen", name="ceorder_reopen")
     */
    public function reopenOrder(Ceorder $order, ObjectManager $manager, CeStatusRepository $statusRepo)
    {
    	$reopenStatus = $statusRepo->find(1);
    	$order->setCeStatus($reopenStatus);
    	$manager->persist($order);
    	$manager->flush();

    	return $this->redirectToRoute('ceorder_show',['id'=>$order->getId()]);
    }

    /**
     * @Route("/order/{id}/complete", name="ceorder_complete")
     */
    public function completeOrder(Ceorder $order, Request $reqt, CeAccountRepository $accountRepo, CeStatusRepository $statusRepo, ObjectManager $manager)
    {
        $user = $this->getUser();
    	$completeStatus = $statusRepo->find(2);
    	$order->setCeStatus($completeStatus);
    	$manager->persist($order);

        $postData = $reqt->request;
        $commercialAccounts = $accountRepo->getCommercialAccounts();
        $mainData = [];
        foreach ($commercialAccounts as $comAccount) {
            $mainData[$comAccount->getCeAccountName()]=$comAccount->getId();
        }
        $data = [];

        $form = $this->createFormBuilder($data)
                    ->setAction($this->generateUrl('ceorder_complete',['id'=>$order->getId()]))
                    ->setMethod('POST')
                    ->add('Account', ChoiceType::class,
                        array('choices' => $mainData))
                    ->getForm();
        $form->handleRequest($reqt);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $postData->get('form');
            $account = $accountRepo->find(intval($formData['Account']));
            if (!$account) {
                $this->addFlash('warning', 'Account not exist');
                return $this->redirectToRoute('ceorder_show',['id'=>$order->getId()]);
            }
            $accountBalance = $account->getCeAccountBalance();
            $orderAmount = $order->getCeOrderTotal();
            
            if ($accountBalance < $orderAmount) {
                $this->addFlash('warning', 'Solde insuffisant, compte: '.$account->getCeAccountCode());
                return $this->redirectToRoute('ceorder_show',['id'=>$order->getId()]);
            }
            $order->setCeDoneBy($this->getUser());
            $accountBalance -= $orderAmount;
            $account->setCeAccountBalance($accountBalance);

            $manager->persist($account);
            $accountEntry = new CeAccountEntry();
            $accountEntry->setFkCeAccount($account)
                         ->setFkCeCustomer($order->getFkCeCustomer())
                         ->setCeFromAccount($account)
                         ->setFkCeOrder($order)
                         ->setCeCreatedBy($user)
                         ->setCeAmount($order->getCeOrderTotal())
                         ->setIsDebit(1)
                         ->setDatec(new \DateTime())
                         ->setTms(new \DateTime())
                         ;

            $manager->persist($accountEntry);
            $manager->flush();

            $this->addFlash('success', 'Gerer avec success: '.number_format($order->getCeOrderTotal()))
            ;
            return $this->redirectToRoute('ceorder_show',['id'=>$order->getId()]);
        }

        $this->addFlash('danger', 'Something Went wrong ;( ');
    	//$manager->flush();
    	return $this->redirectToRoute('ceorder_show',['id'=>$order->getId()]);
    }

    /**
     * @Route("/order/{id}/delete", name="ceorder_delete")
     */
    public function deleteOrder(Ceorder $order, ObjectManager $manager)
    {
    	$manager->remove($order);
    	$manager->flush();

    	return $this->redirectToRoute('ceorder_list');
    }

    /**
     * @Route("/order/new", name="ceorder_new")
     * @Route("/order/{id}/edit", name="ceorder_edit")
     */
    public function ceorderForm(Ceorder $ceorder = null, Request $reqt, ObjectManager $manager, CeChargeRepository $chargeRepo, CeNetworkRepository $networkRep)
    {
    	//var_dump($reqt);
    	if (!$ceorder) {
    		$ceorder = new Ceorder();
    	}
        $user = $this->getUser();
    	$customerRep = $this->getDoctrine()->getRepository(CeCustomer::class);
    	$orderForm = $this->createForm(CeorderType::class, $ceorder);
    	$orderForm->handleRequest($reqt);

    	//var_dump(serialize(array([67,651,652,653,654])));
    	//die();

    	$orderCustomer = $reqt->request->get('ceCustomer') ?: ['firstName'=>'','lastName'=>''] ;
    	
    	if ($orderForm->isSubmitted() && $orderForm->isValid() && $orderCustomer['firstName']) {
    		$postData = $reqt->request;

    		if (!$ceorder->getId()) {
    			$ceorder->setCeDatec(new \DateTime());
    		}
            if (!$ceorder->getCeCreatedBy()) {
                $ceorder->setCeCreatedBy($user);
            }
    		$orderRep = $this->getDoctrine()->getRepository(CeOrder::class);
    		$orderTypeRep = $this->getDoctrine()->getRepository(OrderType::class);
    		$currencyRep = $this->getDoctrine()->getRepository(CeCurrency::class);
    		$statusRep = $this->getDoctrine()->getRepository(CeStatus::class);
    		$networkRep = $this->getDoctrine()->getRepository(CeNetwork::class);

    		$orderRepRef = $orderTypeRep->find($postData->get('ceorder')['orderType']);

    		$orderRef = $orderRep->makeRef($orderRepRef->getOrderTypeCode());

    		$ceorder->setCeOrderref($orderRef);
    		$currency = $currencyRep->find(1);
    		$status = $statusRep->find(1);
    		$network = $networkRep->find(1);
    		$ceorder->setCeCurrency($currency)
    				->setCeStatus($status)
    				->setCeNetwork($network)
    				->setCeTms(new \DateTime());

    		// Check if customer exists
    		$customer = $customerRep->findOneBy([
    								'mobNum'=>$ceorder->getCeMobnum()
    								]);
    		if (!$customer) {
    			$customer = new CeCustomer();
    			$customer->setFirstName($orderCustomer['firstName'])
    					->setLastName($orderCustomer['lastName'])
                        ->setMobNum($ceorder->getCeMobnum())
    					->setFkCeTown($ceorder->getFkCeTown())
    					->setDatec(new \DateTime())
    					->setTms(new \DateTime());
    			$manager->persist($customer);
    			$manager->flush();
    		}
    		$customer = $customerRep->findOneBy([
    								'mobNum'=>$ceorder->getCeMobnum()
    								]);
    		$ceorder->setFkCeCustomer($customer);

    		$mobNum = $ceorder->getCeMobnum();

            $netCode=$networkRep->getNetworkCode($mobNum);
            $netId = $networkRep->getNetworkId($mobNum);

	    	if (in_array($code = $ceorder->getOrderType()->getOrderTypeCode(), ['FEE','EUT'])) {
	    		$charge = $chargeRepo->getOrderCharge($ceorder->getCeAmount(),$netId);
	    	} else {
	    		$charge = 0;
	    	}
	    	$orderTotal = $charge+$ceorder->getCeAmount();
    		$ceorder->setCeOrderCharge($charge)
    				->setCeOrderTotal($orderTotal);

    		$manager->persist($ceorder);
    		$manager->flush();

    		return $this->redirectToRoute('ceorder_show',['id'=>$ceorder->getId()]);
    	}elseif($ceorder->getId()){
    		$orderCust = $customerRep->findOneBy(['mobNum'=>$ceorder->getCeMobnum()]);
    		$orderCustomer = ['firstName'=>$orderCust->getFirstName(),'lastName'=>$orderCust->getLastName()];
    	}
        $networkRep = $this->getDoctrine()->getRepository(CeNetwork::class);
        $netCodeDisplay = $ceorder->getId() !== null ?$netCode=$networkRep->getNetworkCode($ceorder->getCeMobnum()):'';
        return $this->render('ceorder/orderform.html.twig', [
            'orderForm' => $orderForm->createView(), 
            'editMode'=>$ceorder->getId() !== null, 
            'ceCustomer'=>$orderCustomer, 
            'orderId'=>$ceorder->getId(),
            'netCodeDisplay'=>$netCodeDisplay
        ]);
    }

    /**
     * @Route("/order/{id}", name="ceorder_show")
     */
    public function showOrder(Ceorder $order, CeChargeRepository $chargeRep, CeAccountRepository $accountRepo, OrderTypeRepository $orderTypeRep, CeorderRepository $orderRep, CeNetworkRepository $networkRep)
    {

    	//var_dump(serialize(array([22,33])));

    	$orderType = $orderTypeRep->findOneBy(['orderTypeCode'=>substr($order->getCeOrderref(),0,3)]);
    	$orderStatusColor = [1 => [ 'color' => 'purple', 'text' => 'New'], 2 => ['color' => 'green','text' =>'Completed'] ,3 =>['color' => 'gray-400','text' =>'Abandoned'],4=>['color' => 'orange','text' =>'Cancelled']];
    	$orderStatusStyle = $orderStatusColor[$order->getCeStatus()->getId()];
    	$orderStatus = $order->getCeStatus()->getId();
    	$orderSta = [];

        $account = new CeAccount();
        $commercialAccounts = $accountRepo->getCommercialAccounts();
        $mainData = [];

        $mobNum = $order->getCeMobnum();
        $netCode = $networkRep->getNetworkCode($mobNum);
        $netId = $networkRep->getNetworkId($mobNum);
        $orderref = $order->getCeOrderref();

        foreach ($commercialAccounts as $comAccount) {
            if ($netCode == $networkRep->getNetworkCode($comAccount->getCeAccountNumber())) {
                $mainData[$comAccount->getCeAccountCode().' - '.number_format($comAccount->getCeAccountBalance())]=$comAccount->getId();
            }
        }
        $data = [];

        $form = $this->createFormBuilder($data)
                    ->setAction($this->generateUrl('ceorder_complete',['id'=>$order->getId()]))
                    ->setMethod('POST')
                    ->add('Account', ChoiceType::class,
                        array('choices' => $mainData))
                    ->getForm();

    	foreach ($orderStatusColor as $key => $value) {
    		if ($key == $orderStatus) {
    			$orderSta[$value['text']]=$orderStatus;
    		} else {
    			$orderSta[$value['text']]=null;
    		}
    		
    	}

    	$canChangeStatus = $orderSta['Completed'] ? null : 1;

    	$data = ['orderType'=>$orderType->getOrderTypeLabel(), 
    			'network'=>$netCode, 'orderStyle'=>$orderStatusStyle
    			];

        return $this->render('ceorder/show.html.twig', [
            'order' => $order, 'data'=>$data,
    		'orderStatus'=>$orderSta, 
    		'changeStatus'=>$canChangeStatus,
            'accountForm'=>$form->createView(),
        ]);
    }
}
