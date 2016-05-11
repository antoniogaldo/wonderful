<?php

namespace AnagraficheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AnagraficheBundle\Entity\nuovo_cliente;
use AnagraficheBundle\Form\nuovo_clienteFormType;

class AnagraficheController extends Controller
{
 
	public function createAction(Request $request)

    {
        $cliente = new nuovo_cliente();

        
        $form = $this->createForm(nuovo_clienteFormType::class, $cliente);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Salvo cose.
            $cliente = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($cliente);
            $em->flush(); }


        return $this->render('AnagraficheBundle:Anagrafiche:index.html.twig', array(
        		'form' => $form->createView(),
        	));
    }

    public function viewAction(Request $request)

    
    {
        $cliente = $this->getDoctrine()->getRepository('AnagraficheBundle:nuovo_cliente')->findAll();

        $form = $this->createForm(nuovo_clienteFormType::class, $cliente);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Salvo cose.
            $cliente = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($cliente);

            $em->flush(); }

        $cliente = $this->getDoctrine()->getRepository('AnagraficheBundle:nuovo_cliente')->findAll();

        

        return $this->render('AnagraficheBundle:Anagrafiche:lista_clienti.html.twig', array(
            'form_lista' => $cliente,
            'form' => $form->createView(),
        ));
    }

    

}
