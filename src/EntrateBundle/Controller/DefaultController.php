<?php

namespace EntrateBundle\Controller;


use EntrateBundle\Entity\entrate;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use EntrateBundle\Form\EntrateFormType;
use EntrateBundle\Form\EntrateModificaFormType;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */

    	public function modificaAction(Request $request)
    {
        $entrata = new entrate();

        $formEntrate = $this->createForm(EntrateFormType::class, $entrata);

        $formEntrate->handleRequest($request);

        if ($formEntrate->isSubmitted() && $formEntrate->isValid()) {
            // Salvo cose.
            $entrata = $formEntrate->getData();
            if($formEntrate->isValid()){

  // persisting and flushing the entity

            $em = $this->getDoctrine()->getManager();
            $em->persist($entrata);
            $em->flush();

            
    }}
        $entrata = $this->getDoctrine()->getRepository('EntrateBundle:entrate')->findAll();

       

        $formEntrate1 = $this->createForm(EntrateModificaFormType::class, $entrata);

        $formEntrate1->handleRequest($request);

        if ($formEntrate1->isSubmitted() && $formEntrate1->isValid()) {
            // Salvo cose.
            $entrata = $formEntrate1->getData();
            if($formEntrate1->isValid()){

  // persisting and flushing the entity

            $em = $this->getDoctrine()->getManager();
            $em->persist($entrata);
            $em->flush();
    }}

        $entrate = $this->getDoctrine()
        ->getRepository('EntrateBundle:Entrate')
        ->findAll();

        return $this->render('EntrateBundle:Modifica:index.html.twig', array(
        	'form' => $formEntrate->createView(),
            'form1' => $formEntrate1->createView(),
            'lista_persone' => $entrate,
        	));
    }}