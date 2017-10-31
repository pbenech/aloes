<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ife\AloesBundle\Entity\Topic;
use Ife\AloesBundle\Entity\Course;
use Ife\AloesBundle\Entity\Event;
use Ife\AloesBundle\Entity\Assessment;
use Ife\AloesBundle\Entity\EventAssessment;
use Ife\AloesBundle\Form\Event2Type;
 
/**
 * Event controller.
 *
 */
class Event2Controller extends Controller
{
   /**
     * Creates a new  entity.
     *
     */
    public function newAction(Request $request, Topic $parent)
    {
 
    	$em = $this->getDoctrine()->getManager();
 	
    	//$assObj = $em->getRepository('IfeAloesBundle:AssessmentObjective')->findCourse($parent->getCourse()->getId(),'0');    	

    	
    	$entity = new Event();
        $form   = $this->createCreateForm($entity,$parent);     
        
        return $this->render('IfeAloesBundle:Event2:newAjaxEvt.html.twig', array(
            'entity' 		=> $entity,
            'form'   		=> $form->createView(),
       	// 	'objectives'	=> $assObj,
        	'parent'		=> $parent,
        	'type'			=> 'new'
        ));
    	  
    }
    
    
    /**
     * Creates a form to create a SpecificObjective entity.
     *
     * @param SpecificObjective $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Event $entity, Topic $parent)
    {  
 	         
        $form = $this->createForm(new Event2Type($parent->getId()), $entity, array(
            'action' => "", 
            'method' => 'POST',
        )); 

   //     $form->add('submit', 'submit', array('label' => 'Create','attr' => array('data-dismiss' => "modal")));

        return $form;
    }       
    
    
    
    
   
    /**
     * Creates a new SpecificObjective entity.
     *
     */
    public function createAction(Request $request, Topic $parent)
    {
    	    	
    	$em = $this->getDoctrine()->getManager();    	
    	
  	    $request = $this->getRequest();
    	
        $entity = new Event();
        $form = $this->createCreateForm($entity,$parent);
        $form->handleRequest($request);
       
      	//$size = $parent->getAssessments()->count(); 
        	        
        if ($form->isValid()) {
 
            // Attach to the parent general objective
            $entity->setTopic($parent);
            //$entity->setPosition($size++);
                      
            $parent->addEvent($entity);
            
            // Attach to the parent course
            $entity->setCourse($parent->getCourse());
            $em->persist($entity);            
			$em->flush();	 

            foreach ( $entity->getAssessments() as $x )
                {
                $ass = $em->getRepository('IfeAloesBundle:Assessment')->find($x->getId());
                $ass->setEvent($entity);
            	$em->persist($ass);    
                }           

			$em->flush();	  


        	$tab = array();
        	$tab['result'] = true;     	       	
   	  	    		     	       	   	   
              	
    	    $tab['nb_spec'] = $parent->getEvents()->count();          	   	   
        	
    	  
        	$result = $this->renderView('IfeAloesBundle:Event2:EV_XX.html.twig', array(
            'child'						=> $entity,
            'entete'					=> true,
        	'parent'					=> $parent,
        	'course'					=> $parent->getCourse()
        	));	    		

        	$tab['content'] = $result;     	 

   			$assessments = $em->getRepository('IfeAloesBundle:Assessment')->findAssessmentsTopic($entity->getTopic()->getId());
   			$tab['assessments'] = $assessments;           	
         	

        	$response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;         	

            } 
 		else 
 			{
 				
        	$tab = array();
        	$tab['result'] = false;   			
	
         	
	        $result = $this->renderView('IfeAloesBundle:Event2:newAjaxEvt.html.twig', array(
	            'entity' 		=> $entity,
	            'form'   		=> $form->createView(),
      			'parent'		=> $parent,
	        	'type'			=> 'new'        
	        )); 				
 		           
        	$tab['content'] = $result;     	         	

        	$response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;       				
 			}
            
    }    
    
    
    /**
     * Creates a new GeneralObjective entity.
     *
     */ 
    public function delAction(Request $request, Event $source)
    {
    	$em = $this->getDoctrine()->getManager();
    	
        $deleteForm = $this->createDeleteForm($source->getId());    	
    	
        return $this->render('IfeAloesBundle:Event2:delAjaxEvt.html.twig', array(
            'entity' 		=> $source,
        	'parent'		=> $source->getTopic(),
            'delete_form' 	=> $deleteForm->createView(),            
        ));
    	     
    }   
    
    /**
     * Creates a form to delete a GeneralObjective entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(NULL, array ( 'attr' => array ( 'id' => 'formOGD' ) ) )
            ->setAction($this->generateUrl('topic_events_delete_2', array('id' => $id)))
            ->add('delete', 'submit', array('label' => 'Oui','attr' => array ( 'class' => 'btn btn-color3' )))
            ->add('nodelete', 'submit', array('label' => 'Non','attr' => array ( 'class' => 'btn btn-inverse' )))
            ->getForm() 
        ;
    }      

   /**
     * Deletes a GeneralObjective entity.
     */
    public function deleteAction(Request $request, Event $source)
    {  	
    	

        $em = $this->getDoctrine()->getManager();

        
        foreach ( $source->getAssessments() as $x )
                {
                $ass = $em->getRepository('IfeAloesBundle:Assessment')->find($x->getId());
                $ass->setEvent(null);
            	$em->persist($ass);    
                }           

		$em->flush();	        
        
        $em->remove($source);
        $em->flush();
        
	    $tab = array();	        
	    $tab['result'] = true;         	    

		$chgts = array();		    

   		$assessments = $em->getRepository('IfeAloesBundle:Assessment')->findAssessmentsTopic($source->getTopic()->getId());
   		$tab['assessments'] = $assessments;      			
		
        $tab['nb_spec'] = $source->getTopic()->getEvents()->count(); 
          
        
	    $response = new Response(json_encode($tab));
		$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
		return $response;   				
			
    }      
    

    /**
     * Creates a new SpecificObjective entity.
     *
     */ 
    public function editAction(Request $request, Event $source)
    {
    	$em = $this->getDoctrine()->getManager();
    		    	 
        $form   = $this->createCreateForm($source,$source->getTopic());     
        
        return $this->render('IfeAloesBundle:Event2:newAjaxEvt.html.twig', array(
            'entity' 		=> $source,
            'form'   		=> $form->createView(),
        	'parent'		=> $source->getTopic(),
        	'type'			=> 'update'         
        )); 
    	                
        
    }     
    
    
   /**
     * Creates a new SpecificObjective entity.
     *
     */
    public function updateAction(Request $request, Event $source)
    {
    	    	
    	$em  = $this->getDoctrine()->getManager();    	
     	    	
  	    $request = $this->getRequest();  	    
  	        
        
        $form = $this->createCreateForm($source,$source->getTopic());
        $form->handleRequest($request);
        

        if ($form->isValid()) {    	
 
        	$oldass = $em->getRepository('IfeAloesBundle:Assessment')->findby(array('event'=>$source->getId()));
        	foreach($oldass as $ass){
        		$ass->setEvent(null);
        	 	$em->persist($ass);
        	}
        	
            foreach ( $source->getAssessments() as $x )
                {
                $ass = $em->getRepository('IfeAloesBundle:Assessment')->find($x->getId());
                $source->addAssessment($ass);
                $ass->setEvent($source);
            	$em->persist($ass);
            	$em->persist($source);            	
                }           
                    	            
			$em->flush();		    		
    				
        	$tab = array();
        	$tab['result'] = true; 	     		
	    	 	
         	$result = $this->renderView('IfeAloesBundle:Event2:EV_XX.html.twig', array(
            'child'						=> $source,
            'entete'					=> false,
        	'parent'					=> $source->getTopic(),
        	'course'					=> $source->getTopic()->getCourse(),
        	));	    		

   			$tab['content'] = $result;   

   			$assessments = $em->getRepository('IfeAloesBundle:Assessment')->findAssessmentsTopic($source->getTopic()->getId());
   			$tab['assessments'] = $assessments;      			
	        	         	
        	$response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;	        
	    		
            } 
	else 
		{
        	$tab = array();
        	$tab['result'] = false; 	        	
         		        
	        $result = $this->renderView('IfeAloesBundle:Event2:newAjaxEvy.html.twig', array(
	            'entity' 		=> $source,
	            'form'   		=> $form->createView(),
	        	'parent'		=> $source->getTopic(),
	        	'type'		=> 'update'        
	        ));        	
        	
        	$tab['content'] = $result;     	         	

        	$response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;	        
	    		        	
		}

    
    }        
    
    
    
}
