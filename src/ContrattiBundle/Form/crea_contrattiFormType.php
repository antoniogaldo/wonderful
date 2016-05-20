<?php  

namespace ContrattiBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class crea_contrattiFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
         
           	->add('cliente', EntityType::class, array('class' => 'AnagraficheBundle:nuovo_cliente', 'choice_label' => 'cognome','label' => false))
                ->add('persone', EntityType::class, array('class' => 'PacchettiBundle:nuovo_pacchetto', 'choice_label' => 'nomePacchetto','label' => false))
           
            ->add('save', SubmitType::class, array('label' => false))
        ;
    }
}