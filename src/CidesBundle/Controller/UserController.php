<?php

namespace CidesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CidesBundle\Entity\User;
use CidesBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
  public function indexAction()
    {
        return $this->render('CidesBundle:User:login.html.twig');
    }
    public function registroAction()
    {

      return $this->render('CidesBundle:User:registro.html.twig');
    }
    public function addAction()
  {
      $user = new User();
      $form = $this->createCreateForm($user);
      return $this->render('CidesBundle:User:registro.html.twig', array('form' => $form->createView())); //vista que tendra el formulario
  }
  private function createCreateForm(User $entity)
{
    $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('cides_homepage_create'),
            'method' => 'POST'
        ));
    return $form;
}
public function createAction(Request $request)
  {
    $user = new User();
    $form = $this->createCreateForm($user);
    $form -> handleRequest($request);
    if($form -> isValid())
    {
          $em =$this->getDoctrine()->getManager();
          $em-> persist($user);
          $em->flush();
        return $this ->redirectToRoute('cides_homepage');
    }
    return $this->render('CidesBundle:User:registro.html.twig', array('form' => $form->createView()));
  }
  ## 

}
