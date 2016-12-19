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

use deduar\S3SandBoxBundle\Entity\TypoEstadoExcepcion;

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
     * @Route("/modifcar1", name="modificar1")
     * @Method({"GET", "POST"})
     */
    public function modificar1Action(Request $request)
    {
        print_r($request->request->all());
        die('modificar1');
    }


    /**
     * Lists all Excepcion entities.
     *
     * @Route("/{id}/gen_report", name="gen_report")
     * @Method({"GET", "POST"})
     */
    public function genReportAction(Request $request, Excepcion $excepcion)
    {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $persona = $em->getRepository('S3SandBoxBundle:Persona')
                ->findOneBy(array('id'=>$excepcion->getIdempleado()));
        $empleado = $em->getRepository('S3SandBoxBundle:Empleado')
                ->findOneBy(array('id'=>$excepcion->getIdempleado()));

        print_r("DATOS DEL EMPLEADO -------"); echo"<br>";
        print_r($excepcion->getId()); echo"<br>";
        print_r($persona->getPNombre());
        print_r($persona->getPApellido()); echo"<br>";
        print_r($empleado->getFicha()); echo"<br>";
        print_r($excepcion->getFechaCreacion()); echo"<br>";
        print_r($excepcion->getFechaInicio()); echo"<br>";
        print_r($excepcion->getFechaFin()); echo"<br>";
        print_r($excepcion->getFechaFin()->
                diff($excepcion->getFechaInicio())->
                format('%y Años %m Meses %d Dias %h Horas %i Minutos'));
        echo"<br>";
        print_r($excepcion->getObservacion()); echo"<br>";

        print_r("DATOS DEL Supervisor -------"); echo"<br>";
        $em_j = $em->getRepository('S3SandBoxBundle:Empleado')
                ->findOneBy(array('id'=>$excepcion->getIdempleado()));

        if ($em_j->getIdsupervisor() != null) {
            print_r($em_j->getIdsupervisor()->getId()); echo"<br>";
            $p_j = $em->getRepository('S3SandBoxBundle:Persona')
                    ->findOneBy(array('id'=>$em_j->getIdsupervisor()->getId()));
            print_r($p_j->getPNombre());
            print_r($p_j->getPApellido()); echo "<br>";
            print_r($em_j->getIdcargo()->getNombre()); echo "<br>";
            //print_r($this->date = new \DateTime());echo "<br>";

            print_r("DATOS DEL Gerente -------"); echo"<br>";
            print_r($em_j->getIdsupervisor()->getIdsupervisor()->getId());
            echo"<br>";
            $em_s = $em->getRepository('S3SandBoxBundle:Empleado')
                    ->findOneBy(array
                    ('id'=>$em_j->getIdsupervisor()->getIdsupervisor()->getId()));

            print_r($em_s->getId());
            $p_s = $em->getRepository('S3SandBoxBundle:Persona')
                    ->findOneBy(array('id'=>$em_s->getId()));
            print_r($p_s->getPNombre());
            print_r($p_s->getPApellido()); echo"<br>";
            print_r($em_s->getIdcargo()->getNombre()); echo "<br>";
        }
        

        die('GenReport to pdf ------>');
    }        

    /**
     * Lists all Excepcion entities.
     *
     * @Route("/", name="excepcion_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();

        $empleado = $em->getRepository('S3SandBoxBundle:Empleado')
                ->findOneBy(array('id'=>$session->get('id')));
        $persona = $em->getRepository('S3SandBoxBundle:Persona')
                ->findOneBy(array('id'=>$empleado->getIdpersona()));

        $id[]=$session->get('id');
        $persons[]=$persona;

        while (sizeof($id)) {
            $excepciones = $em->getRepository('S3SandBoxBundle:Excepcion')
                            ->findByIdempleado($id);
            $empleados = $em->getRepository('S3SandBoxBundle:Empleado')
                        ->findByIdsupervisor($id);
            $personas = $em->getRepository('S3SandBoxBundle:Persona')
                        ->findById($id);

            for ($i=0; $i < sizeof($personas); $i++) { 
                $persons[]=$personas[$i];
            }

            $id=null;
            for($i=0;$i<(sizeof($empleados));$i++){
                $id[]=$empleados[$i]->getId();
            }

            for($i=0;$i<sizeof($excepciones);$i++){
                $ex[] = $excepciones[$i];
                $duracions[] = 
                    $excepciones[$i]->getFechaFin()->
                    diff($excepciones[$i]->getFechaInicio())->
                    format('%y Años %m Meses %d Dias %h Horas %i Minutos');
            }
        }

        if (!(isset($ex))) {
            $ex = null;
            $duracions = null;
        }

        return $this->render('excepcion/index.html.twig', array(
            'ex' => $ex,
            'persons' => $persons,
            'duracions' => $duracions
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
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $excepcion = new Excepcion();
        $excepcion->setIdempleado($request->getSession()->get('id'));
        if ($session->get('nivel') == 1) {
            $form = $this->createForm('deduar\S3SandBoxBundle\Form\ExcepcionEmpleadoType', $excepcion);
        } 
        if (($session->get('nivel') == 2) or ($session->get('nivel') == 3)) {
            $form = $this->createForm('deduar\S3SandBoxBundle\Form\ExcepcionSupervisorType', $excepcion);
        }
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->get('cancel')->isClicked()) {
            return $this->redirectToRoute('excepcion_index');
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $excepcion->setFechaInicio(date_create($excepcion->getFechaInicio()));
            $excepcion->setFechaFin(date_create($excepcion->getFechaFin()));
            $excepcion->setFechaCreacion(new \DateTime('now'));
            $excepcion->setEjecutada(FALSE);
            $excepcion->setEnviada(FALSE);
            $excepcion->setConformada(FALSE);
            $excepcion->setRemunerada(FALSE);
            if($session->get('nivel') == 1){
                $excepcion->setIdempleado($request->getSession()->get('id'));
                $excepcion->setEstado("CREADA");
            }

            if (($session->get('nivel') == 2) or ($session->get('nivel') == 3)){
                $excepcion->setIdempleado($excepcion->getIdempleado()->getId());
                if($excepcion->getIdempleado() == $session->get('id')){
                    $excepcion->setEstado("CREADA");
                } else {
                    $excepcion->setEstado("AUTORIZADA");
//                    $excepcion->setConformada(TRUE);
                }
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($excepcion);
            $em->flush();

            return $this->redirectToRoute('excepcion_index');
        }

        return $this->render('excepcion/new.html.twig', array(
            'excepcion' => $excepcion,
            'form' => $form->createView()
        ));
    }

    /**
     * Finds and displays a Excepcion entity.
     *
     * @Route("/{id}", name="excepcion_show")
     * @Method("GET")
     */
    public function showAction(Request $request, Excepcion $excepcion)
    {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('S3SandBoxBundle:Empleado')
                ->findOneBy(array('id'=>$excepcion->getIdempleado()));
        $persona = $em->getRepository('S3SandBoxBundle:Persona')
                ->findOneBy(array('id'=>$excepcion->getIdempleado()));
        
        $je = $em->getRepository('S3SandBoxBundle:Persona')
                ->findOneBy(array('id'=>$empleado->getIdsupervisor()));
        $jeE = $em->getRepository('S3SandBoxBundle:Empleado')
                ->findOneBy(array('id'=>$je->getId()));

        $su = $em->getRepository('S3SandBoxBundle:Persona')
                ->findOneBy(array('id'=>$jeE->getIdsupervisor()));
        $suE = $em->getRepository('S3SandBoxBundle:Empleado')
                ->findOneBy(array('id'=>$su->getId()));        

        $deleteForm = $this->createDeleteForm($excepcion);

        return $this->render('excepcion/show.html.twig', array(
            'excepcion' => $excepcion,
            'empleado' => $empleado,
            'persona' => $persona,
            'jefe' => $je,
            'jefeEmpleado' => $jeE,
            'supervisor' => $su,
            'supervisorEmpleado' => $suE,
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
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $deleteForm = $this->createDeleteForm($excepcion);

        $excepcion->setFechaInicio($excepcion->getFechaInicio()->format('d-m-Y H:i'));
        $excepcion->setFechaFin($excepcion->getFechaFin()->format('d-m-Y H:i'));

        if ($session->get('nivel') == 1) {
            $editForm = $this->createForm('deduar\S3SandBoxBundle\Form\ExcepcionEmpleadoType', $excepcion);
        } 

        if (($session->get('nivel') == 2) or ($session->get('nivel') == 3)) {
            if ($excepcion->getIdempleado() == $session->get('id')) {
                $editForm = $this->createForm('deduar\S3SandBoxBundle\Form\ExcepcionEmpleadoType', $excepcion);
            } else {
                $editForm = $this->createForm('deduar\S3SandBoxBundle\Form\ExcepcionSupervisorType', $excepcion);
            }
        }

        if ($session->get('nivel') >= 4) {
            $editForm = $this->createForm('deduar\S3SandBoxBundle\Form\ExcepcionGerenteType', $excepcion);
        } 

        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $excepcion->setFechaInicio(date_create($excepcion->getFechaInicio()));
            $excepcion->setFechaFin(date_create($excepcion->getFechaFin()));
            if($session->get('nivel') == 1){
                $excepcion->setIdempleado($request->getSession()->get('id'));
            }
            if(($session->get('nivel') == 2) or ($session->get('nivel') == 3)){
                if (is_object($excepcion->getIdempleado())){
                    $excepcion->setEstado("AUTORIZADA");
                    $excepcion->setIdempleado($excepcion->getIdempleado()->getId());
                }
            }
            if($session->get('nivel') >= 4) {
                 $excepcion->setIdempleado($excepcion->getIdempleado()->getId());
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($excepcion);
            $em->flush();

            return $this->redirectToRoute('excepcion_index');
        }

        return $this->render('excepcion/edit.html.twig', array(
            'excepcion' => $excepcion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView()
        ));
    }

    /**
     * Cahange status a form an existing Excepcion entity.
     *
     * @Route("/{id}/reject", name="excepcion_reject")
     * @Method({"GET", "POST"})
     */
    public function rejectAction(Request $request, Excepcion $excepcion)
    {
        $em = $this->getDoctrine()->getManager();
        $ex = $em->getRepository('S3SandBoxBundle:Excepcion')
                ->findOneBy(array('id'=>$excepcion->getId()));
        $ex->setEstado("RECHAZADA");
        $ex->setEjecutada("FALSE");
        $ex->setEnviada("FALSE");
        $ex->setConformada("FALSE");
        $ex->setRemunerada("FALSE");
        $em->persist($ex);
        $em->flush();
        return $this->redirectToRoute('excepcion_index');
    }

    /**
     * Deletes a Excepcion entity.
     *
     * @Route("/{id}/delete", name="excepcion_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, Excepcion $excepcion)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($excepcion);
        $em->flush();

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
