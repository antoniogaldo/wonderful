<?php

namespace PacchettiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class PacchettiController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('PacchettiBundle:Pacchetti:index.html.twig');
    }
}
