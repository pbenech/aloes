<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Ife\AloesBundle\Entity\Course;
use Ife\AloesBundle\Entity\Topic;
use Ife\AloesBundle\Form\Form1TopicType;
use Ife\AloesBundle\Form\Form3TopicType; 

use Ife\AloesBundle\Form\TopicType;
use Ife\AloesBundle\Form\Topic2Type;
use Ife\AloesBundle\Form\Topic3Type;
 
use \DateTime;
use \Time;
use \DateInterval;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Topic controller.
 */
class Topic2Controller extends Controller
{

    /**
     * Lists all Topic entities.
     *
     */
    public function indexAction(Course $course,$sequence)
    {

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IfeAloesBundle:Topic')->findAllByCourses($course);

     	$assessmentObjectives= $em->getRepository('IfeAloesBundle:Assessment')->findAssessmentObjectiveByCourse($course);
	
     	$objectiveCompetences= $em->getRepository('IfeAloesBundle:SpecificObjective')->findObjectiveCompetencefByCourse($course);
     	
     	
     	foreach ($assessmentObjectives as & $assesment)
     		{
     		foreach ($assesment as  & $obj)
     			{
     			if (isset ($objectiveCompetences[$obj['obj']]))
	     			$obj['competences']= $objectiveCompetences[$obj['obj']];	
     			}     		    				     		
     		}
     	
        	 
        return $this->render('IfeAloesBundle:Topic2:index.html.twig', array(
            'entities' 			  => $entities,
            'course' 			   => $course,
        	'menu'				   => 'course_assessment2',
        	'sequence'			   => $sequence,
        	'assessmentObjectives' => $assessmentObjectives
        ));
    }	


    /**
     * Creates a new Topic entity.
     *
     */ 
    public function create1Action(Request $request, Course $course,$init)
    {
    	$session = $request->getSession();	
    	
		if ($init==true)
			{
    		$array_dates 	= $session->set('dates',array());				
    		$default_lieu 	= $session->set('lieu',"");
    		$default_hdeb 	= $session->set('hdeb',null);    		
    		$default_hfin 	= $session->set('hfin',null);
    		$default_isFaceToFace = 1;    	
    		$session->set('isFaceToFace',$default_isFaceToFace); 

			}
		else 
			{
    		$array_dates 	= $session->get('dates');		
    		$default_lieu 	= $session->get('lieu');	
    		$default_hdeb 	= $session->get('hdeb');    		
    		$default_hfin 	= $session->get('hfin');  
    		$default_isFaceToFace 	= $session->get('isFaceToFace');  
			}
			
	   	$form   = $this->createForm(new Form1TopicType($default_lieu,$default_hdeb,$default_hfin,$default_isFaceToFace));
    	
        return $this->render('IfeAloesBundle:Topic2:form1.html.twig', array(            
        'course' 	 	=> $course,
        'program' 	 	=> $course->getProgram(),       
        'menu'		 	=> 'course_assessment',
		'form'   		=> $form->createView(),	        
        'array_dates'	=> $array_dates,     
        ));    	

    }    
    
    
    
    /**
     * Creates a new Topic entity.
     *
     */
    public function create2Action(Request $request, Course $course)
    {
    	$session = $request->getSession();	
    	    		    	
    	$array_dates = $session->get('dates');	

    	// Valid FORM1
    	$form1 = $request->request->get("aloes_topic_form1");    
    	
    	if ($form1)
    		{
    		$default_lieu = $form1["lieu"];
     		$session->set('lieu',$default_lieu);	
     		  
    		$default_hdeb = $form1["hdeb"];
     		$session->set('hdeb',$default_hdeb);
     		
    		$default_hfin = $form1["hfin"];
     		$session->set('hfin',$default_hfin);     		

    		$default_isFaceToFace = $form1["isFaceToFace"];
     		$session->set('isFaceToFace',$default_isFaceToFace);    		
    		
    		}

    	// Valid FORM3     		
    	$form3 = $request->request->get('aloes_topic_form3');	
    	if ($form3)
    		{
    		if (isset($form3["topics"]))
	    		{
	    		$forms = $form3["topics"];		    		
	    		    		
					for($k = 0; $k < sizeof($array_dates); $k++){
						
					    	for($i = 0; $i < sizeof($forms); $i++){
					    		if ( $array_dates[$k]['fc']== $forms[$i]['fc'])
									{			    		
		    		    			$array_dates[$i]['title']=	$forms[$i]['title'];
		    		    			$array_dates[$i]['place']=	$forms[$i]['place'];
		    		    			$array_dates[$i]['hdeb']=	$forms[$i]['hdeb'];
		    		    			$array_dates[$i]['hfin']=	$forms[$i]['hfin'];
									$array_dates[$i]['isFaceToFace']=	$forms[$i]['isFaceToFace'];
									}
		    				}							
					}	    		 
	    		}	
    		}	 
    		
    		
		// TRI	
		for($k = 0; $k < sizeof($array_dates); $k++){
	    	$d1b = $array_dates[$k]['start'];
			$d2b = new DateTime($d1b);   
			$array_dates[$k]['timestamp']= $d2b->getTimestamp();		
			}	
			
		usort($array_dates, function($a, $b) {return $a['timestamp'] -  $b['timestamp'];});		
	    $session->set('dates',$array_dates);    		


        return $this->render('IfeAloesBundle:Topic2:form2.html.twig', array(            
        'course' 	 	=> $course,
        'program' 	 	=> $course->getProgram(),       
        'menu'		 	=> 'course_assessment',
        'array_dates'	=> $array_dates
        ));    	

    }


    /**
     * Creates a new Topic entity.
     *
     */
    public function create3Action(Request $request, Course $course)
    {
    $session 		= $request->getSession();	
    $current_dates 	= $session->get('dates');		

    $default_lieu = $session->get('lieu');	    
    $default_hdeb = $session->get('hdeb');	    
    $default_hfin = $session->get('hfin');      
    $default_isFaceToFace = $session->get('isFaceToFace');    

	$array_dates = array();
	
	foreach($_REQUEST as $key => $val)
		{	
		$_key= explode("__",$key);	
		$array_dates[$_key[0]][$_key[1]]=$val;			
		}

	for($k = 0; $k < sizeof($array_dates); $k++){
		
			for($m = 0; $m < sizeof($current_dates); $m++){
				if ( $array_dates[$k]['fc']== $current_dates[$m]['fc'])
					{
				    if (isset($current_dates[$k]['title'] ))	
						$array_dates[$k]['title']= $current_dates[$m]['title'];
					else 
						$array_dates[$k]['title']= "";			
						
				    if (isset($current_dates[$k]['place']) && $current_dates[$m]['place']!="" )
						$array_dates[$k]['place']= $current_dates[$m]['place'];
					else
						$array_dates[$k]['place']= $default_lieu;	
						
				    if (isset($current_dates[$k]['hdeb']) && $current_dates[$m]['hdeb']!="" )
						$array_dates[$k]['hdeb']= $current_dates[$m]['hdeb'];
					else
						$array_dates[$k]['hdeb']= $default_hdeb;	
						
				    if (isset($current_dates[$k]['hfin']) && $current_dates[$m]['hfin']!="" )
						$array_dates[$k]['hfin']= $current_dates[$m]['hfin'];
					else
						$array_dates[$k]['hfin']= $default_hfin; 							

						
				    if (isset($current_dates[$k]['isFaceToFace']) && $current_dates[$m]['isFaceToFace']!="" )
						$array_dates[$k]['isFaceToFace']= $current_dates[$m]['isFaceToFace'];
					else
						$array_dates[$k]['isFaceToFace']= $default_isFaceToFace; 						
						
					}
  
			}
	}		
		
		
	// TRI	
	for($k = 0; $k < sizeof($array_dates); $k++){
    	$d1b = $array_dates[$k]['start'];
		$d2b = new DateTime($d1b);   
		$array_dates[$k]['timestamp']= $d2b->getTimestamp();		
		}	
		
	usort($array_dates, function($a, $b) {return $a['timestamp'] -  $b['timestamp'];});		
    $session->set('dates',$array_dates);

	$c = new ArrayCollection();
         
    for($i = 0; $i < sizeof($array_dates); $i++){
    	$tp = new Topic();
    	$tp->setTitle("");
  	 
    	$tp->setFc($array_dates[$i]['fc']);    	 
    	
		$tp->setTitle($array_dates[$i]['title']);  	
		
		if (isset($array_dates[$i]['place']))		
			$tp->setPlace($array_dates[$i]['place']);   
		else
			$tp->setPlace($default_lieu);  		

		if (isset($array_dates[$i]['hdeb']))		
			$tp->setHdeb($array_dates[$i]['hdeb']);   
		else
			$tp->setHdeb($default_hdeb);  

		if (isset($array_dates[$i]['hfin']))		
			$tp->setHfin($array_dates[$i]['hfin']);   
		else
			$tp->setHfin($default_hfin);  			


		if (isset($array_dates[$i]['isFaceToFace']))		
			$tp->setIsFaceToFace($array_dates[$i]['isFaceToFace']);   
		else
			$tp->setIsFaceToFace($default_isFaceToFace);  				
			
			
    	$d1a = $array_dates[$i]['start'];
		$d2a = new DateTime($d1a);
	   	$tp->setStartDate($d2a);
	   	
	   	if($array_dates[$i]['end'] !=null)
	   		{
    		$d1b = $array_dates[$i]['end'];
			$d2b = new DateTime($d1b);
			$d2b->sub(new DateInterval('P1D'));
	   		$tp->setEndDate($d2b);	   	 	   	
	   		}
	
	   		
    	$c->add($tp); 
    } 
    
	$form   = $this->createForm(new Form3TopicType($c),$course);    
    
    return $this->render('IfeAloesBundle:Topic2:form3.html.twig', array(            
        'course' 	 	=> $course,
        'program' 	 	=> $course->getProgram(),       
        'menu'		 	=> 'course_assessment',
		'form'   		=> $form->createView(),	      
        'array_dates'	=> $array_dates
        ));    	

    }    
     
    /**
     * Creates a new Topic entity. 
     *
     */
    public function create4Action(Request $request, Course $course)
    {
    $session = $request->getSession();	
        	
	$c = new ArrayCollection();
         
	$array = $request->request->get('aloes_topic_form3');	

    $em = $this->getDoctrine()->getManager();	
	
    foreach($array['topics'] as $topic)
		{
			
		$top = new Topic();
		$top->setTitle($topic['title']);
		
		$top->setCourse($course);		
		
		$top->setPlace($topic['place']);
		
		$startDate = $topic['startDate'];				
		$day 	= $topic['startDate']['date']['day'];
		$month 	= $topic['startDate']['date']['month'];
		$year 	= $topic['startDate']['date']['year'];
		$deb = $day."-".$month."-".$year;		
		$deb = new DateTime($deb);		

	
		$hdeb = $topic['hdeb'];
		$hour = $topic['hdeb']['hour'];
		$min  = $topic['hdeb']['minute'];
		$hdeb = new DateTime(); 
		$deb->setTime($hour,$min,'00');				
		
		$top->setStartDate($deb);
		
		$endDate = $topic['endDate'];
		$day 	= $topic['endDate']['date']['day'];
		$month 	= $topic['endDate']['date']['month'];
		$year 	= $topic['endDate']['date']['year'];
		$fin = $day."-".$month."-".$year;
		$fin = new DateTime($fin);		
		
		$hdeb = $topic['hfin'];
		$hour = $topic['hfin']['hour'];
		$min  = $topic['hfin']['minute'];
		$hfin = new DateTime(); 
		$fin->setTime($hour,$min,'00');				
		
		$top->setEndDate($fin);

		$top->setIsFaceToFace($topic['isFaceToFace']);		
		
		$em->persist($top);
    	$em->flush();        				
		}
    
	return $this->redirect($this->generateUrl('course_assessment2', array('id' => $course->getId())));
    
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
            ->setAction($this->generateUrl('topic_delete2', array('id' => $id)))
            ->add('delete', 'submit', array('label' => 'Oui','attr' => array ( 'class' => 'btn btn-color1' )))
            ->add('nodelete', 'submit', array('label' => 'Non','attr' => array ( 'class' => 'btn btn-inverse' )))
            ->getForm() 
        ;
    }    
    
    
    
    /**
     * Creates a new GeneralObjective entity.
     *
     */ 
    public function delAction(Request $request, Topic $source)
    {
    	$em = $this->getDoctrine()->getManager();
    	
    	$entity = $em->getRepository('IfeAloesBundle:Topic')->find($source->getId());    	
    	
        $deleteForm = $this->createDeleteForm($source->getId());    	
    	
        return $this->render('IfeAloesBundle:Topic2:delAjaxTopic.html.twig', array(
            'entity' 		=> $entity,
            'delete_form' => $deleteForm->createView(),            
        ));
    	  
    }         
    
    
    
    /**
     * Deletes a GeneralObjective entity.
     *
     */
    public function deleteAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Topic')->find($id);    	   	        

        foreach($entity->getAssessments() as $asses) {
        	$em->remove($asses);       
        } 

        foreach($entity->getEvents() as $evts) {
        	$em->remove($evts);       
        }         
        
        $em->remove($entity);
        $em->flush();
        
	    $tab = array();	        
	    $tab['result'] = true;    

	    $total= $em->getRepository('IfeAloesBundle:Assessment')->getCourseAssessmentWeight($entity->getCourse()->getId());
	    $tab['sum']  =  $total*100;	    
        
	    $response = new Response(json_encode($tab));
		$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
		return $response;   				
			
    }      
    
    
    /**
     * Creates a form to create a Topic entity.
     *
     * @param Topic $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Topic $entity)
    {
        
        
        $form = $this->createForm(new Topic3Type(), $entity, array(
            'action' => "",
            'method' => 'POST',
        )); 
  
//        $form->add('submit', 'submit', array('label' => 'Enregistrer' ));
 
        return $form;        
        
        
    }     
    
    /**
     * Creates a new GeneralObjective entity.
     *
     */ 
    public function editAction(Request $request, Topic $source)
    {
    	$em = $this->getDoctrine()->getManager();
    	
    	$entity = $em->getRepository('IfeAloesBundle:Topic')->find($source->getId());    	
    	
        $form   = $this->createCreateForm($entity); 
        
        return $this->render('IfeAloesBundle:Topic2:newAjaxTopic.html.twig', array(
            'entity' 		=> $entity,
            'form'   		=> $form->createView(),
        	'type'		=> 'update'        
        ));
    	  
    }     

    
   public function updateAction(Request $request, Topic $source)
    {
    	$em = $this->getDoctrine()->getManager();
    	
    	
    	$entity = $em->getRepository('IfeAloesBundle:Topic')->find($source->getId());    	

  	    $request = $this->getRequest();    	
 
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);  	
    			 
        if ($form->isValid()) {
        	$em = $this->getDoctrine()->getManager();
        	  
            $em->persist($entity);
            $em->flush();        	  

	        $tab = array();
	        
	        $tab['result'] = true;
	        
	        $result =   $this->renderView('IfeAloesBundle:Topic2:TO_XX_A.html.twig', array(
	            'parent' 		=> $entity,
	        	'course'		=> $source->getCourse(),
	        	'type'		=> 'update'        
	        ));
	         
	        $tab['content'] = $result;         	         	           

	        
	        $result =   $this->renderView('IfeAloesBundle:Topic2:TO_XX_R.html.twig', array(
	            'parent' 		=> $entity,   
	        ));
	         	        
	        $tab['view'] = $result;   
	        
	        $response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;           
        	} 
		else 	
			{			
	        $tab = array();
	        
	        $tab['result'] = false;
	                
       		$result 	=    $this->renderView('IfeAloesBundle:Topic2:newAjaxTopic.html.twig', array(
            'entity' 		=> $entity,
            'form'   		=> $form->createView(),
        	'type'		=> 'update'        
        	));	        
	        
	        $tab['content'] = $result;         	         	           
	
	        $response = new Response(json_encode($tab));
			$response->headers->set('Content-Type', 'application/json; charset=UTF-8');
			return $response;   				
			
			}
        
      
  
    }            
    
    
}
