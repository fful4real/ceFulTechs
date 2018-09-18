<?php

namespace App\Form;

use App\Entity\CeCustomer;
use App\Entity\CeTown;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CeCustomerUpdateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class,['attr'=>['placeholder'=>'Enter First Name','required'=>'required']])
            ->add('lastName', TextType::class,['attr'=>['placeholder'=>'Enter last Name'], 'required'=>false])
            ->add('mobNum', TextType::class,['attr'=>['placeholder'=>'Enter Mobile number','required'=>'required']])
            ->add('otherNumber')
            ->add('custNote')
            ->add('fkCeTown', EntityType::class,['class'=>CeTown::class, 'choice_label'=>'townAlias'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CeCustomer::class,
        ]);
    }
}
