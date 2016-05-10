<?php

namespace AnagraficheBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class nuovo_clienteFormType extends AbstractType
{
   
    public function buildForm(FormBuilderInterface $builder, array $options) {
    
        $builder 
            ->add('nome', TextType::class, array('label' => false))
            ->add('cognome', TextType::class, array('label' => false))
            ->add('data', DateType::class, array('label' => false))
            ->add('indirizzo', TextType::class, array('label' => false))
            ->add('email', TextType::class, array('label' => false))
            ->add('telefono', IntegerType::class, array('label' => false))
            ->add('personeAggiuntive', IntegerType::class, array('label' => false))
            ->add('save', SubmitType::class, array('label' => 'Inserisci'))
        ;
    
    }
}
