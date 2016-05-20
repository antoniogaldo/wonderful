<?php

namespace ContrattiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ContrattiController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {

    	 $clienti = $this->getDoctrine()
        ->getRepository('AnagraficheBundle:nuovo_cliente')
        ->findAll();

       

        $pacchetto = $this->getDoctrine()
            ->getRepository('PacchettiBundle:nuovo_pacchetto')
            ->findAll();


        return $this->render('ContrattiBundle:Contratti:contratti.html.twig', array(

            'clienti' => $clienti,
            'pacchetto' => $pacchetto,
        ));
       
    }
}
