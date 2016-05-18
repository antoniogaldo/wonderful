<?php

namespace PacchettiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class nuovo_pacchettoFormType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('nomePacchetto', TextType::class, array('label' => false))
            ->add('dataInizio',DateType::class, array('placeholder' => array(
        'year' => 'Anno', 'month' => 'Mese', 'day' => 'Giorno'),'label' => false))
            ->add('dataFine',DateType::class, array('placeholder' => array(
        'year' => 'Anno', 'month' => 'Mese', 'day' => 'Giorno'),'label' => false))
            ->add('save', SubmitType::class, array('label' => 'Inserisci'))
        ;
    }
    
}
