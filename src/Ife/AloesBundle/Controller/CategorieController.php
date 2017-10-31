<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IFE\AloesBundle\Entity\Categorie;

class CategorieController extends Controller
{
	public function categoriesAction()
	{ 		
		
 	    $request = $this->getRequest();
   	    $session = $request->getSession();       		
		
		$em = $this->getDoctrine()->getManager();
		$typos= $em->getRepository('IfeAloesBundle:Categorie')->findAll();
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
