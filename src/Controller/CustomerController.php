<?php

namespace App\Controller;

use App\Entity\CeCustomer;
use App\Form\CustomerType;
use App\Repository\CeCustomerRepository;
use App\Repository\CeTownRepository;
use App\Repository\CeorderRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    /**
     * @Route("/customer", name="customer")
     */
    public function index()
    {
        return $this->render('customer/index.html.twig', [
            'controller_name' => 'CustomerController',
        ]);
    }


    /**
     * @Route("/customer/list", name="customer_list")
     */
    public function customerList(CeorderRepository $orderRepo, CeCustomerRepository $repo, CeCustomerRepository $customerRepo, CeTownRepository $townRepo, Request $reqt)
    {
        $limit = 100;
        $page = intval($reqt->query->get('page')) ?:1;
        $pagination = $orderRepo->getPagination($page,$limit);
        $customerData = $repo->getCustomerData();
        $offset = ($page - 1)  * $limit;
        $customers = $repo->findBy(array(), array('firstName' => 'DESC'),$limit,$offset);

        return $this->render('customer/list.html.twig', [
            'customers'=>$customers,
            'pagination'=>$pagination,
            'page'=>$page,
            'customerData'=>$customerData,
        ]);
    }

    /**
     * @Route("/customer/new", name="customer_new")
     * @Route("/customer/{id}/edit", name="customer_edit")
     */

    public function customerForm(CeCustomer $customer = null, Request $reqt, ObjectManager $manager)
    {
        if (!$customer) {
            $customer = new CeCustomer();
        }

        $customerForm = $this->createForm(CustomerType::class, $customer);
        $customerForm->handleRequest($reqt);


        if ($customerForm->isSubmitted() && $customerForm->isValid()) {
            $postData = $reqt->request;

            if (!$customer->getId()) {
                $customer->setDatec(new \DateTime());
            }
            $customer->setCustNote('Customers Note')
                    ->setTms(new \DateTime())
                    ->setOtherNumber(['05563301795', '05563301795']);

            $manager->persist($customer);

            $manager->flush();

        }

        return $this->render('customer/customerform.html.twig', [
            'customerForm' => $customerForm->createView(), 'editMode'=>$customer->getId() !== null
        ]);
    }

    /**
     * @Route("/customer/{id}", name="customer_show")
     */

    public function customerShow(CeCustomer $customer = null)
    {
        if (!$customer) {
           return $this->redirectToRoute('customer_list');
        }

    	return $this->render('customer/show.html.twig', [
            'customer' => $customer,
        ]);
    }
}
