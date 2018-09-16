<?php

namespace App\Controller;

use App\Entity\CeAccount;
use App\Entity\CeAccountEntry;
use App\Entity\CeBank;
use App\Entity\CeCustomer;
use App\Form\AccountEntryCustomerType;
use App\Form\AccountEntryType;
use App\Form\AccountType;
use App\Repository\CeAccountEntryRepository;
use App\Repository\CeAccountRepository;
use App\Repository\CeAccountTypeRepository;
use App\Repository\CeBankRepository;
use App\Repository\CeChargeRepository;
use App\Repository\CeCustomerRepository;
use App\Repository\CeNetworkRepository;
use App\Repository\CeorderRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class AccountController extends AbstractController
{
    /**
     * @Route("/account", name="account")
     */
    public function index()
    {
        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController',
        ]);
    }

    /**
     * @Route("/account/list", name="ceaccount_list")
     */
    public function accountList(CeAccountRepository $accountRepo)
    {
        $accounts = $accountRepo->findAll();

        return $this->render('account/list.html.twig', [
            'accounts'=>$accounts,
        ]);
    }

    /**
     * @Route("/account/{id}/credits", name="ceaccount_credits")
     */
    public function accountCredits(CeAccount $account = null, CeorderRepository $orderRepo, Request $reqt, CeAccountEntryRepository $acEntryRepo)
    {
        if (!$account) {
            $this->addFlash('warning', 'Account doesn\'t exiist');
            return $this->redirectToRoute('ceaccount_list');
        }

        $limit = 100;
        $page = intval($reqt->query->get('page')) ?:1;
        $pagination = $orderRepo->getPagination($page, $limit, ['fkCeAccount'=>$account, 'isDebit'=>0],'CeAccountEntry');
        $offset = ($page - 1)  * $limit;
        $accountEntries = $acEntryRepo->findBy(['fkCeAccount'=>$account, 'isDebit'=>0], array('datec' => 'DESC'),$limit,$offset);

        if (count($accountEntries)<1) {
            $this->addFlash('warning', 'No Entries');
            return $this->redirectToRoute('ceaccount_show',['id'=>$account->getId()]);
        }
        return $this->render('account/accountcredits.html.twig', [
            'account'=>$account,
            'accountEntries'=>$accountEntries,
            'pagination'=>$pagination,
        ]);
    }

    /**
     * @Route("/account/{id}/debits", name="ceaccount_debits")
     */
    public function accountDebits(CeAccount $account = null, CeorderRepository $orderRepo, CeAccountEntryRepository $acEntryRepo, Request $reqt)
    {
        if (!$account) {
            $this->addFlash('warning', 'Account doesn\'t exiist');
            return $this->redirectToRoute('ceaccount_list');
        }


        $limit = 20;
        $page = intval($reqt->query->get('page')) ?:1;
        $pagination = $orderRepo->getPagination($page, $limit, ['fkCeAccount'=>$account, 'isDebit'=>0],'CeAccountEntry');
        $offset = ($page - 1)  * $limit;
        $accountEntries = $acEntryRepo->findBy(['fkCeAccount'=>$account, 'isDebit'=>1], array('datec' => 'DESC'),$limit,$offset);

        // $accountEntries = $account->getFkCeAccountEntries();

        if (count($accountEntries)<1) {
            $this->addFlash('warning', 'No Debits');
            return $this->redirectToRoute('ceaccount_show',['id'=>$account->getId()]);
        }
        
        return $this->render('account/accountdebits.html.twig', [
            'account'=>$account,
            'accountEntries'=>$accountEntries,
            'pagination'=>$pagination,
        ]);
    }

    /**
     * @Route("/account/new", name="ceaccount_new")
     * @Route("/account/{id}/edit", name="ceaccount_edit")
     */
    public function ceAccountForm(CeAccount $account = null, Request $reqt, ObjectManager $manager, CeBankRepository $bankRepo, CeAccountTypeRepository $accountTypeRepo)
    {
        //var_dump($reqt);

        if (!$account) {
            $account = new CeAccount();
            $account->setCeCreatedBy($this->getUser());
            $editMode = false;
        }else{
            $editMode = true;
        }

        //var_dump($reqt->request->get('account'));

        //die();
        $accountForm = $this->createForm(AccountType::class, $account);
        $accountForm->handleRequest($reqt);

        if ($accountForm->isSubmitted()) {
            $postData = $reqt->request->get('account');
            $bankMatch=$validForm=true;

            if ($postData['fkCeAccountType'] <= 2) {
                $account->setIsCommercial(1)
                        ->setIsMobileMoney(0)
                        ->setIsBankAccount(0)
                        ->setIsCash(0);
            } elseif($postData['fkCeAccountType'] > 2 && $postData['fkCeAccountType'] <=4) {
                $account->setIsCommercial(0)
                        ->setIsMobileMoney(1)
                        ->setIsBankAccount(0)
                        ->setIsCash(0);
            }elseif($postData['fkCeAccountType'] == 2){
                $account->setIsCommercial(0)
                        ->setIsMobileMoney(0)
                        ->setIsBankAccount(1)
                        ->setIsCash(0);
            }else{
                $account->setIsCommercial(0)
                        ->setIsMobileMoney(0)
                        ->setIsBankAccount(0)
                        ->setIsCash(1);
            }
            
        }


        if ($accountForm->isSubmitted() && $accountForm->isValid()){
            if (!$account->getId()) {
                $account->setDatec(new \DateTime())
                        ->setCeAccountBalance(0);
            }
            $account->setTms(new \DateTime());
            $manager->persist($account);
            $manager->flush();

            return $this->redirectToRoute('ceaccount_show',['id'=>$account->getId()]);
            
        }

        return $this->render('account/accountform.html.twig', [
            'controller_name' => 'AccountController', 'accountForm'=>$accountForm->createView(),
            'editMode'=>$editMode,
            'ceaccount'=>$account->getId()?$account->getId():false,
        ]);
    }


    /**
     * @Route("/account/{id}/receive", name="ceaccount_receive")
     */
    public function accountReceive(CeAccount $account = null, Request $reqt, ObjectManager $manager, CeBankRepository $bankRepo, CeAccountTypeRepository $accountTypeRepo, CeCustomerRepository $customerRepo)
    {
        if (!$account) {
            $this->addFlash('warning', 'Account doesn\'t exiist');
            return $this->redirectToRoute('ceaccount_list');
        }
        if(!$account->getCeAccountActive()){
            $this->addFlash('warning', 'Account is inactive');
            return $this->redirectToRoute('ceaccount_list');
        }


        $accountEntry = new CeAccountEntry();
        
        $accountEntryForm = $this->createForm(AccountEntryType::class, $accountEntry);

        $accountEntryForm->handleRequest($reqt);


        if ($accountEntryForm->isSubmitted() && $accountEntryForm->isValid()){
            $postData = $reqt->request->get('account_entry');
            $entryCustomer = $postData['fkCeCustomer'];
            if($customer = $customerRepo->isNewCustomer($entryCustomer)){
                $manager->persist($customer);
            }else{
                $customer = $customerRepo->findOneBy(['mobNum'=>$entryCustomer['mobNum']]);
            }
            $accountEntry->setFkCeAccount($account)
                        ->setFkCeCustomer($customer)
                        ->setCeAmount($postData['ceAmount'])
                        ->setIsDebit(0)
                        ->setCeCreatedBy($this->getUser())
                        ->setTms(new \DateTime())
                        ->setDatec(new \DateTime());

            $newAccountBalance = $account->getCeAccountBalance();
            $newAccountBalance +=  intval($postData['ceAmount']);
            $account->setCeAccountBalance($newAccountBalance);
            $manager->persist($accountEntry);
            $manager->persist($account);

            $manager->flush();

            $this->addFlash('success', 'Montant Recu: '.number_format($postData['ceAmount']).' FCFA');
            return $this->redirectToRoute('ceaccount_show',['id'=>$account->getId()]);
        }

        return $this->render('account/receive.html.twig', [
            'account'=>$account,
            'accountEntryForm'=>$accountEntryForm->createView(),
        ]);
    }

    /**
    * @Route("/account/{id}/transfer", name="ceaccount_transfer")
    *
    */
    public function accountTransfer(CeAccount $account = null, Request $reqt, ObjectManager $manager, CeBankRepository $bankRepo, CeAccountTypeRepository $accountTypeRepo)
    {

        if (!$account) {
            return $this->redirectToRoute('ceaccount_list');
        }
        if(!$account->getCeAccountActive()){
            $this->addFlash('error', 'Account is inactive');
            return $this->redirectToRoute('ceaccount_list');
        }
        return $this->render('account/transfer.html.twig', [
                'account'=>$account,
        ]);
    }

    /**
    * @Route("/account/{id}/deposit", name="ceaccount_deposit")
    *
    */
    public function accountDeposit(CeAccount $account = null, Request $reqt, ObjectManager $manager, CeBankRepository $bankRepo, CeAccountTypeRepository $accountTypeRepo)
    {
        $accountEntry = new CeAccountEntry();
        if (!$account) {
            $this->addFlash('warning', 'Account doesn\'t exist');
            return $this->redirectToRoute('ceaccount_list');
        }
        if(!$account->getCeAccountActive()){
            $this->addFlash('warning', 'Account is inactive');
            return $this->redirectToRoute('ceaccount_show',['id'=>$account->getId()]);
        }
        if(!$account->getIsCommercial() && !$account->getIsBankAccount() && !$account->getIsCash()){
            $this->addFlash('warning', 'Must be a commercial account');
            return $this->redirectToRoute('ceaccount_show',['id'=>$account->getId()]);
        }

        $accountAlias = $account->getCeAccountCode().' - '.$account->getCeAccountName();

        $data = [];

        $depositForm = $this->createFormBuilder($data)
                    ->setAction($this->generateUrl('ceaccount_deposit',['id'=>$account->getId()]))
                    ->setMethod('POST')
                    ->add('Compte', TextType::class,['attr'=>['placeholder'=>$accountAlias, 'readonly'=>'']])
                    ->add('Montant', TextType::class,['attr'=>['placeholder'=>'Entrer montant', 'required'=>'required']])
                    ->add('Note', TextType::class,['required'=>'false', 'attr'=>['placeholder'=>'Note', 'required'=>'required']])
                    ->getForm();
        $depositForm->handleRequest($reqt);
        if ($depositForm->isSubmitted()&& $depositForm->isValid()) {
            $postData = $reqt->request->get('form');
            $accountBalance = $account->getCeAccountBalance()+intval($postData['Montant']);
            $account->setCeAccountBalance($accountBalance);
            $manager->persist($account);

            $accountEntry->setFkCeAccount($account)
                         ->setCeAmount(intval($postData['Montant']))
                         ->setIsDebit(0)
                         ->setCeNote($postData['Note'])
                         ->setDatec(new \DateTime())
                         ->setTms(new \DateTime())
                         ->setCeCreatedBy($this->getUser());
            $manager->persist($accountEntry);
            
            $manager->flush();
            $this->addFlash('success', 'Montant Recu: '.number_format($postData['Montant']).' FCFA');
            return $this->redirectToRoute('ceaccount_show',['id'=>$account->getId()]);
        }

        return $this->render('account/deposit.html.twig', [
                'account'=>$account,
                'depositForm'=>$depositForm->createView()
        ]);
    }


    /**
    * @Route("/account/{id}/buy", name="ceaccount_buy")
    *
    */
    public function accountBuy(CeChargeRepository $chargeRepo, CeAccount $account = null, Request $reqt, ObjectManager $manager, CeAccountRepository $accountRepo, CeNetworkRepository $networkRep)
    {
        $accountEntry = new CeAccountEntry();
        if (!$account) {
            $this->addFlash('warning', 'Account doesn\'t exist');
            return $this->redirectToRoute('ceaccount_list');
        }
        if(!$account->getCeAccountActive()){
            $this->addFlash('warning', 'Account is inactive');
            return $this->redirectToRoute('ceaccount_show',['id'=>$account->getId()]);
        }
        if(!$account->getIsCommercial() && !$account->getIsBankAccount()){
            $this->addFlash('warning', 'Must be a commercial account');
            return $this->redirectToRoute('ceaccount_show',['id'=>$account->getId()]);
        }

        $accountAlias = $account->getCeAccountCode().' - '.$account->getCeAccountName();
        $mobileMoneyAccountes = $accountRepo->getMobileMoneyAccounts();
        $cashAccounts = $accountRepo->findBy(['isCash'=>1]);
        $mainData = [];

        $mobNum = (string)$account->getCeAccountNumber();
        $netCode = $networkRep->getNetworkCode($mobNum);
        foreach ($mobileMoneyAccountes as $mobAccount) {
            if ($netCode == $networkRep->getNetworkCode($mobAccount->getCeAccountNumber())) {
                $mainData[$mobAccount->getCeAccountCode().' - '.number_format($mobAccount->getCeAccountBalance())]=$mobAccount->getId();
            }
        }
        foreach ($cashAccounts as $key => $cashAccount) {
            $mainData[$cashAccount->getCeAccountCode().' - '.number_format($cashAccount->getCeAccountBalance())] = $cashAccount->getId();
        }
        $data = [];

        $buyForm = $this->createFormBuilder($data)
                    ->setAction($this->generateUrl('ceaccount_buy',['id'=>$account->getId()]))
                    ->setMethod('POST')
                    ->add('Compte', TextType::class,['attr'=>['placeholder'=>$accountAlias, 'readonly'=>'']])
                    ->add('deCompte', ChoiceType::class,
                        array('choices' => $mainData))
                    ->add('Montant', TextType::class,['attr'=>['placeholder'=>'Entrer montant', 'required'=>'required']])
                    ->getForm();
        $buyForm->handleRequest($reqt);
        if ($buyForm->isSubmitted()&& $buyForm->isValid()) {
            $postData = $reqt->request->get('form');
            $charge = 0;
            $fromAccount = $accountRepo->find(intval($postData['deCompte']));
            $fromAccountBalance = $fromAccount->getCeAccountBalance();
            if ($fromAccount->getIsMobileMoney()) {
                $charge = $chargeRepo->getOrderCharge(intval($postData['Montant']),$networkRep->getNetworkId($account->getCeAccountNumber()));
                $debit = intval($postData['Montant'])+$charge;
            }else{
                $debit = intval($postData['Montant']);
            }
            
            $creditAmount = intval($postData['Montant']);

            if ($debit > $fromAccountBalance)  {
                if ($fromAccount->getIsMobileMoney()) {
                    $maxCharge = $chargeRepo->getOrderCharge($fromAccountBalance,$networkRep->getNetworkId($account->getCeAccountNumber()));
                    $maxCharge = $fromAccountBalance - $maxCharge;
                }else{
                    $maxCharge = $fromAccountBalance;
                }
                $this->addFlash('warning', 'Solde Insuffisant ! Maximum: '.number_format($maxCharge));
                return $this->redirectToRoute('ceaccount_buy',['id'=>$account->getId(), 'account'=>$account,'buyForm'=>$buyForm->createView()]);
            }

            $debitEntry = new CeAccountEntry();
            $creditEntry = new CeAccountEntry();
            $debitEntry->setFkCeAccount($fromAccount)
                       ->setCeAmount($debit)
                       ->setIsDebit(1)
                       ->setCeCreatedBy($this->getUser())
                       ->setDatec(new \DateTime())
                       ->setTms(new \DateTime())
                       ;
            $creditEntry->setFkCeAccount($account)
                       ->setCeAmount($creditAmount)
                       ->setCeFromAccount($fromAccount)
                       ->setCeCreatedBy($this->getUser())
                       ->setIsDebit(0)
                       ->setDatec(new \DateTime())
                       ->setTms(new \DateTime())
                       ;
            $accountBalance = $fromAccountBalance - $debit;
            $fromAccount->setCeAccountBalance($accountBalance);
            $accountBalance = $account->getCeAccountBalance() + $creditAmount;
            $account->setCeAccountBalance($accountBalance);

            $manager->persist($fromAccount);
            $manager->persist($account);
            $manager->persist($debitEntry);
            $manager->persist($creditEntry);
            
            $manager->flush();
            $this->addFlash('success', 'Montant Recu: '.number_format($creditAmount).' FCFA');

            return $this->redirectToRoute('ceaccount_show',['id'=>$account->getId()]);
        }

        return $this->render('account/buy.html.twig', [
                'account'=>$account,
                'buyForm'=>$buyForm->createView()
        ]);
    }

    /**
     * @Route("/account/{id}", name="ceaccount_show")
     */
    public function showOrder(CeAccount $account=null, CeAccountRepository $chargeRep, CeAccountEntryRepository $entryRepo)
    {
        $toalEtries = $entryRepo->getTotalEntries($account)[0]['amount'] ?: 0;
        $totalOuts = $entryRepo->getTotalOuts($account)[0]['amount'] ?: 0;
        $accountTransactions = $entryRepo->getAccountTransactions($account);
        $last5 = $entryRepo->findBy(['fkCeAccount'=>$account], array('datec' => 'DESC'),4,0);
        // var_dump($last5);
        return $this->render('account/show.html.twig', [
            'account' => $account,
            'totalEntry'=>$toalEtries,
            'totalOut'=>$totalOuts,
            'accountTransactions'=>$accountTransactions,
            'last5'=>$last5,
        ]);
    }
}
