<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use App\Entity\CeUser;
use App\Form\RegistrationType;

class SecurityController extends AbstractController
{
	/**
	* @Route("/signup", name="cesecurity_signup")
	*/
    public function registrations(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder){
    	$user = new CeUser();
    	$userForm = $this->createForm(RegistrationType::class, $user);
    	$userForm->handleRequest($request);

    	if ($userForm->isSubmitted() && $userForm->isValid()) {
    		$hash = $encoder->encodePassword($user,$user->getCePassword());
    		$user->setCePassword($hash)
    			 ->setCeFirstName("Felix")
    			 ->setCeLastName("FUL CHI")
    			 ->setCeBirth(new \DateTime())
    			 ->setCeMobileNumber("679233367")
    			 ->setCeAdmin(1)
    			 ->setCeColor("green")
    			 ->setCeSalary(50000)
    			 ->setCeStatus(1)
    			 ->setCeAddress('Dubai')
    			 ->setCeDateLastLogin(new \DateTime())
    			 ->setDatec(new \DateTime())
    			 ->setTms(new \DateTime())
    			 ;


    		$manager->persist($user);

    		$manager->flush();

    		$this->addFlash('Success', 'User '.$user->getCeUsername().' created!');
                return $this->redirectToRoute('ceorder_list',[]);
    	}

    	return $this->render("security/registration.html.twig",[
    		'userForm'=>$userForm->createView(),
    		]);
    }

    /**
	* @Route("/signin", name="cesecurity_signin")
	*/

	public function ceSignIn(){

		return $this->render('security/celogin.html.twig',[]);
	}

    /**
	* @Route("/signout", name="cesecurity_signout")
	*/

	public function ceSignOut(){
	}
}
