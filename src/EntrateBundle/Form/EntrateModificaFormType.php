<?php

namespace EntrateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class EntrateModificaFormType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder
            ->add('cognome_persone', TextType::class, array('label' => false))
            
            ->add('numero_persone', IntegerType::class, array('label' => false))
            ->add('numero_entrata', IntegerType::class, array('label' => false))
           
            ->add('save', SubmitType::class, array('label' => 'salva'))
        ;
    }
    
    
}
