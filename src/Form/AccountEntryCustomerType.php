<?php

namespace App\Form;

use App\Entity\CeCustomer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Session\Session;

class AccountEntryCustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $session = new Session();

        $builder
            ->add('firstName', TextType::class,['attr'=>['placeholder'=>'Entrer le prenon','required'=>'required']])
            ->add('lastName', TextType::class,['attr'=>['placeholder'=>'Entrer le nom']])
            ->add('mobNum', TextType::class,['attr'=>['placeholder'=>'Entrer le numero','required'=>'required']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CeCustomer::class,
        ]);
    }
}
