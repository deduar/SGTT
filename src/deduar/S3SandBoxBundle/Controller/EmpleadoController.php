<?php

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
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('S3SandBoxBundle:Empleado')
                ->findOneBy(array('id'=>$session->get('id')));
        $em = $this->getDoctrine()->getManager();
        $empleados = $em->getRepository('S3SandBoxBundle:Empleado')->findAll();
        return $this->render('empleado/index.html.twig');
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

        return $this->render('empleado/new.html.twig');
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
            $e = $em->getRepository('S3SandBoxBundle:Empleado')
                    ->findOneBy(array('login'=>$empleado->getLogin()));
            $p = $em->getRepository('S3SandBoxBundle:Persona')
                    ->findOneBy(array('id'=>$e->getIdpersona()));
            if ($e) {
                $session = $request->getSession();
                $session->set('id',$e->getId());
                $name = $p->getPNombre().' '.' '.$p->getSNombre().' '.$p->getPApellido().' '.$p->getSApellido();
                $session->set('name',$name);

                $id[]=$session->get('id');
                $nivel=0;
                while (sizeof($id)) {
                    $nivel = $nivel+1;
                    $empleados = $em->getRepository('S3SandBoxBundle:Empleado')
                                ->findByIdsupervisor($id);
                    $id=null;
                    for($i=0;$i<(sizeof($empleados));$i++){
                        $id[]=$empleados[$i]->getId();
                    }
                }
                $session->set('nivel',$nivel);
                $deleteForm = $this->createDeleteForm($e);
                return $this->redirectToRoute('excepcion_index');
            }
        }
        return $this->render('empleado/login.html.twig', array(
            'form' => $form->createView(),));
    }

    /**
     * Logou empleado. (without validation, be careful !!!)
     *
     * @Route("/logout", name="empleado_logout")
     * @Method({"GET", "POST"})
     */
    public function logouAction(Request $request)
    {   
        $session = $request->getSession();
        $session->remove('id');
        return $this->redirectToRoute('empleado_login');
    }

    /**
     * Finds and displays a Empleado entity.
     *
     * @Route("/{id}", name="empleado_show")
     * @Method("GET")
     */
    public function showAction(Request $request, Empleado $empleado)
    {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('S3SandBoxBundle:Empleado')
                ->findOneBy(array('id'=>$session->get('id')));
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
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('S3SandBoxBundle:Empleado')
                ->findOneBy(array('id'=>$session->get('id')));
        $deleteForm = $this->createDeleteForm($empleado);
        $editForm = $this->createForm('deduar\S3SandBoxBundle\Form\EmpleadoType', $empleado);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            if ($editForm->get('cancel')->isClicked()) {
                return $this->redirectToRoute('empleado_show', array('id'=>$empleado->getId()));
            } else {
            $em = $this->getDoctrine()->getManager();
            $em->persist($empleado);
            $em->flush();

            return $this->redirectToRoute('empleado_show', array('id'=>$empleado->getId()));
            }
        }

        return $this->render('empleado/edit.html.twig', array(
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
