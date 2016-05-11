<?php

namespace PacchettiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use PacchettiBundle\Entity\nuovo_pacchetto;
use PacchettiBundle\Form\nuovo_pacchettoFormType;


class PacchettiController extends Controller
{
    
    public function indexAction(Request $request)
    
    	{
        $pacchetto = new nuovo_pacchetto();

        
        $form1 = $this->createForm(nuovo_pacchettoFormType::class, $pacchetto);

        $form1->handleRequest($request);

        if ($form1->isSubmitted() && $form1->isValid()) {

            // Salvo cose.
            $pacchetto = $form1->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($pacchetto);
            $em->flush(); }


        return $this->render('PacchettiBundle:Pacchetti:index.html.twig', array(
        		'form1' => $form1->createView(),
        	));
    }
       
}
