<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ife\AloesBundle\Entity\Topic;
use Ife\AloesBundle\Entity\Assessment;
use Ife\AloesBundle\Entity\AssessmentObjective;
use Ife\AloesBundle\Form\Assessment2Type; 
use Ife\AloesBundle\Entity\Typologie;

/**
 * Assessment controller.
 *
 */
class Assessment2Controller extends Controller
{

   /**
     * Creates a new SpecificObjective entity.
     *
     */
    public function newAction(Request $request, Topic $parent)
    {
 
    	$em = $this->getDoctrine()->getManager();
 	
    	$assObj = $em->getRepository('IfeAloesBundle:AssessmentObjective')->findCourse($parent->getCourse()->getId(),'0');    	
    	
    	//$typologies = $em->getRepository('IfeAloesBundle:Typologie')->findAll();
    	
    	$entity = new Assessment();
        $form   = $this->createCreateForm($entity,$parent);     
        
        return $this->render('IfeAloesBundle:Assessment2:newAjaxAss.html.twig', array(
            'entity' 		=> $entity,
            'form'   		=> $form->createView(),
       	 	'objectives'	=> $assObj,
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
    private function createCreateForm(Assessment $entity, Topic $parent)
    {  

    	         
        $form = $this->createForm(new Assessment2Type($parent->getId()), $entity, array(
            'action' => $this->generateUrl('topic_assessment_create_2', array(
                'id' => $parent->getId()
            )), 
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
    	
        $entity = new Assessment();
        $form = $this->createCreateForm($entity,$parent);
        $form->handleRequest($request);
       
      	$size = $parent->getAssessments()->count(); 
        	        
        if ($form->isValid()) {
 
            // Attach to the parent general objective
            $entity->setTopic($parent);
            $entity->setPosition($size++);
            
            
            $parent->addAssessment($entity);
            
            // Attach to the parent course
            $entity->setCourse($parent->getCourse());
            $em->persist($entity);
       		

        	$radios = $request->request->all();   

	    	$repository_spe_obj = $em->getRepository('IfeAloesBundle:SpecificObjective');        	
        	
	    	foreach ($radios as $key => $val) 
	    		{
	    		$pos1 = stripos($key, "radio");	
	    		
	    		if ($pos1 !== false) 
	    			{	
	    				
	    				$cs = str_replace("radio", "", $key);
	    				
	    				$array_cs =  explode("#",$cs);
	    				$cs = $array_cs[1];		    				
	    	
	    				if ($val!="0")
	    					{

							$obj = $repository_spe_obj->find($cs);
							
							$assObj = new AssessmentObjective();
							$assObj->setObjective($obj);
							$assObj->setAssessment($entity);
							$assObj->setRating($val);
						

				            $em->persist($assObj); 

	    					}
	    			}
	    		}
		            
			$em->flush();	 
							    		
    		$em = $this->getDoctrine()->getManager();    	

    		$topic = $em->getRepository('IfeAloesBundle:Topic')->find($parent->getId());    		
 			$assessmentObjectives= $em->getRepository('IfeAloesBundle:Assessment')->findAssessmentObjectiveByCourse($topic->getCourse());    		
    		

        	$tab = array();
        	$tab['result'] = true;     	       	
   	  	    		     	
	
    	    $tab['nb_spec'] = $topic->getAssessments()->count();          	   	   
       		$tab['weight']  = $topic->getWeight()*100;              	
        	 
    	  
        	$result = $this->renderView('IfeAloesBundle:Assessment2:AS_XX.html.twig', array(
            'child'						=> $entity,
            'entete'					=> true,
        	'parent'					=> $parent,
        	'course'					=> $parent->getCourse(),
       	 	'assessmentObjectives'		=> $assessmentObjectives,
        	));	    		

        	$tab['content'] = $result;     	  

	    	$total= $em->getRepository('IfeAloesBundle:Assessment')->getCourseAssessmentWeight($topic->getCourse()->getId());
	    	$tab['sum']  =  $total*100;        	
        	

        	$response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;         	
	    		
            } 
 		else 
 			{
        	$tab = array();
        	$tab['result'] = false;   			
 				
     		$topic = $em->getRepository('IfeAloesBundle:Topic')->find($parent->getId());          	
    		$assObj = $em->getRepository('IfeAloesBundle:AssessmentObjective')->findCourse($topic->getCourse()->getId(),'0');   	 	       	

	
        	$radios = $request->request->all();   

	    	$repository_spe_obj = $em->getRepository('IfeAloesBundle:SpecificObjective');                
                   	
	    	foreach ($radios as $key => $val) 
	    		{
	    		$pos1 = stripos($key, "radio");	
	    		
	    		if ($pos1 !== false) 
	    			{	    				
	    				$cs = str_replace("radio", "", $key);
	    				
	    				$array_cs =  explode("#",$cs);
	    				$cs = $array_cs[1];	
	    				if ($val==null)
	    					$val = 0;	
						$tmp = $assObj[$array_cs[0]."#".$array_cs[1]];
						$tmp['rating']=$val;
						$assObj[$array_cs[0]."#".$array_cs[1]]=$tmp;	    						
	    			}    	
	    		}		
    		
    		
	        $result = $this->renderView('IfeAloesBundle:Assessment2:newAjaxAss.html.twig', array(
	            'entity' 		=> $entity,
	            'form'   		=> $form->createView(),
	       	 	'objectives'	=> $assObj,
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
     * Creates a new SpecificObjective entity.
     *
     */ 
    public function editAction(Request $request, Assessment $source)
    {
    	$em = $this->getDoctrine()->getManager();
    	
    	$entity = $em->getRepository('IfeAloesBundle:Assessment')->find($source->getId());    	

    	$assObj = $em->getRepository('IfeAloesBundle:AssessmentObjective')->findCourse($entity->getTopic()->getCourse()->getId(),$source->getId());   	 	
    	 
        $form   = $this->createCreateForm($entity,$entity->getTopic());     
        
        return $this->render('IfeAloesBundle:Assessment2:newAjaxAss.html.twig', array(
            'entity' 		=> $entity,
            'form'   		=> $form->createView(),
       	 	'objectives'	=> $assObj,
        	'parent'		=> $entity->getTopic(),
        	'type'			=> 'update'         
        )); 
    	                
        
    }    

    
    
   /**
     * Creates a new SpecificObjective entity.
     *
     */
    public function updateAction(Request $request, Assessment $source)
    {
    	    	
    	$em = $this->getDoctrine()->getManager();    	
    	
  	    $request = $this->getRequest();
    	
	    $entity = $em->getRepository('IfeAloesBundle:Assessment')->find($source->getId());  	    
  	    
        $form = $this->createCreateForm($entity,$source->getTopic());
        $form->handleRequest($request);
        

        if ($form->isValid()) {    	

            foreach($entity->getObjectiveLinks() as $obj)
           		{
            	$entity->removeObjectiveLink($obj);
           		}
            
            $em->persist($entity);
	
        	$radios = $request->request->all();   

	    	$repository_spe_obj = $em->getRepository('IfeAloesBundle:SpecificObjective');                
                   	
	    	foreach ($radios as $key => $val) 
	    		{
	    		$pos1 = stripos($key, "radio");	
	    		
	    		if ($pos1 !== false) 
	    			{
	    				
	    				$cs = str_replace("radio", "", $key);
	    				
	    				$array_cs =  explode("#",$cs);
	    				$cs = $array_cs[1];	
	    					
	    				if ($val!="0")
	    					{

							$obj = $repository_spe_obj->find($cs);
							
							$assObj = new AssessmentObjective();
							$assObj->setObjective($obj);
							$assObj->setAssessment($entity);
							$assObj->setRating($val);														
				            $em->persist($assObj);
	    					}
	    			}
	    	
	    		}	            

			$em->flush();		    		
    				
        	$tab = array();
        	$tab['result'] = true; 	     		
	    		
	    		
	    	$src= $em->getRepository('IfeAloesBundle:Assessment')->find($source->getId());   	    	
	    	
     		$assessmentObjectives= $em->getRepository('IfeAloesBundle:Assessment')->findAssessmentObjectiveByCourse($src->getTopic()->getCourse());	    	
     	
        	$result = $this->renderView('IfeAloesBundle:Assessment2:AS_XX.html.twig', array(
            'child'						=> $src,
            'entete'					=> false,
        	'parent'					=> $src->getTopic(),
        	'course'					=> $src->getTopic()->getCourse(),
       	 	'assessmentObjectives'		=> $assessmentObjectives,
        	));	    		
 	 
	        
        	$tab['content'] = $result;  

   			$events = $em->getRepository('IfeAloesBundle:Event')->findEventsTopic($source->getTopic()->getId());
   			$tab['events'] = $events;    
        	
        	
        	$tab['weight']  = $src->getTopic()->getWeight()*100;      
        	        	
	    	$total= $em->getRepository('IfeAloesBundle:Assessment')->getCourseAssessmentWeight($src->getTopic()->getCourse()->getId());
	    	$tab['sum']  =  $total*100;
	    	
        	$response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;	        
	    		
            } 
	else 
		{
        	$tab = array();
        	$tab['result'] = false; 	        	
        	
    		$assObj = $em->getRepository('IfeAloesBundle:AssessmentObjective')->findCourse($entity->getTopic()->getCourse()->getId(),$source->getId());   	 	       	
        		        
    		
        	$radios = $request->request->all();   

	    	$repository_spe_obj = $em->getRepository('IfeAloesBundle:SpecificObjective');                
                   	
	    	foreach ($radios as $key => $val) 
	    		{
	    		$pos1 = stripos($key, "radio");	
	    		
	    		if ($pos1 !== false) 
	    			{	    				
	    				$cs = str_replace("radio", "", $key);
	    				
	    				$array_cs =  explode("#",$cs);
	    				$cs = $array_cs[1];	
	    				if ($val==null)
	    					$val = 0;	
						$tmp = $assObj[$array_cs[0]."#".$array_cs[1]];
						$tmp['rating']=$val;
						$assObj[$array_cs[0]."#".$array_cs[1]]=$tmp;	    						
	    			}    	
	    		}	            
    		
    		
    		
    		
	        $result = $this->renderView('IfeAloesBundle:Assessment2:newAjaxAss.html.twig', array(
	            'entity' 		=> $entity,
	            'form'   		=> $form->createView(),
	       	 	'objectives'	=> $assObj,
	        	'parent'		=> $entity->getTopic(),
	        	'type'		=> 'update'        
	        ));        	
        	        	        
	        
        	$tab['content'] = $result;     	         	

        	$response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;	        
	    		        	
		}

    
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
            ->setAction($this->generateUrl('topic_assessment_delete_2', array('id' => $id)))
            ->add('delete', 'submit', array('label' => 'Oui','attr' => array ( 'class' => 'btn btn-color2' )))
            ->add('nodelete', 'submit', array('label' => 'Non','attr' => array ( 'class' => 'btn btn-inverse' )))
            ->getForm() 
        ;
    }  
        
    /**
     * Creates a new GeneralObjective entity.
     *
     */ 
    public function delAction(Request $request, Assessment $source)
    {
    	$em = $this->getDoctrine()->getManager();
    	
        $deleteForm = $this->createDeleteForm($source->getId());    	
    	
        return $this->render('IfeAloesBundle:Assessment2:delAjaxAss.html.twig', array(
            'entity' 		=> $source,
        	'parent'		=> $source->getTopic(),
            'delete_form' 	=> $deleteForm->createView(),            
        ));
    	     
    }  

   /**
     * Deletes a GeneralObjective entity.
     */
    public function deleteAction(Request $request, Assessment $source)
    {  	
    	
        $em = $this->getDoctrine()->getManager();
       
        $em->remove($source);
        $em->flush();
        
	    $tab = array();	        
	    $tab['result'] = true;         	    

		$chgts = array();		    

        $tab['content'] = $chgts; 	          
        
        $tab['nb_spec'] = $source->getTopic()->getAssessments()->count();          	   	   
        $tab['weight']  = $source->getTopic()->getWeight()*100;     


   		$events = $em->getRepository('IfeAloesBundle:Event')->findEventsTopic($source->getTopic()->getId());
   		$tab['events'] = $events;       

	    $total= $em->getRepository('IfeAloesBundle:Assessment')->getCourseAssessmentWeight($source->getTopic()->getCourse()->getId());
	    $tab['sum']  =  $total*100;   		
        
        
	    $response = new Response(json_encode($tab));
		$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
		return $response;   				
			
    }          
    
    
}
