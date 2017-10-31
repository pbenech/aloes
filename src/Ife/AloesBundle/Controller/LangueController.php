<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ife\AloesBundle\Entity\Langue;


use Ife\AloesBundle\Form\LangueType;
 
/**
 * Level controller.
 *
 */
class LangueController extends Controller
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
             

        $entities = $em->getRepository('IfeAloesBundle:Langue')->findLangue($page,$sort,$direction);     
        
		$paginator 		= $this->get('knp_paginator'); 	
		$pagination  	= $paginator->paginate($entities, $page,25);         
        
        return $this->render('IfeAloesBundle:Langue:index.html.twig', array(
            'pagination' 	=> $pagination,      
        	'page'			=> $page,
        	'sort'			=> $sort,
        	'direction'		=> $direction,
        	'menu'			=> 'adm-lang'
        ));
        
    }
    
    
    public function newAction($page,$sort,$direction)
    {
	    $request = $this->getRequest();
    	$session = $request->getSession();	    	
    	    	
        $entity = new Langue();
        $form   = $this->createForm(new LangueType(), $entity);

        return $this->render('IfeAloesBundle:Langue:new.html.twig', array(
            'entity' 		=> $entity,
            'form'  		=> $form->createView(), 
        	'page'			=> $page,
        	'sort'			=> $sort,
        	'direction'		=> $direction,                
        	'menu'			=> "adm-lang"
        ));
    }    
        
    
    /**
	 */	     
    public function createAction(Request $request,$page,$sort,$direction)
    {
	    $request = $this->getRequest();
    	$session = $request->getSession();	    	

    	$entity  = new Langue();
        $form = $this->createForm(new LangueType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

	  		return $this->redirect($this->generateUrl('langues', array('page' => $page,'sort' => $sort, 'direction' => $direction)));
        }
        return $this->render('IfeAloesBundle:Langue:new.html.twig', array(
            'entity' 		=> $entity,
            'form'  		=> $form->createView(), 
        	'page'			=> $page,
        	'sort'			=> $sort,
        	'direction'		=> $direction,                
        	'menu'			=> "adm-lang"
        ));
    } 
    public function showAction($id,$page,$sort,$direction)
    {
	    $request = $this->getRequest();
    	$session = $request->getSession();
    	
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Langue')->find($id);       
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Langue entity.');
        }
	
        $deleteForm = $this->createDeleteForm($id,$page,$sort,$direction);
  
        return $this->render('IfeAloesBundle:Langue:show.html.twig', array(
            'entity'      	=> $entity,
            'delete_form' 	=> $deleteForm->createView(),
        	'page'			=> $page,
        	'sort'			=> $sort,
        	'direction'		=> $direction,    
        	'menu'			=> 'adm-lang'
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
        $entity = $em->getRepository('IfeAloesBundle:Langue')->find($id);
        if (!$entity)
            throw $this->createNotFoundException('Unable to find Langue entity.');
            

        $editForm = $this->createForm(new LangueType(), $entity);
        
        return $this->render('IfeAloesBundle:Langue:edit.html.twig', array(
            'entity'      	=> $entity,
            'edit_form'   	=> $editForm->createView(),
        	'page'			=> $page,
        	'sort'			=> $sort,
        	'direction'		=> $direction,   
	        'menu'			=> "adm-lang"         
        ));
    }     
    
     public function updateAction(Request $request, $id,$page,$sort,$direction)
    {
	    $request = $this->getRequest();
    	$session = $request->getSession();	    	
    	
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('IfeAloesBundle:Langue')->find($id);
        if (!$entity)
            throw $this->createNotFoundException('Unable to find Langue entity.');          
            
        $editForm = $this->createForm(new LangueType(), $entity);
        $editForm->bind($request);      
        
        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

	  		return $this->redirect($this->generateUrl('langues', array('page' => $page,'sort' => $sort, 'direction' => $direction)));
        }
 
        
        return $this->render('IfeAloesBundle:Langue:edit.html.twig', array(
            'entity'      	=> $entity,
            'edit_form'   	=> $editForm->createView(),
        	'page'			=> $page,
        	'sort'			=> $sort,
        	'direction'		=> $direction,   
	        'menu'			=> "adm-lang"         
        ));
        
    }        
       
    

    public function deleteAction(Request $request, $id,$page,$sort,$direction)
    {
    	
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Langue')->find($id);
        
        if (!$entity) {
                throw $this->createNotFoundException('Unable to find Langue entity.');
            }
		
            
        $em->remove($entity);
        $em->flush(); 

 
	  return $this->redirect($this->generateUrl('levels', array('page' => $page,'sort' => $sort, 'direction' => $direction)));
    }        
}
