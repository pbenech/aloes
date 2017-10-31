<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ife\AloesBundle\Entity\GeneralCompetence;
use Ife\AloesBundle\Entity\SpecificCompetence;
use Ife\AloesBundle\Form\SpecificCompetence2Type;

use Symfony\Component\HttpFoundation\Response;

/**
 * SpecificCompetence controller.
 *
 */
class SpecificCompetence2Controller extends Controller
{
		
    /**
     * Creates a new SpecificObjective entity.
     *
     */ 
    public function editAction(Request $request, SpecificCompetence $source)
    {
    	$em = $this->getDoctrine()->getManager(); 	
    			 
        $form   = $this->createCreateForm($source,$source->getGeneralCompetence());      
        
        return $this->render('IfeAloesBundle:SpecificCompetence2:newAjaxSpecComp.html.twig', array(
            'entity' 		=> $source,
            'form'   		=> $form->createView(),
        	'parent'		=> $source->getGeneralCompetence(),
        	'type'			=> 'update'        
        ));
    	  
    }   	
	
    /**
     * Creates a form to create a SpecificCompetence entity.
     *
     * @param SpecificCompetence $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(SpecificCompetence $entity)
    {
        $form = $this->createForm(new SpecificCompetence2Type(), $entity, array(
            'action' => "",
            'method' => 'POST',
        ));

  //      $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }	
	
    /**
     * Creates a new SpecificObjective entity.
     *
     */
    public function newAction(Request $request, GeneralCompetence $parent)
    {
 
    	$em = $this->getDoctrine()->getManager();
    	   			
    	$entity = new SpecificCompetence();
        $form   = $this->createCreateForm($entity,$parent);     
        
        return $this->render('IfeAloesBundle:SpecificCompetence2:newAjaxSpecComp.html.twig', array(
            'entity' 		=> $entity,
            'form'   		=> $form->createView(),
        	'parent'		=> $parent,
        	'type'			=> 'new' 
        ));
    	  
    }
    
    /**
     * Creates a new SpecificObjective entity.
     *
     */
    public function createAction(Request $request, GeneralCompetence $parent)
    {
    	    	
        $session = $request->getSession();    	
    	$selection = $session->get("selection");
    	
    	$em = $this->getDoctrine()->getManager();    	
    	
  	    $request = $this->getRequest();
    	
        $entity = new SpecificCompetence();
        $form = $this->createCreateForm($entity,$parent);
        $form->handleRequest($request);

        	        
        if ($form->isValid()) {
        
        	
            // Attach to the parent general objective
            $entity->setGeneralCompetence($parent);
            
            $size = $parent->getSpecificCompetences()->count()+1;
            $entity->setPosition($size);
            
            // Attach to the parent course
            $entity->setProgram($parent->getProgram());

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            
        	$tab = array();
        	$tab['result'] = true;     	
	         
	    	//$entity = $em->getRepository('IfeAloesBundle:SpecificCompetence')->find($entity->getId());   	        
	    	
	        $weights = $em->getRepository('IfeAloesBundle:SpecificCompetence')->findWeightsByProgram($parent->getProgram()->getId(), $selection); 	    	      
	    	$parent->setWeights($weights);
	    		
        	$result = $this->renderView('IfeAloesBundle:SpecificCompetence2:CS_XX.html.twig', array(
            'child'						=> $entity,
            'entete'					=> true,
        	'parent'					=> $parent,
        	'action'					=> 'update',
        	'program'					=> $parent->getProgram()
        	));	    		 

        	$tab['content'] = $result;     	         	
 
         	$tab['nb_spec'] = $size;          	   	
        	$tab['weight']  = $parent->weight*100;  
        	        	 
        	$response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;         	
	    		
            } 
 		else 
 			{
        	$tab = array();
        	$tab['result'] = false;   			
          	
	        $result = $this->renderView('IfeAloesBundle:SpecificCompetence2:newAjaxSpecComp.html.twig', array(
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
    
    
    public function updateAction(Request $request, SpecificCompetence $source)
    {
    	    	
    	$em = $this->getDoctrine()->getManager();    	
    	
  	    $request = $this->getRequest();
    	
	    //$entity = $em->getRepository('IfeAloesBundle:SpecificCompetence')->find($source->getId());  	    
  	    
        $form = $this->createCreateForm($source,$source->getGeneralCompetence());
        $form->handleRequest($request);
        

        if ($form->isValid()) {    	

            $em = $this->getDoctrine()->getManager();
            
            $em->persist($source);
            $em->flush();
         
        	$tab = array();
        	$tab['result'] = true; 	     		
        	
        	$tab['content'] = $source->getTitle();   
        	$tab['description'] = $source->getDescription();  
        	
        	
        	$response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;	        
	    		
            } 
	else 
		{
        	$tab = array();
        	$tab['result'] = false; 	        	
        	          	
	        $result = $this->renderView('IfeAloesBundle:SpecificCompetence2:newAjaxSpecComp.html.twig', array(
	            'entity' 		=> $source,
	            'form'   		=> $form->createView(),
      			'parent'		=> $source->getGeneralCompetence(),
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
    public function delAction(Request $request, SpecificCompetence $source)
    {
    	$em = $this->getDoctrine()->getManager();
    	
        $deleteForm = $this->createDeleteForm($source->getId());    	
    	
        return $this->render('IfeAloesBundle:SpecificCompetence2:delAjaxSpecComp.html.twig', array(
            'entity' 		=> $source,
        	'parent'		=> $source->getGeneralCompetence(),
            'delete_form' 	=> $deleteForm->createView(),            
        ));
    	   
    }       
    
    
   /**
     * Deletes a GeneralObjective entity.
     *
     */
    public function deleteAction(Request $request, SpecificCompetence $entity)
    {
        $session = $request->getSession();       	
    	$selection = $session->get("selection");    	
    	
        $em = $this->getDoctrine()->getManager();
       
        $em->remove($entity);
        $em->flush();
        
	    $tab = array();	        
	    $tab['result'] = true;    
        
        $entities = $em->getRepository('IfeAloesBundle:GeneralCompetence')->findByProgram($entity->getProgram());        
        $weights = $em->getRepository('IfeAloesBundle:SpecificCompetence')->findWeightsByProgram($entity->getProgram()->getId(), $selection);     

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
            foreach ($cg->getSpecificCompetences() as $cs) 
        		{            
				$chgt = array();  
	            $chgt['key']		=$cs->getId();
	            $chgt['weight']		=$cs->weight*100; 
	            $chgt['type']		="SPE"; 
	            $chgts[$cpt++]=$chgt;            				
        		} 
        }      
        

        $tab['content'] = $chgts; 	          
        
        $tab['nb_spec'] = $entity->getGeneralCompetence()->getSpecificCompetences()->count();          	   	   
	
	    $response = new Response(json_encode($tab));
		$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
		return $response;   				
			
    }           
    
}
