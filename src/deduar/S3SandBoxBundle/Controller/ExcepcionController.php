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
        switch ($request->get('crit')) {
            case '1d':
                $criteria = 'fechaInicio';
                $dir = 'ASC';
                break;
            case '1u':
                $criteria = 'fechaInicio';
                $dir = 'DESC';
                break;
            case '2d':
                $criteria = 'fechaFin';
                $dir = 'DESC';
                break;
            case '2u':
                $criteria = 'fechaFin';
                $dir = 'ASC';
                break;
            case '4d':
                $criteria = 'idtypoexcepcion';
                $dir = 'DESC';
                break;
            case '4u':
                $criteria = 'idtypoexcepcion';
                $dir = 'ASC';
                break;
            case '5d':
                $criteria = 'idtypoestadoexcepcion';
                $dir = 'DESC';
                break;
            case '5u':
                $criteria = 'idtypoestadoexcepcion';
                $dir = 'ASC';
                break;
            case '6d':
                $criteria = 'ejecutada';
                $dir = 'DESC';
                break;
            case '6u':
                $criteria = 'ejecutada';
                $dir = 'ASC';
                break;
            case '7d':
                $criteria = 'enviada';
                $dir = 'DESC';
                break;
            case '7u':
                $criteria = 'enviada';
                $dir = 'ASC';
                break;
            case '8d':
                $criteria = 'conformada';
                $dir = 'DESC';
                break;
            case '8u':
                $criteria = 'conformada';
                $dir = 'ASC';
                break;
            case '9d':
                $criteria = 'remunerada';
                $dir = 'DESC';
                break;
            case '9u':
                $criteria = 'remunerada';
                $dir = 'ASC';
                break;
            
            default:
                $criteria = 'id';
                $dir = 'DESC';
                break;
        }


        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $excepcions = $em->getRepository('S3SandBoxBundle:Excepcion')
            ->findBy(array('idempleado'=>$session->get('id')));
        $empleado = $em->getRepository('S3SandBoxBundle:Empleado')
                ->findOneBy(array('id'=>$session->get('id')));

        $persona = $em->getRepository('S3SandBoxBundle:Persona')
                ->findOneBy(array('id'=>$empleado->getIdpersona()));

        $supervisors = $em->getRepository('S3SandBoxBundle:Empleado')
                ->findBy(array('idsupervisor'=>$session->get('id')));

        if (!(sizeof($supervisors))) {
            $idSupervisor[] = null;
        } else {
            for ($i=0; $i < sizeof($supervisors); $i++) { 
                $idSupervisor[] = $supervisors[$i]->getId();
            } 
        }

        //$excepcions_supervisors = $em->getRepository('S3SandBoxBundle:Excepcion')
        //            ->findBy(array('idempleado'=>$idSupervisor));


        for($i=0; $i<sizeof($idSupervisor);$i++) {
            $e_s[] = ($em->getRepository('S3SandBoxBundle:Excepcion')
               ->findAllOrderedByName($idSupervisor[$i],$criteria,$dir));
            $excepcions_supervisors[] = $e_s[$i];
        }
        
        for ($i=0; $i < sizeof($excepcions); $i++) {
            $duracions[] =  
                $excepcions[$i]->getFechaFin()->diff($excepcions[$i]->getFechaInicio())
                ->format('%y Años %m Meses %d Dias %h Horas %i Minutos');
        }

        for ($i=0; $i < sizeof($excepcions_supervisors); $i++){
            for ($j=0; $j<sizeof($excepcions_supervisors[$i]);$j++) {
            $duracions_supervisors[] = 
                $excepcions_supervisors[$i][$j]->getFechaFin()->diff($excepcions_supervisors[$i][$j]->getFechaInicio())->format('%y Años %m Meses %d Dias %h Horas %i Minutos');
            }
        }


//        $excepcions_supervisor = $em->getRepository('S3SandBoxBundle:Excepcion')
//            ->findBySolicitante($supervisor->getId());

        return $this->render('excepcion/index.html.twig', array(
            'persona' => $persona,
            'empleado' => $empleado,
            'excepcions' => $excepcions,
            'duracions' => $duracions,
            'supervisors' => $supervisors,
            'excepcions_supervisors' => $excepcions_supervisors,
            'duracions_supervisors' => $duracions_supervisors
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

                return $this->redirectToRoute('excepcion_show', 
                            array('id' => $excepcion->getId()));
            }
        }

        return $this->render('excepcion/new.html.twig', array(
            'persona' => $persona,
            'empleado' => $empleado,
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
            'persona' => $persona,
            'empleado' => $empleado,
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

            return $this->redirectToRoute('excepcion_edit', array('id' => $excepcion->getId()));
        }

        return $this->render('excepcion/edit.html.twig', array(
            'persona' => $persona,
            'empleado' => $empleado,
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
