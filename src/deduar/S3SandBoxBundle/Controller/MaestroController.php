<?php

namespace deduar\S3SandBoxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Maestro controller.
 *
 * @Route("/maestro")
 */
class MaestroController extends Controller
{

    /**
     * Lists all Maestro.
     *
     * @Route("/", name="maestro_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
    	$session = $request->getSession();
    	if ($session->get('nivel') > 2) {
	        $em = $this->getDoctrine()->getManager();
	        $personas = $em->getRepository('S3SandBoxBundle:Persona')->findAll();
	        return $this->render('maestro/index.html.twig',array(
	        		'personas' => $personas
	        	));
	    } else {
	    	die ("no autorizado");
	    }
    }
}