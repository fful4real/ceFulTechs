<?php

namespace App\Form;

use App\Entity\CeCustomer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Valid;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class,['attr'=>['placeholder'=>'Enter First Name','required'=>'required']])
            ->add('lastName', TextType::class,['attr'=>['placeholder'=>'Enter last Name']])
            ->add('mobNum', TextType::class,['attr'=>['placeholder'=>'Enter Mobile number','required'=>'required']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CeCustomer::class,
            'cascade_validation' => new Valid(),
        ]);
    }
}
