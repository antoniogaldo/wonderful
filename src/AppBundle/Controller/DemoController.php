<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class DemoController extends Controller  
{
    /**
     * Export to PDF
     * 
     * @Route("/pdf", name="acme_demo_pdf")
     */
    public function pdfAction(Request $request)
    {

        $cliente = $this->getDoctrine()
            ->getRepository('AnagraficheBundle:nuovo_cliente')
            ->findOneById($request->get('id'));

        $html = $this->renderView('AppBundle:Demo:pdf.html.twig', [
            'cliente' => $cliente,
        ]);


        $filename = sprintf('test-%s.pdf', date('Y-m-d'));

        return new Response(
            
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
            ]
        );
    }
}

