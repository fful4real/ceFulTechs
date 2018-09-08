<?php

namespace App\Form;

use App\Entity\Ceorder;
use App\Entity\OrderType;
use App\Entity\CeTown;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CeorderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ceAmount', TextType::class,['attr'=>['placeholder'=>'Amount','required'=>'required']])
            ->add('ceMobnum', TextType::class,['attr'=>['placeholder'=>'Enter Mobile number','required'=>'required']])
            ->add('orderType', EntityType::class,['class'=>OrderType::class, 'choice_label'=>'orderTypeCode'])
            ->add('fkCeTown', EntityType::class,['class'=>CeTown::class, 'choice_label'=>'townAlias'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ceorder::class,
        ]);
    }
}
