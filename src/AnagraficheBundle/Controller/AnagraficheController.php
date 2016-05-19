<?php

namespace AnagraficheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AnagraficheBundle\Entity\nuovo_cliente;
use AnagraficheBundle\Entity\aggiungi_persone;
use AnagraficheBundle\Form\nuovo_clienteFormType;
use AnagraficheBundle\Form\aggiungi_personeFormType;

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
            $em->flush();
        }

        $aggiungi_persone = new aggiungi_persone();

        $form_persone = $this->createForm(aggiungi_personeFormType::class, $aggiungi_persone);

        $form_persone->handleRequest($request);

        if ($form_persone->isSubmitted() && $form_persone->isValid()) {
            // Salvo cose.
            $aggiungi_persone = $form_persone->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($aggiungi_persone);
            $em->flush();
        }
       

        return $this->render('AnagraficheBundle:Anagrafiche:index.html.twig', array(
                'form' => $form->createView(),
                'form_persone' => $form_persone->createView(),
        	));
    }

    public function viewAction(Request $request)
    {
        $clienti = $this->getDoctrine()->getRepository('AnagraficheBundle:nuovo_cliente')->findAll();
        $aggiungi_persone = $this->getDoctrine()->getRepository('AnagraficheBundle:aggiungi_persone')->findAll();

        return $this->render('AnagraficheBundle:Anagrafiche:lista_clienti.html.twig', array(
            'clienti' => $clienti,
            'aggiungi_persone' => $aggiungi_persone,
        ));
    }

     public function editclientiAction(Request $request)
    {
        $cliente = $this->getDoctrine()->getRepository('AnagraficheBundle:nuovo_cliente')->findOneById($request->get('id'));

        $form = $this->createForm(nuovo_clienteFormType::class, $cliente);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Salvo cose.
            $cliente = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($cliente);
            $em->flush();

            return $this->redirectToRoute('lista_anagrafiche');

        }
        
        return $this->render('AnagraficheBundle:Anagrafiche:edit_cliente.html.twig', array(
            'form' => $form->createView(),
        ));
    }
   
    // public function apiListClientiAction(Request $request) {
    //     $clienti = $this->getDoctrine()->getRepository('AnagraficheBundle:nuovo_cliente')->findAll();

    //     $data = [];
    //     foreach ($clienti as $cliente) {
    //         $data[] = [
    //             'id' => $cliente->getId(),
    //             'nome' => $cliente->getNome(),
    //             'cognome' => $cliente->getCognome(),
    //         ];
    //     }

    //     return new JsonResponse($data);
    // }
}
