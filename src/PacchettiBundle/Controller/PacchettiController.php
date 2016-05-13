<?php

namespace PacchettiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use PacchettiBundle\Entity\nuovo_pacchetto;
use PacchettiBundle\Entity\servizi;
use PacchettiBundle\Form\nuovo_pacchettoFormType;
use PacchettiBundle\Form\serviziFormType;



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

        $servizi = new servizi();

        
        $form2 = $this->createForm(serviziFormType::class, $servizi);

        $form2->handleRequest($request);

        if ($form2->isSubmitted() && $form2->isValid()) {

            // Salvo cose.
            $servizi = $form2->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($servizi);
            $em->flush(); }


        return $this->render('PacchettiBundle:Pacchetti:index.html.twig', array(
        		'form1' => $form1->createView(),
                'form2' => $form2->createView(),
        	));
    }
       
}
