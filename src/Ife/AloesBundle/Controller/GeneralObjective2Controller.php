<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Ife\AloesBundle\Entity\Course;
use Ife\AloesBundle\Entity\GeneralObjective;
use Ife\AloesBundle\Form\GeneralObjective2Type;

/**
 * GeneralObjective controller. 
 *
 */
class GeneralObjective2Controller extends Controller
{
	
    /** 
     * Displays a form to create a new GeneralObjective entity.
     *
     */
    public function new2Action(Course $course)
    {     	
        $entity = new GeneralObjective();
        $entity->setCourse($course);        
           	    
        $form   = $this->createCreateForm($entity);

        return $this->render('IfeAloesBundle:GeneralObjective2:newAjaxObj.html.twig', array(
            'entity' => $entity,
        	'type'	 => 'new',
            'form'   => $form->createView(),  
        ));
        
    }
    
    
    /**
     * Creates a form to create a GeneralObjective entity.
     *
     * @param GeneralObjective $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(GeneralObjective $entity)
    { 
        $form = $this->createForm(new GeneralObjective2Type(), $entity, array(
            'action' => "",
            'method' => 'POST',
        ));
 
        return $form;
    }     
 
	
    /**
     * Lists all GeneralObjective entities.
     *
     */ 
    public function indexAction(Course $course,$sequence)
    {
        $em = $this->getDoctrine()->getManager();
         
        
        $entities = $em->getRepository('IfeAloesBundle:GeneralObjective')->findByCourse($course);        
        $weights = $em->getRepository('IfeAloesBundle:SpecificObjective')->findWeightsByCourse($course);
        foreach ($entities as $entity)
        	{           
        	$entity->setWeights($weights);
        	}
	
        	
        $objectifCompetences = $em->getRepository('IfeAloesBundle:SpecificObjective')->findObjectiveCompetencefByCourse($course);
        
        return $this->render('IfeAloesBundle:GeneralObjective2:index.html.twig', array(
            'entities' 				=> $entities,
            'course' 				=> $course,
        	'menu'					=> "course_objective2",
        	'sequence'				=> $sequence,
        	'objectifCompetences'	=> $objectifCompetences
        ));

    }

    
    /**
     * Lists all Specific Objective order  entities. 
     * 
     */ 
    public function orderAction(Course $course)
    {
    	$request = $this->getRequest();

        $em = $this->getDoctrine()->getManager();    	

        $repository_general 	= $em->getRepository('IfeAloesBundle:GeneralObjective');         
        $repository_specific 	= $em->getRepository('IfeAloesBundle:SpecificObjective');       	
    	
    	$data = $request->request->all();      

    	
    	$og =  str_replace("sortable", "", $data['sortable']);

    	
    	foreach ($data as $key => $val) 
    		{
    		if ($key!="sortable")
		 		{
    			 
    			// Objectif general
    			//echo "#key=".$key."#"."<br/";
    			 
    			$i=0;   			
    			foreach ($val as $key2 => $val2) 
    			{   
    				//echo "#key2=".$key2."#";
    				//echo "#val2=".$val2."#<br/>"; 

			        $genObj = $repository_general->find($og);    
				
	    			// Positionnement objectif specifique	
			        $specObj = $repository_specific->find($val2);    			
		                
			        $specObj->setPosition($i++);       			 	        	  
		
			        $specObj->setGeneralObjective($genObj); 	    			
					$em->persist($specObj);
	    			    							
	    			$em->flush();     
					    													
		 			}
    			}			    			
    		}    	
     	         	           
	 
	        $tab = array();
	        
	        $tab['result'] = true;       	         	           
	 
			$result = array();	
			$result['key']= $og;    

			$result['size']= $i;  
			

        	$entities = $em->getRepository('IfeAloesBundle:GeneralObjective')->findByCourse($course);        
        	$weights = $em->getRepository('IfeAloesBundle:SpecificObjective')->findWeightsByCourse($course);
        	
			$chgts = array();		    
	        $cpt=0;        
	        
	        foreach ($entities as $cg) 
	        {
				$chgt = array();        	
	            $cg->setWeights($weights);
	            $chgt['key']		=$cg->getId();
	            $chgt['weight']		=$cg->weight*100; 
	            $chgt['type']		="GEN";            
	            $chgts[$cpt++]=$chgt;
	            foreach ($cg->getSpecificObjectives() as $cs) 
	        		{            
					$chgt = array();  
		            $chgt['key']		=$cs->getId();
		            $chgt['weight']		=$cs->weight*100; 
		            $chgt['type']		="SPE"; 
		            $chgts[$cpt++]=$chgt;            				
	        		} 
	            
	        }       
 
			$result['order']= $chgts; 
			
			
        	$tab['content'] = $result; 	          			
			
        
	        
	        $response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;   			
    	
    }     
    
    /**
     * Creates a new GeneralObjective entity.
     *
     */
    public function createAction(Request $request,Course $course)
    {  
    	    	
        $entity = new GeneralObjective();
        
        $entity->setCourse($course);       
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        
        if ($form->isValid() ) 
        	{
        	$entity->setCourse($course);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush(); 

        	$tab = array();
        	$tab['result'] = true;  
        	               	
        	$result = $this->renderView('IfeAloesBundle:GeneralObjective2:addAjaxObj.html.twig', array(
            	'parent' 					=> $entity, 
        		'type'	 					=> 'new',        	
        		'course'					=> $entity->getCourse()      	
        	));        	 
        	 
        	$tab['content'] = $result;     	         	

        	$response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;        	
        	
        	}
        else 
        	{
         	$tab = array(); 

        	$tab['result'] = false;
        	
        	$result = $this->renderView('IfeAloesBundle:GeneralObjective2:newAjaxObj.html.twig', array(
            	'entity' => $entity,
            	'form'   => $form->createView(),  
        		'type'	 => 'new'        	
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
    public function edit2Action(Request $request, GeneralObjective $source)
    {
    	$em = $this->getDoctrine()->getManager();
    	    	
        $form   = $this->createCreateForm($source); 
        
        return $this->render('IfeAloesBundle:GeneralObjective2:newAjaxObj.html.twig', array(
            'entity' 		=> $source,
            'form'   		=> $form->createView(),
        	'type'		=> 'update'        
        ));
    	  
    }    
        
    
    /**
     * Creates a new GeneralObjective entity.
     *
     */ 
    public function update2Action(Request $request, GeneralObjective $source)
    {
    	$em = $this->getDoctrine()->getManager();
    	
        $form = $this->createCreateForm($source);
        $form->handleRequest($request);  	
    			 
        if ($form->isValid()) {
        	$em = $this->getDoctrine()->getManager();
        	  
            $em->persist($source);
            $em->flush();        	  

	        $tab = array();
	        
	        $tab['result'] = true;
	        /*
	        $result =   $this->renderView('IfeAloesBundle:GeneralObjective2:OG_XX_A.html.twig', array(
	            'parent' 		=> $source,
	        	'course'		=> $source->getCourse(),
	        	'type'			=> 'update'        
	        ));
	        */
	         
	        $tab['content'] = $source->getTitle();         	         	           
	
	        $response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;           
        	} 
		else 	
			{			
	        $tab = array();
	        
	        $tab['result'] = false;
	                
       		$result 	=    $this->renderView('IfeAloesBundle:GeneralObjective2:newAjaxObj.html.twig', array(
            'entity' 		=> $source,
            'form'   		=> $form->createView(),
        	'type'			=> 'update'        
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
            ->setAction($this->generateUrl('course_objective_delete2', array('id' => $id)))
            ->add('delete', 'submit', array('label' => 'Oui','attr' => array ( 'class' => 'btn btn-color1' )))
            ->add('nodelete', 'submit', array('label' => 'Non','attr' => array ( 'class' => 'btn btn-inverse' )))
            ->getForm() 
        ;    
        
    }
    
    
    /**
     * Creates a new GeneralObjective entity.
     *
     */  
    public function del2Action(Request $request, GeneralObjective $source)
    {
    	$em = $this->getDoctrine()->getManager();
    	    	
        $deleteForm = $this->createDeleteForm($source->getId());    	
    	
        return $this->render('IfeAloesBundle:GeneralObjective2:delAjaxObj.html.twig', array(
            'entity' 			=> $source,
            'delete_form' 		=> $deleteForm->createView(),            
        ));
    	  
    }     
    
    
    /**
     * Deletes a GeneralObjective entity.
     *
     */
    public function delete2Action(Request $request,GeneralObjective $source)
    {
        $em = $this->getDoctrine()->getManager();

       // $entity = $em->getRepository('IfeAloesBundle:GeneralObjective')->find($id);    	
    	        
        foreach($source->getSpecificObjectives() as $specObj) {
        	$em->remove($specObj);       
        }    
        
        $em->remove($source);
        $em->flush();
        
	    $tab = array();	         
	    $tab['result'] = true;        
            
        $entities = $em->getRepository('IfeAloesBundle:GeneralObjective')->findByCourse($source->getCourse());        
        $weights  = $em->getRepository('IfeAloesBundle:SpecificObjective')->findWeightsByCourse($source->getCourse());

		$chgts = array();		    
        $cpt=0;        
        
        foreach ($entities as $cg) 
        {
			$chgt = array();        	
            $cg->setWeights($weights);
            $chgt['key']		=$cg->getId();
            $chgt['weight']		=$cg->weight*100; 
            $chgt['type']		="GEN";            
            $chgts[$cpt++]=$chgt;
            foreach ($cg->getSpecificObjectives() as $cs) 
        		{            
				$chgt = array();  
	            $chgt['key']		=$cs->getId();
	            $chgt['weight']		=$cs->weight*100; 
	            $chgt['type']		="SPE"; 
	            $chgts[$cpt++]=$chgt;            				
        		}   
        }       
        

        $tab['content'] = $chgts; 	 	    
	    
	    
	    $response = new Response(json_encode($tab));
		$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
		return $response;   				
			
    }    
    
}
