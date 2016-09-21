<?php

// comentario vacio

namespace deduar\S3SandBoxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use deduar\S3SandBoxBundle\Entity\Empleado;
use deduar\S3SandBoxBundle\Form\EmpleadoType;

use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Empleado controller.
 *
 * @Route("/empleado")
 */
class EmpleadoController extends Controller
{
    /**
     * Lists all Empleado entities.
     *
     * @Route("/", name="empleado_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {

            $em = $this->getDoctrine()->getManager();
            $empleados = $em->getRepository('S3SandBoxBundle:Empleado')->findAll();
            return $this->render('empleado/index.html.twig', 
                array('empleados' => $empleados,));
    }

    /**
     * Creates a new Empleado entity.
     *
     * @Route("/new", name="empleado_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $empleado = new Empleado();
        $form = $this->createForm('deduar\S3SandBoxBundle\Form\EmpleadoType', $empleado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($empleado);
            $em->flush();

            return $this->redirectToRoute('empleado_show', array('id' => $empleado->getId()));
        }

        return $this->render('empleado/new.html.twig', array(
            'empleado' => $empleado,
            'form' => $form->createView(),
        ));
    }

    /**
     * Login with empleado.login (without validation, be careful !!!)
     *
     * @Route("/login", name="empleado_login")
     * @Method({"GET", "POST"})
     */
    public function loginAction(Request $request)
    {   
        $empleado = new Empleado();
        $form = $this->createForm('deduar\S3SandBoxBundle\Form\EmpleadoLoginType', $empleado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $empleadoSearch = $em->getRepository('S3SandBoxBundle:Empleado')
                            ->findOneBy(array('login'=>$empleado->getLogin()));
            if ($empleadoSearch) {
                $session = $request->getSession();
                $session->set('id',$empleadoSearch->getId());
                $deleteForm = $this->createDeleteForm($empleadoSearch);
                return $this->render('empleado/show.html.twig', array(
                        'empleado' => $empleadoSearch,
                        'delete_form' => $deleteForm->createView(),));
            }
        }
        return $this->render('empleado/login.html.twig', array(
            'empleado' => $empleado,
            'form' => $form->createView(),));
    }

    /**
     * Finds and displays a Empleado entity.
     *
     * @Route("/{id}", name="empleado_show")
     * @Method("GET")
     */
    public function showAction(Empleado $empleado)
    {
        $deleteForm = $this->createDeleteForm($empleado);

        return $this->render('empleado/show.html.twig', array(
            'empleado' => $empleado,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Empleado entity.
     *
     * @Route("/{id}/edit", name="empleado_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Empleado $empleado)
    {
        $deleteForm = $this->createDeleteForm($empleado);
        $editForm = $this->createForm('deduar\S3SandBoxBundle\Form\EmpleadoType', $empleado);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($empleado);
            $em->flush();

            return $this->redirectToRoute('empleado_edit', array('id' => $empleado->getId()));
        }

        return $this->render('empleado/edit.html.twig', array(
            'empleado' => $empleado,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Empleado entity.
     *
     * @Route("/{id}", name="empleado_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Empleado $empleado)
    {
        $form = $this->createDeleteForm($empleado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($empleado);
            $em->flush();
        }

        return $this->redirectToRoute('empleado_index');
    }

    /**
     * Creates a form to delete a Empleado entity.
     *
     * @param Empleado $empleado The Empleado entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Empleado $empleado)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('empleado_delete', array('id' => $empleado->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
