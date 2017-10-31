<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Ife\AloesBundle\Entity\Course;
use Ife\AloesBundle\Form\NewCourse;
use Ife\AloesBundle\Form\EditCourse;
use Ife\AloesBundle\Form\InfosEditCourse;
use Ife\AloesBundle\Entity\Program;

/**
 * Course controller.
 *
 */
class CourseController extends Controller
{

    /**
     * Lists all Program entities.
     *
     */
    public function courspadAction(Course $course)
    {

        $em = $this->getDoctrine()->getManager();

        if (!$course) {
            throw $this->createNotFoundException('Unable to find Course entity.');
        }


        return $this->render('IfeAloesBundle:Course:courspad.html.twig', array(
            'course' => $course,
            'program' => $course->getProgram(),       
        	'menu'		   => 'pad'
        )); 
    }		
	

	private function cmpTitle($a, $b)
	{
	    return strcmp(strtolower ($a->getTitle()), strtolower ($b->getTitle()));
	}  
	
	private function cmpStatut($a, $b)
	{
	    return strcmp($a->getPublicationState(), $b->getPublicationState());
	}  

	private function cmpLabel($a, $b)
	{
	    return strcmp(strtolower ($a->getLabel()), strtolower ($b->getLabel()));
	}  
		
	private function cmpCredit($a, $b)
	{
	    return strcmp(strtolower ($a->getCredits()), strtolower ($b->getCredits()));
	}  
		
    /**
     * Lists all Course entities.
     *
     */
    public function indexAction(Program $program,$page,$sort,$direction)
    {
        $em = $this->getDoctrine()->getManager();
        
        $user = $this->get('security.context')->getToken()->getUser();          
        
  		if ($this->get('security.context')->isGranted('ROLE_ADMIN') === true)            
  			$entities = $em->getRepository('IfeAloesBundle:Course')->findAllByProgram($program,$page,$sort,$direction);    
  		else
  			{
  			$entities = $em->getRepository('IfeAloesBundle:Course')->findByProgramUser($program,$user,$page,$sort,$direction);        

			if ($sort=="c.publicationState")
				usort($entities, array($this, "cmpStatut"));     	
  			
			if ($sort=="c.label")
				usort($entities, array($this, "cmpLabel"));  		
  			
			if ($sort=="c.title")
				usort($entities, array($this, "cmpTitle"));  

			if ($sort=="c.credits")
				usort($entities, array($this, "cmpCredit"));  				
				
			if ($direction=="desc")	
				$entities = array_reverse($entities); 
  			} 
			
  			
		$paginator 		= $this->get('knp_paginator'); 	
		$pagination  	= $paginator->paginate($entities, $page,"25"); 
  			
  			
        return $this->render('IfeAloesBundle:Course:index.html.twig', array(
            'program' => $program,
            'pagination'   => $pagination,
        	'menu'	  => "programs_courses",
        	'page'		   => $page,
        	'sort'		   => $sort,
        	'direction'	   => $direction 
        ));
    }
    /**
     * Creates a new Course entity.
     *
     */
    public function createAction(Request $request, Program $program)
    {
        $entity = new Course();
        $form = $this->createCreateForm($entity, $program);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->setProgram($program);
            $em = $this->getDoctrine()->getManager();
            
	        $user = $this->get('security.context')->getToken()->getUser();            
            
            $entity->addRedacteur($user);            
             
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('programs_courses', array('id' => $program->getId())));
        }

        return $this->render('IfeAloesBundle:Course:new.html.twig', array(
            'program' => $program,
            'entity' => $entity,
            'form'   => $form->createView(),
        	'menu'	  => "programs_courses"
        ));
    }

    /**
     * Creates a form to create a Course entity.
     *
     * @param Course $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Course $entity, Program $program)
    {
        $form = $this->createForm(new NewCourse(), $entity, array(
            'action' => $this->generateUrl('programs_courses_create',array('id'=>$program->getId())),
            'method' => 'POST',
        ));
  
        $form->add('submit', 'submit', array('label' => 'Enregistrer','attr' => array('class' => "btn btn-success")));

        return $form; 
    }

    /**
     * Displays a form to create a new Course entity.
     *
     */
    public function newAction(Program $program)
    {
        $entity = new Course();
        $form   = $this->createCreateForm($entity, $program);

        return $this->render('IfeAloesBundle:Course:new.html.twig', array(
            'program' => $program,
            'entity' => $entity,
            'form'   => $form->createView(),
        	'menu'	  => "programs_courses"
        ));
    }

    /**
     * Finds and displays a Course entity.
     *
     */
    public function showAction(Course $course)
    {
        $em = $this->getDoctrine()->getManager();

        if (!$course) {
            throw $this->createNotFoundException('Unable to find Course entity.');
        }

         
        
        
        return $this->render('IfeAloesBundle:Course:show.html.twig', array(
            'course' => $course,
            'program' => $course->getProgram(),
        	'menu'	  => "programs_courses"
        ));
    }
    

    
    /**
     * Lists all Program entities.
     *
     */
    public function graphAction(Course $course)
    {
       $em = $this->getDoctrine()->getManager(); 
        
       $assessments 				= $em->getRepository('IfeAloesBundle:Course')->findListAssesment($course);

       $objectives 					= $em->getRepository('IfeAloesBundle:Course')->findListObjectives($course);
       
       $competences 				= $em->getRepository('IfeAloesBundle:Course')->findListCompetences($course);       
 
       $assessmentsObjectives 		= $em->getRepository('IfeAloesBundle:Course')->findAssessmentObjectiveWeight($course);           
       
       $objectivesCompetences 		= $em->getRepository('IfeAloesBundle:Course')->findObjectiveCompetenceWeight($course);  

       $assessementsCompetences 	= $em->getRepository('IfeAloesBundle:Course')->findAssessmentCompetenceWeight($course);  

       
        if (!$course) { 
            throw $this->createNotFoundException('Unable to find Course entity.');
        }

        return $this->render('IfeAloesBundle:Course:graph.html.twig', array(
            'course' 				=> $course, 
        	'menu'		   			=> 'course_graph',
        	'assessments'			=> $assessments,
        	'objectives'			=> $objectives,
        	'competences'			=> $competences,
        	'assessmentsObjectives'	=> $assessmentsObjectives,
        	'objectivesCompetences' => $objectivesCompetences,
        	'assessementsCompetences' => $assessementsCompetences
                
        )); 
    }	    
    
    
    /**
     * Finds and displays a Course entity.
     *
     */
    public function resumAction(Course $course,$param)
    {

    $user = $this->get('security.context')->getToken()->getUser();    	
    	
    if 	(
       			( $this->get('security.context')->isGranted('ROLE_ADMIN') 		  === true)  ||
       			( $this->get('security.context')->isGranted('ROLE_ENSEIGNANT')    === true && $course->isRedacteur($user->getId()) ) ||       			
       			( $this->get('security.context')->isGranted('ROLE_RESPONSABLE')   === true && $course->getProgram()->isResp($user->getId()) ) ||
       			( $course->getPublicationState()==1 )   	
    	)    	
    	{
        $em = $this->getDoctrine()->getManager();
        
        $genObj = $em->getRepository('IfeAloesBundle:GeneralObjective')->findByCourse($course);
        $weights = $em->getRepository('IfeAloesBundle:SpecificObjective')->findWeightsByCourse($course);
        
        foreach ($genObj as $entity)
        {
            $entity->setWeights($weights);
        }        
        
        $comp = $em->getRepository('IfeAloesBundle:GeneralCompetence')->findByProgram($course->getProgram());        
        $weights = $em->getRepository('IfeAloesBundle:SpecificCompetence')->findWeightsByProgram($course->getProgram()->getId(), array($course->getId()));        
        
        
       	foreach ($comp as $entity) 
        {
            $entity->setWeights($weights);
        }        
        
        
        $topics= $em->getRepository('IfeAloesBundle:Topic')->findByCourse($course,array('startDate' => 'ASC')); 

        $assessment = $em->getRepository('IfeAloesBundle:Assessment')->findByCourse($course);        
        
 
        
        return $this->render('IfeAloesBundle:Course:resum.html.twig', array(
            'course' 		=> $course,
        	'genObj'		=> $genObj,
        	'comp'			=> $comp,
        	'topics'		=> $topics,
        	'program' 		=> $course->getProgram(), 
        	'assessment'	=> $assessment, 
        	'menu'	  		=> "course_resum",
        	'param'			=> $param
        ));
        
    	}
    else
    	{
    	return $this->redirect($this->generateUrl('fos_user_security_login'));
    	}
    }   

    public function urlAction(Course $course)
    {
	$request = $this->getRequest();

	$param = "";
	
    $user = $this->get('security.context')->getToken()->getUser();    	
    	
    if 	(
       			( $this->get('security.context')->isGranted('ROLE_ADMIN') 		  === true)  ||
       			( $this->get('security.context')->isGranted('ROLE_ENSEIGNANT')    === true && $course->isRedacteur($user->getId()) ) ||       			
       			( $this->get('security.context')->isGranted('ROLE_RESPONSABLE')   === true && $course->getProgram()->isResp($user->getId()) ) ||
       			( $course->getPublicationState()==1 )   	
    	)    	
    	{
        $em = $this->getDoctrine()->getManager();
        
        if($request->isMethod('POST'))
    		{
	    	$form = $this->getUrlForm("");      			

	    	$form->bind($request);
    		if ($form->isValid()) 
    			{
    			$data = $form->getData();
    			$url = $data['url'];	
    			
    			$param =  implode("", $url);

    			}   
    		} 
    	else	
  			$form = $this->getUrlForm(); 	

        return $this->render('IfeAloesBundle:Course:url.html.twig', array(
   //       'pagination' => $pagination,
        	'menu'		    => 'course_url',
   			'form' 			=> $form->createView(),
        	'course'		=> $course,
        	'param'			=> $param   
        ));   		
  		
    	}
    }
    

    private function getUrlForm()
    {   					
	
    	$form = $this->createFormBuilder()

    	->add('url', 'choice', array(
    			'label'    => 'Partie(s) :',
    			'choices'  => array("0"=>"Présentation","1"=>"Description","2"=>"Objectifs d'apprentissages","3"=>"Référentiel de compétences","4"=>"Méthodes pédagogiques","5"=> "Calendrier","6"=> "Evaluations","7"=> "Ressources","8"=> "Réglements"),
    			'required' => true, 
    			'multiple' => true,    	
    			'expanded'=> true,  	 
    	))    	
 		
    	->getForm();
    	
    	return $form;    	
    }   
            
    
    
    /**
     * Finds and displays a Course entity.
     *
     */
    public function infos_showAction(Course $course)
    {
        $em = $this->getDoctrine()->getManager();

        if (!$course) {
            throw $this->createNotFoundException('Unable to find Course entity.');
        }

        return $this->render('IfeAloesBundle:Course:infos_show.html.twig', array(
            'course' => $course,
            'program' => $course->getProgram(),
        	'menu'	  => "infos_courses"
        ));
    } 
    
    
    /**
     * Displays a form to edit an existing Course entity.
     *
     */
    public function editAction($id,$from)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Course')->find($id);
 
         
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Course entity.');
        }

        $editForm = $this->createEditForm($entity,$from);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IfeAloesBundle:Course:edit.html.twig', array(
            'entity'      => $entity,
            'course'      => $entity,
        	'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
          	'program' 	  => $entity->getProgram(),
        	'menu'	      => "programs_courses",
        	'from'		  => $from
              
        
        ));
    }

    
    /**
     * Displays a form to edit an existing Course entity.
     *
     */
    public function infos_editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Course')->find($id);
 
         
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Course entity.');
        }

        $editForm = $this->create_infos_EditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IfeAloesBundle:Course:infos_edit.html.twig', array(
            'entity'      => $entity,
            'course'      => $entity,
        	'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
          	'program' 	  => $entity->getProgram(),
        	'menu'	  	  => "infos_courses"
              
        
        ));
    }   
    
    
    /**
    * Creates a form to edit a Course entity.
    *
    * @param Course $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Course $entity,$from)
    {
		$form = $this->createForm(new EditCourse($entity->getProgram(),$entity->getId()), $entity, array(
		    'attr' => array('class' => "form-inline"),
            'action' => $this->generateUrl('courses_update', array('id' => $entity->getId(), 'from'  => $from )),
            'method' => 'PUT', 
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer','attr' => array('class' => "btn btn-success")));

        return $form;
    }

    
    /**
    * Creates a form to edit a Course entity.
    *
    * @param Course $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function create_infos_EditForm(Course $entity)
    {
		$form = $this->createForm(new InfosEditCourse(), $entity, array(
//    	$form = $this->createForm(new NewCourse(), $entity, array(
            'action' => $this->generateUrl('courses_infos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
 
        $form->add('submit', 'submit', array('label' => 'Enregistrer','attr' => array('class' => "btn btn-success")));

        return $form;
    }    
    
    
    /**
     * Edits an existing Course entity.
     *
     */
    public function updateAction(Request $request, $id,$from)
    {
        $em = $this->getDoctrine()->getManager();
               

        $entities = $em->getRepository('IfeAloesBundle:Parcours')->findAll();   
        
        $entity = $em->getRepository('IfeAloesBundle:Course')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Course entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity,$from);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {  

		
			foreach ($entities as $parcour){ 
            	$parcour->getCours()->removeElement($entity);   
            	$em->flush();
			}	        	
		
        	foreach($entity->getParcours() as $parcours)
        		{ 
        		$parcours->addCours($entity);	
        		} 

 
            $em->flush();

            return $this->redirect($this->generateUrl('course_show', array('id' => $id)));
        }

        return $this->render('IfeAloesBundle:Course:edit.html.twig', array(
            'entity'      => $entity,
            'course'      => $entity,        
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        	'menu'	  => "programs_courses"
        ));
    }

    
    /**
     * Edits an existing Course entity.
     *
     */
    public function infos_updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Course')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Course entity.');
        }

        $editForm = $this->create_infos_EditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('course_infos_show', array('id' => $id)));
        }

        return $this->render('IfeAloesBundle:Course:infos_edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        	'menu'	  => "infos_courses"
        ));
    }    
    
    /*
     * Delete course entity.
     * 
     */ 
    public function delAction(Request $request, Course $source)
    {
    	$em = $this->getDoctrine()->getManager();
    	
    	$entity = $em->getRepository('IfeAloesBundle:Course')->find($source->getId());    	
    	
        $deleteForm = $this->createDeleteForm($source->getId());    	
    	
        return $this->render('IfeAloesBundle:Course:delAjaxCourse.html.twig', array(
            'entity' 		=> $entity, 
            'delete_form' => $deleteForm->createView(),            
        ));
    	  
    }          
    
    
    /**
     * Deletes a Course entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('IfeAloesBundle:Course')->find($id);
        
        foreach($entity->getObjectives() as $obj)
        	{
        	foreach($obj->getSpecificObjectives() as $spe)
        		{        		
        		$em->remove($spe);
        		}
        	$em->remove($obj);
        	}
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Course entity.');
        }
        
        $em->remove($entity);
        $em->flush();

        return $this->redirectToRoute('programs_courses', array('id' => $entity->getProgram()->getId()));
    }

     /**
     * Creates a form to delete a Curse entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(NULL, array ( 'attr' => array ( 'id' => 'formOGD' ) ) )
            ->setAction($this->generateUrl('courses_delete2', array('id' => $id)))
            ->add('delete', 'submit', array('label' => 'Oui','attr' => array ( 'class' => 'btn btn-color4' )))
            ->add('nodelete', 'submit', array('label' => 'Non','attr' => array ( 'class' => 'btn btn-inverse' )))
            ->getForm() 
        ;
    }   
    
    
    public function statutAction(Course $course)
    {

    $user = $this->get('security.context')->getToken()->getUser();    	
    	
    if 	(
       			( $this->get('security.context')->isGranted('ROLE_ADMIN') 		  === true)  ||
       			( $this->get('security.context')->isGranted('ROLE_ENSEIGNANT')    === true && $course->isRedacteur($user->getId()) ) ||       			
       			( $this->get('security.context')->isGranted('ROLE_RESPONSABLE')   === true && $course->getProgram()->isResp($user->getId()) )
 	
    	)    	
    	{
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('IfeAloesBundle:Course')->find($course->getId());
        
        if ( $entity->getPublicationState()=="0")
        	$entity->setPublicationState("1");
        	
        else if ($entity->getPublicationState()=="1")
        	$entity->setPublicationState("0");
       
        $em->flush();
               	
        
      	return $this->redirectToRoute('programs_courses', array('id' => $entity->getProgram()->getId()));
    	}
    }
    
    

    
    
}
