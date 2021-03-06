<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IFE\AloesBundle\Entity\Typologie;

class TypologieController extends Controller
{
	public function typologiesAction()
	{ 		
		
 	    $request = $this->getRequest();
   	    $session = $request->getSession();       		
		
		$em = $this->getDoctrine()->getManager();
		$typos= $em->getRepository('IfeAloesBundle:Typologie')->findAll();
		$tab = array();
		
		foreach ($typos as &$typo)
			{
			$tab[] = $typo->getTitle();
			} 
		$response = new Response(json_encode($tab));
		$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
		return $response;
	}
}
