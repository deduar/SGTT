<?php

namespace deduar\S3SandBoxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use deduar\S3SandBoxBundle\Entity\TypoEstadoExcepcion;
use deduar\S3SandBoxBundle\Form\TypoEstadoExcepcionType;

/**
 * TypoEstadoExcepcion controller.
 *
 * @Route("/typoestadoexcepcion")
 */
class TypoEstadoExcepcionController extends Controller
{
    /**
     * Lists all TypoEstadoExcepcion entities.
     *
     * @Route("/", name="typoestadoexcepcion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typoEstadoExcepcions = $em->getRepository('S3SandBoxBundle:TypoEstadoExcepcion')->findAll();

        return $this->render('typoestadoexcepcion/index.html.twig', array(
            'typoEstadoExcepcions' => $typoEstadoExcepcions,
        ));
    }

    /**
     * Creates a new TypoEstadoExcepcion entity.
     *
     * @Route("/new", name="typoestadoexcepcion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $typoEstadoExcepcion = new TypoEstadoExcepcion();
        $form = $this->createForm('deduar\S3SandBoxBundle\Form\TypoEstadoExcepcionType', $typoEstadoExcepcion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typoEstadoExcepcion);
            $em->flush();

            return $this->redirectToRoute('typoestadoexcepcion_show', array('id' => $typoEstadoExcepcion->getId()));
        }

        return $this->render('typoestadoexcepcion/new.html.twig', array(
            'typoEstadoExcepcion' => $typoEstadoExcepcion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TypoEstadoExcepcion entity.
     *
     * @Route("/{id}", name="typoestadoexcepcion_show")
     * @Method("GET")
     */
    public function showAction(TypoEstadoExcepcion $typoEstadoExcepcion)
    {
        $deleteForm = $this->createDeleteForm($typoEstadoExcepcion);

        return $this->render('typoestadoexcepcion/show.html.twig', array(
            'typoEstadoExcepcion' => $typoEstadoExcepcion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TypoEstadoExcepcion entity.
     *
     * @Route("/{id}/edit", name="typoestadoexcepcion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TypoEstadoExcepcion $typoEstadoExcepcion)
    {
        $deleteForm = $this->createDeleteForm($typoEstadoExcepcion);
        $editForm = $this->createForm('deduar\S3SandBoxBundle\Form\TypoEstadoExcepcionType', $typoEstadoExcepcion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typoEstadoExcepcion);
            $em->flush();

            return $this->redirectToRoute('typoestadoexcepcion_edit', array('id' => $typoEstadoExcepcion->getId()));
        }

        return $this->render('typoestadoexcepcion/edit.html.twig', array(
            'typoEstadoExcepcion' => $typoEstadoExcepcion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TypoEstadoExcepcion entity.
     *
     * @Route("/{id}", name="typoestadoexcepcion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TypoEstadoExcepcion $typoEstadoExcepcion)
    {
        $form = $this->createDeleteForm($typoEstadoExcepcion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typoEstadoExcepcion);
            $em->flush();
        }

        return $this->redirectToRoute('typoestadoexcepcion_index');
    }

    /**
     * Creates a form to delete a TypoEstadoExcepcion entity.
     *
     * @param TypoEstadoExcepcion $typoEstadoExcepcion The TypoEstadoExcepcion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypoEstadoExcepcion $typoEstadoExcepcion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typoestadoexcepcion_delete', array('id' => $typoEstadoExcepcion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
