<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ife\AloesBundle\Entity\Parcours;
use Ife\AloesBundle\Form\ParcoursType;
use Ife\AloesBundle\Entity\Program; 

/**
 * Course controller.
 *
 */
class ParcoursController extends Controller
{
	
    /**
     * Lists all Course entities.
     *
     */
    public function indexAction(Program $program)
    {
        $em = $this->getDoctrine()->getManager();
        
        $user = $this->get('security.context')->getToken()->getUser();          
        
  		$entities = $em->getRepository('IfeAloesBundle:Parcours')->findBy(array('program'=>$program->getId()));        
  			
		$paginator 		= $this->get('knp_paginator'); 	
		$pagination  	= $paginator->paginate($entities, 1,"25"); 
  			
  			
        return $this->render('IfeAloesBundle:Parcours:index.html.twig', array(
            'program' => $program,
        	'menu'	  => "parcours_list",
        	'pagination'=> $pagination
      //  	'page'		   => $page,
      //  	'sort'		   => $sort,
      //  	'direction'	   => $direction 
        ));
    }
 
    /**
     * Displays a form to create a new Program entity.
     *
     */
    public function newAction(Program $program)
    {
        $entity = new Parcours();
        $entity->setProgram($program);
        $form   = $this->createCreateForm($entity,$program);

        return $this->render('IfeAloesBundle:Parcours:new.html.twig', array(
            'entity'  => $entity,
            'program' => $program,
        	'form'    => $form->createView(),
        	'menu'    => 'parcours_list'
        ));
    }    


    /**
     * Creates a form to create a Parcours entity.
     *
     * @param Program $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Parcours $entity, Program $program)
    {
        $form = $this->createForm(new ParcoursType($program->getId()), $entity, array(
	//	    'attr' => array('class' => "form-inline"),
        	'action' => $this->generateUrl('parcours_create', array('id' => $program->getId())),
            'method' => 'POST', 
        
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer','attr' => array('class' => "btn btn-success")));

        return $form;
    }   

    /**
    * Creates a form to edit a cours entity.
    *
    * @param Parcours $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Parcours $entity)
    {
		$form = $this->createForm(new ParcoursType($entity->getProgram()->getId()), $entity, array(
	//	    'attr' => array('class' => "form-inline"),
            'action' => $this->generateUrl('parcours_update', array('id' => $entity->getId() )),
            'method' => 'PUT', 
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer','attr' => array('class' => "btn btn-success")));

        return $form;
    }    
    
    
    /**
     * Creates a new Parcours entity.
     *
     */
    public function createAction(Request $request, Program $program)
    {
        $entity = new Parcours();
        $form = $this->createCreateForm($entity, $program);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->setProgram($program);
            $em = $this->getDoctrine()->getManager();
                    
             
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('parcours_list', array('id' => $program->getId())));
        } 


        return $this->render('IfeAloesBundle:Parcours:new.html.twig', array(
            'entity'  => $entity,
            'program' => $program,
        	'form'    => $form->createView(),
        	'menu'    => 'parcours_list'
        ));        
        
    }
    
    

    /**
     * Displays a form to edit an existing Parcours entity.
     *
     */
    public function editAction(Parcours $entity)
    {


        $editForm = $this->createEditForm($entity);

        return $this->render('IfeAloesBundle:Parcours:edit.html.twig', array(
            'entity'      => $entity,
        	'edit_form'   => $editForm->createView(),
          	'program' 	  => $entity->getProgram(),
        	'menu'	      => "parcours_list"
        
        ));
    }	

    /**
     * Edits an existing Parcours entity.
     *
     */
    public function updateAction(Request $request,Parcours $entity)
    {
        $em = $this->getDoctrine()->getManager();
    	
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            $em->flush();

            return $this->redirect($this->generateUrl('parcours_list', array('id' => $entity->getProgram()->getId())));
        }

        return $this->render('IfeAloesBundle:Parcours:edit.html.twig', array(
            'entity'      => $entity,
        	'edit_form'   => $editForm->createView(),
          	'program' 	  => $entity->getProgram(),
        	'menu'	      => "parcours_list"
        
        ));
        
    }
    
      /**
     * Creates a form to delete a Parcours entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(NULL, array ( 'attr' => array ( 'id' => 'formOGD' ) ) )
            ->setAction($this->generateUrl('parcours_delete', array('id' => $id)))
            ->add('delete', 'submit', array('label' => 'Oui','attr' => array ( 'class' => 'btn btn-color4' )))
            ->add('nodelete', 'submit', array('label' => 'Non','attr' => array ( 'class' => 'btn btn-inverse' )))
            ->getForm() 
        ;
    }      
    
    /*
     * Delete parcours entity.
     *  
     */ 
    public function delAction(Request $request, Parcours $parcours)
    {

        $deleteForm = $this->createDeleteForm($parcours->getId());    	
    	
        return $this->render('IfeAloesBundle:Parcours:delAjaxParcours.html.twig', array(
            'entity' 		=> $parcours, 
            'delete_form' => $deleteForm->createView(),            
        ));
    	  
    }   

    
    /**
     * Deletes a Course entity.
     *
     */
    public function deleteAction(Request $request, Parcours $entity)
    {
        $em = $this->getDoctrine()->getManager();
        
        $em->remove($entity);
        $em->flush();

        return $this->redirectToRoute('parcours_list', array('id' => $entity->getProgram()->getId()));
    }   
    
}
