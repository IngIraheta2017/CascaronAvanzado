<?php

namespace CidesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProyectoController extends Controller
{
  public function indexAction()
    {
        return $this->render('CidesBundle:Proyecto:estadoProyecto.html.twig');
    }
}
