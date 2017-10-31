<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ife\AloesBundle\Entity\GeneralObjective;
use Ife\AloesBundle\Entity\SpecificObjective;
use Ife\AloesBundle\Entity\ObjectiveCompetence;
use Ife\AloesBundle\Form\SpecificObjective2Type;

/**
 * SpecificObjective controller.
 *
 */
class SpecificObjective2Controller extends Controller
{

    /**
     * Creates a new SpecificObjective entity.
     *
     */
    public function newAction(Request $request, GeneralObjective $parent)
    {
 
    	$em = $this->getDoctrine()->getManager(); 	
    	
    	$objComp = $em->getRepository('IfeAloesBundle:ObjectiveCompetence')->findCourse($parent->getCourse()->getProgram()->getId(),'0');    	
    			
    	$entity = new SpecificObjective(); 
        $form   = $this->createCreateForm($entity,$parent);     
        
        return $this->render('IfeAloesBundle:SpecificObjective2:newAjaxSpecObj.html.twig', array(
            'entity' 		=> $entity,
            'form'   		=> $form->createView(),
       	 	'competences'	=> $objComp, 
        	'parent'		=> $parent,
        	'type'			=> 'new'
        ));
    	  
    }
  
    
    /**
     * Creates a new SpecificObjective entity.
     *
     */ 
    public function editAction(Request $request, SpecificObjective $source)
    {
    	$em = $this->getDoctrine()->getManager();
    	
    	$entity = $em->getRepository('IfeAloesBundle:SpecificObjective')->find($source->getId());    	
    	
    	//$competences = $em->getRepository('IfeAloesBundle:SpecificCompetence')->findAll();
   		
    	$objComp = $em->getRepository('IfeAloesBundle:ObjectiveCompetence')->findCourse($entity->getCourse()->getProgram()->getId(),$source->getId());    	

    	
        $form   = $this->createCreateForm($entity,$entity->getGeneralObjective());     
        
        return $this->render('IfeAloesBundle:SpecificObjective2:newAjaxSpecObj.html.twig', array(
            'entity' 		=> $entity,
            'form'   		=> $form->createView(),
       	 	'competences'	=> $objComp,
        	'parent'		=> $entity->getGeneralObjective(),
        	'type'		=> 'update'        
        ));
    	  
    }    
    
    
    /**
     * Creates a form to create a SpecificObjective entity.
     *
     * @param SpecificObjective $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(SpecificObjective $entity, GeneralObjective $parent)
    {  

    	         
        $form = $this->createForm(new SpecificObjective2Type(), $entity, array(
            'action' => $this->generateUrl('general_objective_specific_objective_create_2', array(
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
    public function createAction(Request $request, GeneralObjective $parent)
    {
    	    	
    	$em = $this->getDoctrine()->getManager();    	
    	
  	    $request = $this->getRequest();
    	
        $entity = new SpecificObjective();
        $form = $this->createCreateForm($entity,$parent);
        $form->handleRequest($request);

        
        $size = $parent->getSpecificObjectives()->count();
        	        
        if ($form->isValid()) {
        
        	
            // Attach to the parent general objective
            $entity->setGeneralObjective($parent);
            $entity->setPosition($size++);
            
            // Attach to the parent course
            $entity->setCourse($parent->getCourse());

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
        	
        	$radios = $request->request->all();   

	    	$repository_competence = $em->getRepository('IfeAloesBundle:SpecificCompetence');        	
        	
	    	foreach ($radios as $key => $val) 
	    		{ 
	    		$pos1 = stripos($key, "radio");	
	    		
	    		if ($pos1 !== false) 
	    			{
	    				$cs = str_replace("radio", "", $key);
	    				if ($val!="0")
	    					{

							$competence = $repository_competence->find($cs);
							
							$objComp = new ObjectiveCompetence();
							$objComp->setObjective($entity);
							$objComp->setCompetence($competence);
							$objComp->setRating($val);

							
				            $em->persist($objComp);
				            $em->flush();							
				
	    					}
	    			}
	    	
	    		}	

	
            
        	$tab = array();
        	$tab['result'] = true;  

	        $objectifCompetences = $em->getRepository('IfeAloesBundle:SpecificObjective')->findObjectiveCompetencefByCourse($parent->getCourse());        	  
	         
	    	$entity = $em->getRepository('IfeAloesBundle:SpecificObjective')->find($entity->getId());   	        

        	$result = $this->renderView('IfeAloesBundle:SpecificObjective2:OS_XX.html.twig', array(
            'child'						=> $entity,
            'entete'					=> true,
        	'parent'					=> $parent,
        	'course'					=> $parent->getCourse(),
            'objectifCompetences'		=> $objectifCompetences
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
 				
        	
 		   	$objComp = $em->getRepository('IfeAloesBundle:ObjectiveCompetence')->findCourse($parent->getCourse()->getId(),'0');    	
         	
	        $result = $this->renderView('IfeAloesBundle:SpecificObjective2:newAjaxSpecObj.html.twig', array(
	            'entity' 		=> $entity,
	            'form'   		=> $form->createView(),
	       	 	'competences'	=> $objComp,
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
     * Deletes a SpecificObjective entity.
     *
     */
    /*
    public function deleteAction(Request $request, $id)
    {
     
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('IfeAloesBundle:SpecificObjective')->find($id);

	    $sequence = $entity->getGeneralObjective()->getId();        
	    
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SpecificObjective entity.');
        }

        $em->remove($entity);
        $em->flush();
     
        return $this->redirect($this->generateUrl('course_objective2', array(
            'id' => $entity->getCourse()->getId(), 
        	'sequence'	=> $sequence
        ))); 
    }    
    */
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
            ->setAction($this->generateUrl('specificcompetence_delete2', array('id' => $id)))
            ->add('delete', 'submit', array('label' => 'Oui','attr' => array ( 'class' => 'btn btn-color2' )))
            ->add('nodelete', 'submit', array('label' => 'Non','attr' => array ( 'class' => 'btn btn-inverse' )))
            ->getForm() 
        ;
    }    

    /**
     * Creates a new GeneralObjective entity.
     *
     */ 
    public function delAction(Request $request, SpecificObjective $source)
    {
    	$em = $this->getDoctrine()->getManager();
    	
        $deleteForm = $this->createDeleteForm($source->getId());    	
    	
        return $this->render('IfeAloesBundle:SpecificObjective2:delAjaxSpecObj.html.twig', array(
            'entity' 		=> $source,
        	'parent'		=> $source->getGeneralObjective(),
            'delete_form' 	=> $deleteForm->createView(),            
        ));
    	    
    }         
    
    /**
     * Creates a new SpecificObjective entity.
     *
     */
    public function updateAction(Request $request, SpecificObjective $source)
    {
    	    	
    	$em = $this->getDoctrine()->getManager();    	
    	
  	    $request = $this->getRequest();
    	
	    $entity = $em->getRepository('IfeAloesBundle:SpecificObjective')->find($source->getId());  	    
  	    
        $form = $this->createCreateForm($entity,$source->getGeneralObjective());
        $form->handleRequest($request);
        

        if ($form->isValid()) {    	

            $em = $this->getDoctrine()->getManager();

            foreach($entity->getCompetenceLinks() as $comp)
           		{
            	$entity->removeCompetenceLink($comp);
           		}
            
            $em->persist($entity);
            $em->flush();
        	
        	$radios = $request->request->all();   

	    	$repository_competence = $em->getRepository('IfeAloesBundle:SpecificCompetence');        	
        	
	    	foreach ($radios as $key => $val) 
	    		{
	    		$pos1 = stripos($key, "radio");	
	    		
	    		if ($pos1 !== false) 
	    			{
	    				$cs = str_replace("radio", "", $key);
	    				if ($val!="0")
	    					{

							$competence = $repository_competence->find($cs);
							
							$objComp = new ObjectiveCompetence();
							$objComp->setObjective($entity);
							$objComp->setCompetence($competence);
							$objComp->setRating($val);

							
				            $em->persist($objComp);
				            $em->flush();							
				
	    					}
	    			}
	    	
	    		}	            
	    	    	
        	$tab = array();
        	$tab['result'] = true; 	     			    		        	
        	
	        $objectifCompetences = $em->getRepository('IfeAloesBundle:SpecificObjective')->findObjectiveCompetencefByCourse($entity->getGeneralObjective()->getCourse());
	                
	        $result = $this->renderView('IfeAloesBundle:SpecificObjective2:OS_XX.html.twig', array(
	            'child'						=> $entity, 
            	'entete'					=> false,	        
	        	'parent'					=> $entity->getGeneralObjective(),
	        	'course'					=> $entity->getGeneralObjective()->getCourse(),
	            'objectifCompetences'		=> $objectifCompetences
	        )); 	    		 				 
	        
        	$tab['specifique'] = $result;   


        	$entities = $em->getRepository('IfeAloesBundle:GeneralObjective')->findByCourse($entity->getGeneralObjective()->getCourse());        
        	$weights  = $em->getRepository('IfeAloesBundle:SpecificObjective')->findWeightsByCourse($entity->getGeneralObjective()->getCourse());
        	
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
 
			$tab['order']= $chgts; 			        	
			
        	$response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;	        
	    		
            } 
	else 
		{
        	$tab = array();
        	$tab['result'] = false; 	        	
        	
	    	$objComp = $em->getRepository('IfeAloesBundle:ObjectiveCompetence')->findCourse($entity->getCourse()->getProgram()->getId(),$source->getId());    				      
	        
	        $result = $this->renderView('IfeAloesBundle:SpecificObjective2:newAjaxSpecObj.html.twig', array(
	            'entity' 		=> $entity,
	            'form'   		=> $form->createView(),
	       	 	'competences'	=> $objComp,
	        	'parent'		=> $entity->getGeneralObjective(),
	        	'type'		=> 'update'        
	        ));        	
        	
        	$tab['content'] = $result;     	         	

        	$response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;	        
	    		        	
		}

    
    }    
    
       
   /**
     * Deletes a GeneralObjective entity.
     *
     */
    public function deleteAction(Request $request, SpecificObjective $entity)
    {
        $session = $request->getSession();       	
    	$selection = $session->get("selection");    	
    	
        $em = $this->getDoctrine()->getManager();
       
        $em->remove($entity);
        $em->flush();
        
	    $tab = array();	        
	    $tab['result'] = true;    
        
        $entities = $em->getRepository('IfeAloesBundle:GeneralObjective')->findByCourse($entity->getCourse());        
        $weights = $em->getRepository('IfeAloesBundle:SpecificObjective')->findWeightsByCourse($entity->getCourse());

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
        
        $tab['nb_spec'] = $entity->getGeneralObjective()->getSpecificObjectives()->count();          	   	   
	
	    $response = new Response(json_encode($tab));
		$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
		return $response;   				
			
    }      
}
