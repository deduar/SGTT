<?php

namespace deduar\S3SandBoxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use deduar\S3SandBoxBundle\Entity\Excepcion;
use deduar\S3SandBoxBundle\Form\ExcepcionType;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use deduar\S3SandBoxBundle\Entity\Empleado;


/**
 * Excepcion controller.
 *
 * @Route("/excepcion")
 */
class ExcepcionController extends Controller
{
    /**
     * Lists all Excepcion entities.
     *
     * @Route("/", name="excepcion_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $excepcions = $em->getRepository('S3SandBoxBundle:Excepcion')->findAll();
        $session = $request->getSession();
        $empleado = $em->getRepository('S3SandBoxBundle:Empleado')
                ->findOneById($session->get('id'));
        return $this->render('excepcion/index.html.twig', array(
            'empleado' => $empleado,
            'excepcions' => $excepcions,
        ));
    }

    /**
     * Creates a new Excepcion entity.
     *
     * @Route("/new", name="excepcion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $excepcion = new Excepcion();
        $form = $this->createForm('deduar\S3SandBoxBundle\Form\ExcepcionType', $excepcion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $session = $request->getSession();
            $excepcion->setSolicitante($session->get('id'));
            $excepcion->setFechaCreacion(new \DateTime('now'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($excepcion);
            $em->flush();

            return $this->redirectToRoute('excepcion_show', array('id' => $excepcion->getId()));
        }

        return $this->render('excepcion/new.html.twig', array(
            'excepcion' => $excepcion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Excepcion entity.
     *
     * @Route("/{id}", name="excepcion_show")
     * @Method("GET")
     */
    public function showAction(Excepcion $excepcion)
    {
        $deleteForm = $this->createDeleteForm($excepcion);

        return $this->render('excepcion/show.html.twig', array(
            'excepcion' => $excepcion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Excepcion entity.
     *
     * @Route("/{id}/edit", name="excepcion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Excepcion $excepcion)
    {
        $deleteForm = $this->createDeleteForm($excepcion);
        $editForm = $this->createForm('deduar\S3SandBoxBundle\Form\ExcepcionType', $excepcion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($excepcion);
            $em->flush();

            return $this->redirectToRoute('excepcion_edit', array('id' => $excepcion->getId()));
        }

        return $this->render('excepcion/edit.html.twig', array(
            'excepcion' => $excepcion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Excepcion entity.
     *
     * @Route("/{id}", name="excepcion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Excepcion $excepcion)
    {
        $form = $this->createDeleteForm($excepcion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($excepcion);
            $em->flush();
        }

        return $this->redirectToRoute('excepcion_index');
    }

    /**
     * Creates a form to delete a Excepcion entity.
     *
     * @param Excepcion $excepcion The Excepcion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Excepcion $excepcion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('excepcion_delete', array('id' => $excepcion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
