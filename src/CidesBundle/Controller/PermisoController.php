<?php

namespace CidesBundle\Controller;

use CidesBundle\Entity\Permiso;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Permiso controller.
 *
 */
class PermisoController extends Controller
{
    /**
     * Lists all permiso entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $permisos = $em->getRepository('CidesBundle:Permiso')->findAll();
        $menuitems    = $em->getRepository('CidesBundle:Menuitem')->findAll();
        return $this->render('permiso/index.html.twig', array(
            'permisos' => $permisos,
            'menuitems' => $menuitems,
        ));
    }

    /**
     * Creates a new permiso entity.
     *
     */
    public function newAction(Request $request)
    {
        $permiso = new Permiso();
        $form = $this->createForm('CidesBundle\Form\PermisoType', $permiso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($permiso);
            $em->flush();

            return $this->redirectToRoute('permiso_show', array('idPermiso' => $permiso->getIdpermiso()));
        }

        return $this->render('permiso/new.html.twig', array(
            'permiso' => $permiso,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a permiso entity.
     *
     */
    public function showAction(Permiso $permiso)
    {
        $deleteForm = $this->createDeleteForm($permiso);

        return $this->render('permiso/show.html.twig', array(
            'permiso' => $permiso,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing permiso entity.
     *
     */
    public function editAction(Request $request, Permiso $permiso)
    {
        $deleteForm = $this->createDeleteForm($permiso);
        $editForm = $this->createForm('CidesBundle\Form\PermisoType', $permiso);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('permiso_edit', array('idPermiso' => $permiso->getIdpermiso()));
        }

        return $this->render('permiso/edit.html.twig', array(
            'permiso' => $permiso,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a permiso entity.
     *
     */
    public function deleteAction(Request $request, Permiso $permiso)
    {
        $form = $this->createDeleteForm($permiso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($permiso);
            $em->flush();
        }

        return $this->redirectToRoute('permiso_index');
    }

    /**
     * Creates a form to delete a permiso entity.
     *
     * @param Permiso $permiso The permiso entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Permiso $permiso)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('permiso_delete', array('idPermiso' => $permiso->getIdpermiso())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
