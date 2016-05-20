<?php

namespace ContrattiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AnagraficheBundle\Entity\nuovo_cliente;
use AnagraficheBundle\Entity\aggiungi_persone;
use ContrattiBundle\Form\crea_contrattiFormType;

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


        // $form = $this->createForm(crea_contrattoFormType::class, $clienti);

        // $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {
        //     // Salvo cose.
        //     $clienti = $form->getData();

        //     $em = $this->getDoctrine()->getManager();
        //     $em->persist($clienti);
        //     $em->flush();
        // }


        


        return $this->render('ContrattiBundle:Contratti:contratti.html.twig', array(
            // 'form' => $form->createView(),
            'clienti' => $clienti,
        ));
       
    }
}
