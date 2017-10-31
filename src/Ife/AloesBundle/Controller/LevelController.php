<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ife\AloesBundle\Entity\Level;


use Ife\AloesBundle\Form\LevelType;
 
/**
 * Level controller.
 *
 */
class LevelController extends Controller
{
	
    /**
     * 
     * Enter description here ...
     * @param unknown_type $page
     * @param unknown_type $sort
     * @param unknown_type $direction
	 */	  	
    public function indexAction($page,$sort,$direction)
    {
	    $request = $this->getRequest();
    	$session = $request->getSession();	    	
    	
        $em = $this->getDoctrine()->getManager();
             

        $entities = $em->getRepository('IfeAloesBundle:Level')->findLevel($page,$sort,$direction);     
        
		$paginator 		= $this->get('knp_paginator'); 	
		$pagination  	= $paginator->paginate($entities, $page,25);         
        
        return $this->render('IfeAloesBundle:Level:index.html.twig', array(
            'pagination' 	=> $pagination,      
        	'page'			=> $page,
        	'sort'			=> $sort,
        	'direction'		=> $direction,
        	'menu'			=> 'adm-level'
        ));
        
    }
    
    
    public function newAction($page,$sort,$direction)
    {
	    $request = $this->getRequest();
    	$session = $request->getSession();	    	
    	    	
        $entity = new Level();
        $form   = $this->createForm(new LevelType(), $entity);

        return $this->render('IfeAloesBundle:Level:new.html.twig', array(
            'entity' 		=> $entity,
            'form'  		=> $form->createView(), 
        	'page'			=> $page,
        	'sort'			=> $sort,
        	'direction'		=> $direction,                
        	'menu'			=> "adm-level"
        ));
    }    
        
    
    /**
	 */	     
    public function createAction(Request $request,$page,$sort,$direction)
    {
	    $request = $this->getRequest();
    	$session = $request->getSession();	    	

    	$entity  = new Level();
        $form = $this->createForm(new LevelType($rng), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

	  		return $this->redirect($this->generateUrl('levels', array('page' => $page,'sort' => $sort, 'direction' => $direction)));
        }
        return $this->render('IfeAloesBundle:Level:new.html.twig', array(
            'entity' 		=> $entity,
            'form'  		=> $form->createView(), 
        	'page'			=> $page,
        	'sort'			=> $sort,
        	'direction'		=> $direction,                
        	'menu'			=> "adm-level"
        ));
    } 
    public function showAction($id,$page,$sort,$direction)
    {
	    $request = $this->getRequest();
    	$session = $request->getSession();
    	
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Level')->find($id);       
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dilemme entity.');
        }
	
        $deleteForm = $this->createDeleteForm($id,$page,$sort,$direction);
  
        return $this->render('IfeAloesBundle:Level:show.html.twig', array(
            'entity'      	=> $entity,
            'delete_form' 	=> $deleteForm->createView(),
        	'page'			=> $page,
        	'sort'			=> $sort,
        	'direction'		=> $direction,    
        	'menu'			=> 'adm-level'
        ));
    }

    private function createDeleteForm($id,$page,$sort,$direction)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('levels_delete', array('id' => $id, 'page' => $page,'sort' => $sort, 'direction' => $direction)))
            ->setMethod('DELETE')
      		->add('submit', 'submit', array('label' => 'Supprimer',
            								'attr'	=> array('class' => "btn  btn-button-delete " )))
            
            ->getForm()
        ;
    }    
        
    public function editAction($id,$page,$sort,$direction)
    {
	    $request = $this->getRequest();
    	$session = $request->getSession();	    	
    	
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('IfeAloesBundle:Level')->find($id);
        if (!$entity)
            throw $this->createNotFoundException('Unable to find Level entity.');
            

        $editForm = $this->createForm(new LevelType(), $entity);
        
        return $this->render('IfeAloesBundle:Level:edit.html.twig', array(
            'entity'      	=> $entity,
            'edit_form'   	=> $editForm->createView(),
        	'page'			=> $page,
        	'sort'			=> $sort,
        	'direction'		=> $direction,   
	        'menu'			=> "adm-level"         
        ));
    }     
    
     public function updateAction(Request $request, $id,$page,$sort,$direction)
    {
	    $request = $this->getRequest();
    	$session = $request->getSession();	    	
    	
    	
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('IfeAloesBundle:Level')->find($id);
        if (!$entity)
            throw $this->createNotFoundException('Unable to find Level entity.');          
            
        $editForm = $this->createForm(new LevelType($rng), $entity);
        $editForm->bind($request);      
        
        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

	  		return $this->redirect($this->generateUrl('levels', array('page' => $page,'sort' => $sort, 'direction' => $direction)));
        } 
        
        return $this->render('IfeAloesBundle:Level:edit.html.twig', array(
            'entity'      	=> $entity,
            'edit_form'   	=> $editForm->createView(),
        	'page'			=> $page,
        	'sort'			=> $sort,
        	'direction'		=> $direction,   
	        'menu'			=> "adm-level"         
        ));
        
    }        


    public function deleteAction(Request $request, $id,$page,$sort,$direction)
    {
    	
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Level')->find($id);
        
        if (!$entity) {
                throw $this->createNotFoundException('Unable to find Level entity.');
            }
		
            
        $em->remove($entity);
        $em->flush(); 
 
 
	  return $this->redirect($this->generateUrl('levels', array('page' => $page,'sort' => $sort, 'direction' => $direction)));
    }        
}
