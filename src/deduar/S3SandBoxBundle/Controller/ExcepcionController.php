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
        //print_r($empleado->getIdgrupo()->getDescripcion()); echo"<br>";
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
            if (sizeof($em_j)) {
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
        $empleado = $em->getRepository('S3SandBoxBundle:Empleado')
                ->findOneBy(array('id'=>$session->get('id')));
        $persona = $em->getRepository('S3SandBoxBundle:Persona')
                ->findOneBy(array('id'=>$empleado->getIdpersona()));
        $excepcion = new Excepcion();
        $excepcion->setIdempleado($request->getSession()->get('id'));
        $form = $this->createForm('deduar\S3SandBoxBundle\Form\ExcepcionType', $excepcion);
        $form->handleRequest($request);

        if ($form->get('cancel')->isClicked()) {
            return $this->redirectToRoute('excepcion_index');
        } else {
            if ($form->isSubmitted() && $form->isValid()) {
                //$session = $request->getSession();
                //$excepcion->setSolicitante($session->get('id'));
                $excepcion->setEstado("");
                $excepcion->setIdempleado($request->get('excepcion')['idempleado']);
                $excepcion->setFechaCreacion(new \DateTime('now'));
                $em = $this->getDoctrine()->getManager();
                $em->persist($excepcion);
                $em->flush();

                return $this->redirectToRoute('excepcion_index');
            }
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
                ->findOneBy(array('id'=>$session->get('id')));
        $persona = $em->getRepository('S3SandBoxBundle:Persona')
                ->findOneBy(array('id'=>$empleado->getIdpersona()));
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
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('S3SandBoxBundle:Empleado')
                ->findOneBy(array('id'=>$session->get('id')));
        $persona = $em->getRepository('S3SandBoxBundle:Persona')
                ->findOneBy(array('id'=>$empleado->getIdpersona()));

        $deleteForm = $this->createDeleteForm($excepcion);
        $editForm = $this->createForm('deduar\S3SandBoxBundle\Form\ExcepcionType', $excepcion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $excepcion->setIdempleado($excepcion->getIdempleado()->getId());
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
