<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ife\AloesBundle\Entity\Program;
use Ife\AloesBundle\Entity\Parcours; 
use Ife\AloesBundle\Entity\Course;
use Ife\AloesBundle\Form\ProgramType;

/**
 * Program controller.
 *
 */
class ProgramController extends Controller
{

	
    /**
     * Lists all Program entities.
     *
     */
    public function indexAction($page,$sort,$direction)
    {
    	
        $user = $this->get('security.context')->getToken()->getUser();      		
       	if 	(
       			($this->get('security.context')->isGranted('ROLE_ADMIN') 		=== false)  &&
       			($this->get('security.context')->isGranted('ROLE_ENSEIGNANT')   === false)  &&       			
       			($this->get('security.context')->isGranted('ROLE_RESPONSABLE')   === false)     	
    		)
    		
    		
    	return $this->render('IfeAloesBundle:Public:profil.html.twig', array(
        	'menu'		   => 'profil'
        	));	
    		
    		
        $em = $this->getDoctrine()->getManager();
        
        $user = $this->get('security.context')->getToken()->getUser();  

       
  		if ($this->get('security.context')->isGranted('ROLE_ADMIN') === true)       
        	$entities = $em->getRepository('IfeAloesBundle:Program')->findByAdmin($page,$sort,$direction);  
        else        
        	$entities = $em->getRepository('IfeAloesBundle:Program')->findByUsr($user,$page,$sort,$direction);  	         
        	
		$paginator 		= $this->get('knp_paginator'); 	
		$pagination  	= $paginator->paginate($entities, $page,"25");            	
	
        return $this->render('IfeAloesBundle:Program:index.html.twig', array(
            'pagination'   => $pagination,
        	'menu'		   => 'programs',
        	'page'		   => $page,
        	'sort'		   => $sort,
        	'direction'	   => $direction 
        	
        ));
    } 
    
    /**
     * Creates a new Program entity.
     *
     */
    public function createAction(Request $request)
    {
    	
        $entity = new Program();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $user = $this->get('security.context')->getToken()->getUser();
                        
            $entity->addResp($user);
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('programs'));
        }

        return $this->render('IfeAloesBundle:Program:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        	'menu'		   => 'programs'
        ));
    }

    /**
     * Creates a form to create a Program entity.
     *
     * @param Program $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Program $entity)
    {
        $form = $this->createForm(new ProgramType(), $entity, array(
            'action' => $this->generateUrl('programs_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer','attr' => array('class' => "btn btn-success")));

        return $form;
    }

    /**
     * Displays a form to create a new Program entity.
     *
     */
    public function newAction()
    {
        $entity = new Program();
        $form   = $this->createCreateForm($entity);

        return $this->render('IfeAloesBundle:Program:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        	'menu'		   => 'programs'
        ));
    }

    /**
     * Finds and displays a Program entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Program')->find($id);
        
        
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Program entity.');
        }

        return $this->render('IfeAloesBundle:Program:show.html.twig', array(
            'program'      => $entity,
        	'menu'		   => 'programs_show'
        ));
    }

    /**
     * Displays a form to edit an existing Program entity.
     *
     */
    public function editAction($id,$from)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Program')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Program entity.');
        }

        $editForm = $this->createEditForm($entity,$from);

        return $this->render('IfeAloesBundle:Program:edit.html.twig', array(
            'program'       => $entity,
            'edit_form'     => $editForm->createView(),
        	'menu'		    => 'programs_show',
        	'from'			=> $from
        
        ));
    }

    /**
    * Creates a form to edit a Program entity.
    *
    * @param Program $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Program $entity,$from)
    {
        $form = $this->createForm(new ProgramType(), $entity, array(
            'action' => $this->generateUrl('programs_update', array('id' => $entity->getId(),'from' => $from)),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Enregistrer', 
            'attr' => array('class' => "btn btn-success")));

        return $form;
    }
    /**
     * Edits an existing Program entity.
     *
     */
    public function updateAction(Request $request, $id,$from)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Program')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Program entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity,$from);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('programs_show', array('id' => $id)));
        }

        return $this->render('IfeAloesBundle:Program:edit.html.twig', array(
            'entity'        => $entity,
            'program'       => $entity,
            'edit_form'     => $editForm->createView(),
            'delete_form'   => $deleteForm->createView(),
        	'menu'		    => 'programs_show',
        	'from'			=> $from
        ));
    }
    
    
    
    /**
     * Delete Program entity.
     * 
     */ 
    public function delAction(Request $request, Program $source)
    {
    	$em = $this->getDoctrine()->getManager();
    	
    	$entity = $em->getRepository('IfeAloesBundle:Program')->find($source->getId());    	
    	
        $deleteForm = $this->createDeleteForm($source->getId());    	
    	
        return $this->render('IfeAloesBundle:Program:delAjaxProgram.html.twig', array(
            'entity' 		=> $entity, 
            'delete_form' => $deleteForm->createView(),            
        ));
    	  
    }      

    
    /**
     * Creates a form to delete a Pogram entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(NULL, array ( 'attr' => array ( 'id' => 'formOGD' ) ) )
            ->setAction($this->generateUrl('programs_delete2', array('id' => $id)))
            ->add('delete', 'submit', array('label' => 'Oui','attr' => array ( 'class' => 'btn btn-color4' )))
            ->add('nodelete', 'submit', array('label' => 'Non','attr' => array ( 'class' => 'btn btn-inverse' )))
            ->getForm() 
        ;
    }    
          
     
    
    /**
     * Deletes a Program entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('IfeAloesBundle:Program')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Program entity.');
            }
        
            
			$entities = $em->getRepository('IfeAloesBundle:SpecificCompetence')->findByProgram($id);            
	            foreach ($entities as $ent)
	            {
	            $em->remove($ent);
	            }
    		$entities = $em->getRepository('IfeAloesBundle:GeneralCompetence')->findByProgram($id);            
	            foreach ($entities as $ent)
	            {
	            $em->remove($ent);
	            }

        	$entities = $entity->getCourses($id);            
	            foreach ($entities as $course)
	            {
	            	
		            foreach($course->getObjectives() as $obj)
				        	{
				        	foreach($obj->getSpecificObjectives() as $spe)
				        		{        		
				        		$em->remove($spe);
				        		}
				        	$em->remove($obj);
				        	}	            	
	            	
	            	
	            $em->remove($course);
	            }	            

                        
            $em->remove($entity);
            $em->flush();
        // }

        return $this->redirect($this->generateUrl('programs'));
    }


}
