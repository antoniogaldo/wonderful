<?php

namespace AnagraficheBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class aggiungi_personeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder 
            ->add('nome', TextType::class, array('label' => false))
            ->add('cognome', TextType::class, array('label' => false))
            ->add('cliente', EntityType::class, array('class' => 'AnagraficheBundle:nuovo_cliente', 'choice_label' => 'cognome','label' => false))
            ->add('data', DateType::class, array('label' => false))
            ->add('save', SubmitType::class, array('label' => 'Inserisci'))
        ;
    }
}
