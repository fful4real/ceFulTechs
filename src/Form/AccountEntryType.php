<?php

namespace App\Form;

use Symfony\Component\Form\FormBuilderInterface;
use App\Entity\CeCustomer;
use App\Entity\CeAccountEntry;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Valid;

class AccountEntryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ceAmount', TextType::class,['attr'=>['placeholder'=>'Entrer le montant','required'=>'required']])
            ->add('fkCeCustomer', CustomerType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CeAccountEntry::class,
            'cascade_validation' => new Valid(),
        ]);
    }
}
