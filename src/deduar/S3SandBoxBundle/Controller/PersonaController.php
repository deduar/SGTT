<?php

namespace deduar\S3SandBoxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use deduar\S3SandBoxBundle\Entity\Persona;
use deduar\S3SandBoxBundle\Form\PersonaType;

/**
 * Persona controller.
 *
 * @Route("/persona")
 */
class PersonaController extends Controller
{
    /**
     * Lists all Persona entities.
     *
     * @Route("/", name="persona_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('S3SandBoxBundle:Empleado')
                ->findOneBy(array('id'=>$session->get('id')));

        $personas = $em->getRepository('S3SandBoxBundle:Persona')->findAll();

        return $this->render('persona/index.html.twig', array(
            'empleado' => $empleado,
            'personas' => $personas,
        ));
    }

    /**
     * Creates a new Persona entity.
     *
     * @Route("/new", name="persona_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $persona = new Persona();
        $form = $this->createForm('deduar\S3SandBoxBundle\Form\PersonaType', $persona);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($persona);
            $em->flush();

            return $this->redirectToRoute('persona_show', array('id' => $persona->getId()));
        }

        return $this->render('persona/new.html.twig', array(
            'persona' => $persona,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Persona entity.
     *
     * @Route("/{id}", name="persona_show")
     * @Method("GET")
     */
    public function showAction(Request $request, Persona $persona)
    {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('S3SandBoxBundle:Empleado')
                ->findOneBy(array('id'=>$session->get('id')));
        $deleteForm = $this->createDeleteForm($persona);

        return $this->render('persona/show.html.twig', array(
            'empleado' => $empleado,
            'persona' => $persona,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Persona entity.
     *
     * @Route("/{id}/edit", name="persona_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Persona $persona)
    {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('S3SandBoxBundle:Empleado')
                ->findOneBy(array('id'=>$session->get('id')));
        $deleteForm = $this->createDeleteForm($persona);
        $editForm = $this->createForm('deduar\S3SandBoxBundle\Form\PersonaType', $persona);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            if ($editForm->get('cancel')->isClicked()) {
                return $this->redirectToRoute('empleado_show', array('id'=>$empleado->getId()));
            } else {
            $em = $this->getDoctrine()->getManager();
            $em->persist($persona);
            $em->flush();

            return $this->redirectToRoute('empleado_show', array('id' => $empleado->getId()));
            }
        }

        return $this->render('persona/edit.html.twig', array(
            'persona' => $persona,
            'empleado' => $empleado,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Persona entity.
     *
     * @Route("/{id}", name="persona_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Persona $persona)
    {
        $form = $this->createDeleteForm($persona);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($persona);
            $em->flush();
        }

        return $this->redirectToRoute('persona_index');
    }

    /**
     * Creates a form to delete a Persona entity.
     *
     * @param Persona $persona The Persona entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Persona $persona)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('persona_delete', array('id' => $persona->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
