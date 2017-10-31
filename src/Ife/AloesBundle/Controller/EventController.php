<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ife\AloesBundle\Entity\Course;
use Ife\AloesBundle\Entity\Event;
use Ife\AloesBundle\Entity\EventAssessment;
use Ife\AloesBundle\Form\EventType;

/**
 * Event controller.
 *
 */
class EventController extends Controller
{

    /**
     * Lists all Event entities.
     *
     */
    public function indexAction(Course $course,$page,$sort,$direction)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $course->getEvents();

        
        $entities = $em->getRepository('IfeAloesBundle:Event')->findByCourse($course,$page,$sort,$direction);     
               
        $paginator 		= $this->get('knp_paginator'); 	
		$pagination  	= $paginator->paginate($entities, $page,"25");            
        
        return $this->render('IfeAloesBundle:Event:index.html.twig', array(
            'pagination' => $pagination,
            'course' => $course,
        	'menu'	=> 'course_event',
        	'page'		   => $page,
        	'sort'		   => $sort,
        	'direction'	   => $direction 
        ));
    }
    /**
     * Creates a new Event entity.
     *
     */
    public function createAction(Request $request, Course $course)
    {
    	
        $em = $this->getDoctrine()->getManager();

        $list1 = $em->getRepository('IfeAloesBundle:Assessment')->findAssessmentsCourse($course->getId(),0);        
        $list2 = array();    	
    	    	
  		$request = $this->getRequest();  	
    	
        $data = $request->request->get("aloes_event");

        if (isset($data['assessments_selected']))
	        $assessments = $data['assessments_selected'];   	
		else 
			$assessments = array();
	        
        $entity = new Event();
        $entity->setCourse($course);

        $form = $this->createCreateForm($entity,$list1,$list2);
        $form->handleRequest($request);

        //if ($form->isValid()) {
        
            $em = $this->getDoctrine()->getManager();
            
        	
        	foreach ($assessments as $ass)
        		{
        		$ea = new EventAssessment();
        		$assessment = $em->getRepository('IfeAloesBundle:Assessment')->find($ass);
        		$ea->setAssessment($assessment);
        		$ea->setEvent($entity);
        		
        		$entity->addAssessment($ea);
        		}	             
            
            
            
            $em->persist($entity);
            $em->flush();
            return $this->redirectToRoute('course_event', array(
                'id' => $course->getId(),
	        	'menu'	=> 'course_event'
            ));
            
        //}

        return $this->render('IfeAloesBundle:Event:new.html.twig', array(
            'entity' => $entity,
            'course' => $course,
            'form'   => $form->createView()
        ));

    }

    /**
     * Creates a form to create a Event entity.
     *
     * @param Event $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Event $entity,$list1,$list2)
    {

        $form = $this->createForm(new EventType($list1,$list2), $entity, array(
            'action' => $this->generateUrl('course_event_create', array(
                'id' => $entity->getCourse()->getId()
            )),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Enregistrer',
            'attr' => array('class'=>'btn btn-success')
        ));

        return $form;
    }

    /**
     * Displays a form to create a new Event entity.
     *
     */
    public function newAction(Course $course)
    {
    	
    	
        $em = $this->getDoctrine()->getManager();

        $list1 = $em->getRepository('IfeAloesBundle:Assessment')->findAssessmentsCourse($course->getId(),0);        
        $list2 = array();    	
    	
        $entity = new Event();
        $entity->setCourse($course);
        $form   = $this->createCreateForm($entity,$list1,$list2);

        return $this->render('IfeAloesBundle:Event:new.html.twig', array(
            'entity' => $entity,
            'course' => $course,
            'form'   => $form->createView(),
        	'menu'	=> 'course_event'
        ));
    }

    /**
     * Finds and displays a Event entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Event')->find($id);

        $course= $em->getRepository('IfeAloesBundle:Course')->findOneById($entity->getCourse()->getId());

        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Event entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        

        return $this->render('IfeAloesBundle:Event:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        	'course'	  => $course
        ));
    }

    /**
     * Displays a form to edit an existing Event entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Event')->find($id);

        $list1 = $em->getRepository('IfeAloesBundle:Assessment')->findAssessmentsCourse($entity->getCourse()->getId(),$id);        
        $list2 = $em->getRepository('IfeAloesBundle:Assessment')->findAssessmentsEventCourse($entity->getCourse()->getId(),$id);
         
        if (!$entity) { 
            throw $this->createNotFoundException('Unable to find Event entity.');
        }

        $editForm = $this->createEditForm($entity,$list1,$list2);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IfeAloesBundle:Event:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'course' => $entity->getCourse(),
	        'menu'	=> 'course_event'
        ));
    }

    /**
    * Creates a form to edit a Event entity.
    *
    * @param Event $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Event $entity,$list1,$list2)
    {
        $form = $this->createForm(new EventType($list1,$list2), $entity, array(
            'action' => $this->generateUrl('event_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Enregistrer',
            'attr' => array('class' => 'btn btn-success')
        ));

        return $form;
    }
    /**
     * Edits an existing Event entity.
     *
     */
    public function updateAction(Request $request, Event $entity)
    {
 		$request = $this->getRequest();  	
    	
        $data = $request->request->get("aloes_event");


        if (isset($data['assessments_selected']))
	        $assessments = $data['assessments_selected'];   	
		else 
			$assessments = array(); 
 		       
        $id 	= $entity->getId();
        $course = $entity->getCourse()->getId();        
        
        $em = $this->getDoctrine()->getManager();
                

        $list1 = $em->getRepository('IfeAloesBundle:Assessment')->findAssessmentsCourse($course,$id);        
        $list2 = $em->getRepository('IfeAloesBundle:Assessment')->findAssessmentsEventCourse($course,$id);        
        

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity,$list1,$list2);
        $editForm->handleRequest($request);
        
       // if ($editForm->isValid()) {
       
        	foreach ($entity->getAssessments() as $ass) {
        		 
        		 $em->remove($ass);
        		 $entity->removeAssessment($ass);
        		 $em->flush();   
        	}
        	
        	foreach ($assessments as $ass)
        		{
        		$ea = new EventAssessment();
        		$assessment = $em->getRepository('IfeAloesBundle:Assessment')->find($ass);
        		$ea->setAssessment($assessment);
        		$ea->setEvent($entity);
        		
        		$entity->addAssessment($ea);
        		}	   
        	
            $em->flush();          
              
            return $this->redirect($this->generateUrl('course_event', array('id' => $course)));
        //}

        return $this->render('IfeAloesBundle:Event:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'course' => $entity->getCourse(),
        	'menu'	=> 'course_event'
        ));
    }
    /**
     * Deletes a Event entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('IfeAloesBundle:Event')->find($id);    	
    	
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Course entity.');
        }
        
        $em->remove($entity);
        $em->flush();
        
        return $this->redirect($this->generateUrl('course_event', array(
            'id'=>$entity->getCourse()->getId()
        )));
    }
    
  
    

    /**
     * Creates a form to delete a Event entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('event_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array(
                'label' => 'Supprimer',
                'attr' => array('class' => 'btn btn-danger')
            ))
            ->getForm()
        ;
    }
}
