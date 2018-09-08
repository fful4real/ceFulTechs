<?php

namespace App\Form;

use App\Entity\CeAccount;
use App\Entity\CeBank;
use App\Entity\CeAccountType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ceAccountCode', TextType::class,['attr'=>['placeholder'=>'Enter Account Code','required'=>'required']])
            ->add('ceAccountNumber', TextType::class,['attr'=>['placeholder'=>'Enter Account Number','required'=>'required']])
            ->add('ceAccountName', TextType::class,['attr'=>['placeholder'=>'Enter Account Name','required'=>'required']])
            ->add('ceAccountActive')
            ->add('ceBank', EntityType::class,['class'=>CeBank::class, 'choice_label'=>'ceBankName'])
            ->add('fkCeAccountType', EntityType::class,['label'=>'Account Type', 'class'=>CeAccountType::class, 'choice_label'=>'ceAccountTypeName'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CeAccount::class,
        ]);
    }
}


