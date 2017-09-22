<?php

namespace CidesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortadaController extends Controller
{
  public function indexAction()
    {
        return $this->render('CidesBundle:Portada:home.html.twig');
    }
}
