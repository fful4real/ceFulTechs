<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\CeCustomer;
use App\Repository\CeCustomerRepository;
use App\Form\CustomerType;

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
    }/**
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
}
