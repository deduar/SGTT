<?php

namespace deduar\S3SandBoxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use deduar\S3SandBoxBundle\Entity\TypoExcepcion;
use deduar\S3SandBoxBundle\Form\TypoExcepcionType;

/**
 * TypoExcepcion controller.
 *
 * @Route("/typoexcepcion")
 */
class TypoExcepcionController extends Controller
{
    /**
     * Lists all TypoExcepcion entities.
     *
     * @Route("/", name="typoexcepcion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typoExcepcions = $em->getRepository('S3SandBoxBundle:TypoExcepcion')->findAll();

        return $this->render('typoexcepcion/index.html.twig', array(
            'typoExcepcions' => $typoExcepcions,
        ));
    }

    /**
     * Creates a new TypoExcepcion entity.
     *
     * @Route("/new", name="typoexcepcion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $typoExcepcion = new TypoExcepcion();
        $form = $this->createForm('deduar\S3SandBoxBundle\Form\TypoExcepcionType', $typoExcepcion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typoExcepcion);
            $em->flush();

            return $this->redirectToRoute('typoexcepcion_show', array('id' => $typoExcepcion->getId()));
        }

        return $this->render('typoexcepcion/new.html.twig', array(
            'typoExcepcion' => $typoExcepcion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TypoExcepcion entity.
     *
     * @Route("/{id}", name="typoexcepcion_show")
     * @Method("GET")
     */
    public function showAction(TypoExcepcion $typoExcepcion)
    {
        $deleteForm = $this->createDeleteForm($typoExcepcion);

        return $this->render('typoexcepcion/show.html.twig', array(
            'typoExcepcion' => $typoExcepcion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TypoExcepcion entity.
     *
     * @Route("/{id}/edit", name="typoexcepcion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TypoExcepcion $typoExcepcion)
    {
        $deleteForm = $this->createDeleteForm($typoExcepcion);
        $editForm = $this->createForm('deduar\S3SandBoxBundle\Form\TypoExcepcionType', $typoExcepcion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typoExcepcion);
            $em->flush();

            return $this->redirectToRoute('typoexcepcion_edit', array('id' => $typoExcepcion->getId()));
        }

        return $this->render('typoexcepcion/edit.html.twig', array(
            'typoExcepcion' => $typoExcepcion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TypoExcepcion entity.
     *
     * @Route("/{id}", name="typoexcepcion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TypoExcepcion $typoExcepcion)
    {
        $form = $this->createDeleteForm($typoExcepcion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typoExcepcion);
            $em->flush();
        }

        return $this->redirectToRoute('typoexcepcion_index');
    }

    /**
     * Creates a form to delete a TypoExcepcion entity.
     *
     * @param TypoExcepcion $typoExcepcion The TypoExcepcion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypoExcepcion $typoExcepcion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typoexcepcion_delete', array('id' => $typoExcepcion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
