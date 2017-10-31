<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ife\AloesBundle\Entity\Course;
use Ife\AloesBundle\Entity\Program;
use Ife\AloesBundle\Entity\GeneralCompetence;
use Ife\AloesBundle\Entity\Categorie;

use Ife\AloesBundle\Form\ProgramCompetencesType; 
use Ife\AloesBundle\Form\GeneralCompetence2Type; 
use Symfony\Component\HttpFoundation\Response;

/**
 * GeneralCompetence controller.
 *
 */
class GeneralCompetence2Controller extends Controller
{

    /**
     * Lists all GeneralCompetence entities at the course.
     *
     */
    public function coursAction(Request $request, Program $program,$selection)
    {
        $em = $this->getDoctrine()->getManager();     

        $entities = $em->getRepository('IfeAloesBundle:GeneralCompetence')->findByProgram($program);
   //     $selection = $this->getSelectionFromRequest($request);
        
         
        $courses = $em->getRepository('IfeAloesBundle:Course')->findByProgram($program);
        $course = $em->getRepository('IfeAloesBundle:Course')->find($selection);
        
        $weights = $em->getRepository('IfeAloesBundle:SpecificCompetence')->findWeightsByProgram($program->getId(), array($selection));


        foreach ($entities as $entity) 
        {
            $entity->setWeights($weights);
        }
        
        return $this->render('IfeAloesBundle:GeneralCompetence2:cours.html.twig', array(
            'program' => $program,
            'entities' => $entities,
            'courses' => $courses,
            'course' => $course,
        	'selection' => $selection,
        	'menu'	=> "competence_assessment"
          
        ));
    }		
	
	
    /** 
     * Displays a form to create a new GeneralObjective entity.
     *
     */
    public function newAction(Program $program)
    {     	 
        $entity = new GeneralCompetence();
        $entity->setProgram($program);        
           	    
        $form   = $this->createCreateForm($entity);

        return $this->render('IfeAloesBundle:GeneralCompetence2:newAjaxComp.html.twig', array(
            'entity' 	=> $entity,
            'program' 	=> $program,
			'type' 	=> 'new',  
        	'form'   	=> $form->createView(),  
        ));
        
    }
    	 
	
    /**
     * Creates a form to create a GeneralObjective entity.
     *
     * @param GeneralObjective $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(GeneralCompetence $entity)
    { 
        $form = $this->createForm(new GeneralCompetence2Type(), $entity, array(
            'action' => "",
            'method' => 'POST',
        ));
 
        return $form;
    }     
    
	
    private function getSelectionFromRequest(Request $request)
    {
        return array_keys($request->request->get('courses', array()));
    }
    
    /**
     * Lists all GeneralCompetence entities at the program level.
     *
     */
    public function indexAction(Request $request, Program $program)
    {
        $session = $request->getSession();
        
    	$em = $this->getDoctrine()->getManager();                
            
        $entities = $em->getRepository('IfeAloesBundle:GeneralCompetence')->findByProgram($program);
        $selection = $this->getSelectionFromRequest($request);
        $session->set("selection",$selection);
     

        $courses = $em->getRepository('IfeAloesBundle:Course')->findByProgram($program);        
        $weights = $em->getRepository('IfeAloesBundle:SpecificCompetence')->findWeightsByProgram($program->getId(), $selection);     
      
        foreach ($entities as $entity) 
        	{
            $entity->setWeights($weights);

        	} 
        
        return $this->render('IfeAloesBundle:GeneralCompetence2:index.html.twig', array(
        
            'program' 	=> $program,
            'entities' 	=> $entities,
            'courses' 	=> 	$courses,
            'selection' => $selection,
        	'menu'		=> "program_competences2" 
        ));
    }
	
    
    /**
     * Creates a new GeneralObjective entity.
     *
     */
    public function createAction(Request $request,Program $program)
    {  
    	    	
        $entity = new GeneralCompetence();
        
        $entity->setProgram($program);       
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        
        if ($form->isValid() ) 
        	{ 
         	$entity->setProgram($program);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush(); 

        	$tab = array();
        	$tab['result'] = true;  
        	               	
        	$result = $this->renderView('IfeAloesBundle:GeneralCompetence2:addAjaxComp.html.twig', array(
            	'parent' 					=> $entity, 
        		'type'	 					=> 'new',   
        		'program'					=> $program      	 
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
        	
        	$result = $this->renderView('IfeAloesBundle:GeneralCompetence2:newAjaxComp.html.twig', array(
            	'entity'  => $entity,
	            'program' 	=> $program,        	
        		'type'	  => 'new',   
        		'message' => 'erreur',  
        		'form'    => $form->createView(),  
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
    public function editAction(Request $request, GeneralCompetence $source)
    {
    	$em = $this->getDoctrine()->getManager();
    	   	
        $form   = $this->createCreateForm($source); 
        
        return $this->render('IfeAloesBundle:GeneralCompetence2:newAjaxComp.html.twig', array(
            'entity' 		=> $source,
            'form'   		=> $form->createView(),
        	'type'			=> 'update'        
        ));
    	  
    }       
    
    
    /**
     * Creates a new GeneralObjective entity.
     *
     */ 
    public function updateAction(Request $request, GeneralCompetence $entity)
    {
    	$em = $this->getDoctrine()->getManager();
    	  	
    		    
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);  	

        
        if ($form->isValid()) {
        	
            $em->persist($entity); 
            $em->flush();        	  

	        $tab = array();
	        
	        $tab['result'] = true;

	        $tab['content'] = $entity->getTitle();         	         	           

	        $tab['categorie'] ="";
	        foreach ($entity->getCategories() as $cat)
	        	{
	        	$tab['categorie'] = $cat->getTitle();
	        	}
	        
	        $response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;           
        	} 
		else 	
			{			
	        $tab = array();
	        
	        $tab['result'] = false;
	                
       		$result 	    =    $this->renderView('IfeAloesBundle:GeneralCompetence2:newAjaxComp.html.twig', array(
            'entity' 		=> $entity,
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
     * Creates a new GeneralObjective entity.
     *
     */ 
    public function delAction(Request $request, GeneralCompetence $source)
    {
    	$em = $this->getDoctrine()->getManager();   	
    	
        $deleteForm = $this->createDeleteForm($source->getId());    	
    	
        return $this->render('IfeAloesBundle:GeneralCompetence2:delAjaxComp.html.twig', array(
            'entity' 		=> $source,
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
            ->setAction($this->generateUrl('program_competences_delete2', array('id' => $id)))
            ->add('delete', 'submit', array('label' => 'Oui','attr' => array ( 'class' => 'btn btn-color1' ))) 
            ->add('nodelete', 'submit', array('label' => 'Non','attr' => array ( 'class' => 'btn btn-inverse' )))
            ->getForm() 
        ; 
    }    
    
    
    
    
    /**
     * Deletes a GeneralObjective entity.
     *
     */
    public function deleteAction(Request $request,GeneralCompetence $source)
    {
        $session = $request->getSession();       	
    	$selection = $session->get("selection");    	
    	
        $em = $this->getDoctrine()->getManager();

       // $entity = $em->getRepository('IfeAloesBundle:GeneralCompetence')->find($source);    	
        
        $em->remove($source);
        $em->flush();
        
	    $tab = array();	        
	    $tab['result'] = true;    

	    $entities = $em->getRepository('IfeAloesBundle:GeneralCompetence')->findByProgram($source->getProgram());        
        $weights = $em->getRepository('IfeAloesBundle:SpecificCompetence')->findWeightsByProgram($source->getProgram()->getId(), $selection);     

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
         
	    $response = new Response(json_encode($tab));
		$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
		return $response;   				
			
    }     

    
   public function orderAction(Request $request,Program $program)
    {
        $session = $request->getSession();       	
    	$selection = $session->get("selection");        	
    	
    	$request = $this->getRequest();

        $em = $this->getDoctrine()->getManager();    	

        $repository_general 	= $em->getRepository('IfeAloesBundle:GeneralCompetence');         
        $repository_specific 	= $em->getRepository('IfeAloesBundle:SpecificCompetence');       	
    	
    	$data = $request->request->all();      
  	
    	$og =  str_replace("sortable", "", $data['sortable']);

    	$i=0;   
    			    	
    	foreach ($data as $key => $val) 
    		{
    		if ($key!="sortable")
		 		{
    			//echo "#key=".$key."#"."<br/";
    			$i=0;   			
    			foreach ($val as $key2 => $val2) 
    			{   
    				//echo "#key2=".$key2."#";
    				//echo "#val2=".$val2."#<br/>"; 

			        $genComp = $repository_general->find($og);    
				
	    			// Positionnement objectif specifique	
			        $specComp = $repository_specific->find($val2);    			
		                
			        $specComp->setPosition($i++);       			 	        	  
		
			        $specComp->setGeneralCompetence($genComp); 	    			
					$em->persist($specComp);
	    			    							
	    			$em->flush();     
					    													
		 			}		 			
    			}			    			
    		}    	    		
    		
	        $tab = array();
	        
	        $tab['result'] = true;       	         	           
	 
			$result = array();	
			$result['key']= $og;    

			$result['size']= $i;  
			
	        $entities = $em->getRepository('IfeAloesBundle:GeneralCompetence')->findByProgram($genComp->getProgram());        
	        $weights = $em->getRepository('IfeAloesBundle:SpecificCompetence')->findWeightsByProgram($genComp->getProgram()->getId(), $selection);     
	
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
        
 
			$result['order']= $chgts; 			
			
        	$tab['content'] = $result; 	          			
			
        
	        
	        $response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;           
    	
    }   

    /**
    * Creates a form to edit a Program entity.
    *
    * @param Program $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Program $entity)
    {
        $form = $this->createForm(new ProgramCompetencesType(), $entity, array(

        ));


        return $form;
    }    
    

    /**
     * Displays a form to edit an existing Program entity.
     *
     */
    public function edit_competencesAction(Program $program)
    {
    	
        $form = $this->createEditForm($program);

        return $this->render('IfeAloesBundle:Program:edit_competences.html.twig', array(
            'program'       => $program,
            'form'     		=> $form->createView(),
        	'menu'		    => 'programs_show'
        
        ));
    }
    
    
    /**
     * Creates a new GeneralObjective entity.
     *
     */ 
    public function update_competencesAction(Request $request, Program $entity)
    {
    	
    	$em = $this->getDoctrine()->getManager(); 	  	   		    
    		
        $form = $this->createEditForm($entity);             
        $form->handleRequest($request);  	

        
        if ($form->isValid()) {
        	
            $em->persist($entity); 
            $em->flush();        	  

	        $tab = array();
	        
	        $tab['result'] = true;

	        $tab['content'] = $entity->getCompetences();         	         	           
	        
	        $response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;           
        	} 
		else 	
			{		

				
	        $tab = array();
	        
	        $tab['result'] = false;
        	
        	$result 	    =    $this->renderView('IfeAloesBundle:Program:edit_competences.html.twig', array(
            'program'       => $program,
            'form'     => $form->createView(),
        	'menu'		    => 'programs_show'
        
       		 ));        	
        	
	        $tab['content'] = $result;         	         	           
	
	        $response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;   				
			
			}
        
      
  
    }     
    
    
    
}
