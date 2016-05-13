<?php

namespace PacchettiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class serviziFormType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder

            ->add('persone', EntityType::class, array('class' => 'PacchettiBundle:nuovo_pacchetto', 'choice_label' => 'nomePacchetto','label' => false))
            ->add('nomeServizio', TextType::class, array('label' => false))
            ->add('costo_servizio', TextType::class, array('label' => false))
            ->add('save', SubmitType::class, array('label' => 'Inserisci'))
        ;
    }
    
}
