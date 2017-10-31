<?php

namespace Ife\AloesBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;


use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IFE\AloesBundle\Entity\Course;
use IFE\AloesBundle\Entity\Program;
use IFE\AloesBundle\Entity\Categorie;
use IFE\AloesBundle\Entity\GeneralCompetence;
use Ife\AloesBundle\Form\TableauxType; 

class TableauxController extends Controller
{
	public function indexAction($niv,$program,$course)
	{ 		
		
 	    $request = $this->getRequest();
   	    $session = $request->getSession();       	

        $em = $this->getDoctrine()->getEntityManager();     	    
   	    
        $form   = $this->createCreateForm();  
        
        if ($niv==0)
        	$parent_template_var = 'IfeAloesBundle:Public:layout.html.twig' ;
        else if ($niv==1)
        	$parent_template_var = 'IfeAloesBundle:Aloes:layout.html.twig' ;
        else if ($niv==2)
        	$parent_template_var = 'IfeAloesBundle:Program:layout.html.twig' ;        	
        else if ($niv==3)
        	$parent_template_var = 'IfeAloesBundle:Course:layout.html.twig' ;    
        	
	    if ($niv==3)       
        	{
			$course = $em->getRepository('IfeAloesBundle:Course')-> find($course);
        		
	        return $this->render('IfeAloesBundle:Tableaux:index.html.twig', 
   		     array("menu" 				=> 'tableaux',
        	  'parent_template_var' => $parent_template_var,
        	  'course'				=> $course,
        	  'program'				=> $course->getProgram(),
   		      'niveau'				=> $niv,	
              'form'   				=> $form->createView(),)); 	  
   		     
        	}        	
        else if ($niv==2)       
        	{
			$program = $em->getRepository('IfeAloesBundle:Program')-> find($program);
        		
	        return $this->render('IfeAloesBundle:Tableaux:index.html.twig', 
   		     array("menu" 				=> 'tableaux',
        	  'parent_template_var' => $parent_template_var,
        	  'program'				=> $program,
        	  'niveau'				=> $niv,	
              'form'   				=> $form->createView(),)); 	  
   		     
        	}
   		else
	        return $this->render('IfeAloesBundle:Tableaux:index.html.twig', 
   		     array("menu" 				=> 'tableaux',
        	  'parent_template_var' => $parent_template_var,
        	  'niveau'				=> $niv,	
              'form'   				=> $form->createView(),)); 	    		  
	}
	
    /**
     * Creates a form  
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm()
    {  
    	         
        $form = $this->createForm(new TableauxType(), null, array(
            'action' => "", 
            'method' => 'POST',
        ));



        return $form;
    }   	
	
	

	public function programsAction($niv)
	{ 		
     	$request = $this->getRequest();
        $em = $this->getDoctrine()->getEntityManager();  
      
	  	$json_parcours 	= array();        
	  	$json_courses 	= array();   
	  	$json_semestre 	= array(); 
	  	
        if($request->isXmlHttpRequest()) 
        {
            $program = '';
            $program = $request->request->get('id');
               
            
            if ($program != null)
            {         
                $parcours = $em->getRepository('IfeAloesBundle:Parcours')-> findBy(array('program' => $program));

                foreach ($parcours as $parcour) 
			        {
			        $json_parcours[$parcour->getId()][] = $parcour->getTitle();			        	
			        } 			        

	          			        
            	if( $this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY') )
            			{
    	         		$courses = $em->getRepository('IfeAloesBundle:Course')->findBy(array('program' => $program), array('label' => 'ASC'));	            				
						}	
				else				        
             		$courses = $em->getRepository('IfeAloesBundle:Course')-> findBy(array('program' => $program,"publicationState"=>1), array('label' => 'ASC'));
     		
 		       	$cpt = 0;	
                foreach ($courses as $data) 
			        {		        	
			     	$couple=array();
			        $couple['id'] 		= $data->getId();
			        $couple['label'] 	= $data->getLabel();			        			        	
			     	$json_courses[$cpt++] = $couple;				        	
			        } 				        
			        
		        $semestres = $em->getRepository('IfeAloesBundle:Course')-> findBySemestre($program);
		        
 		       	$cpt = 0;	
                foreach ($semestres as $data) 
			        {		        	
			     	$couple=array();
			        $couple['id'] 		= $data['id'];
			        $couple['label'] 	= $data['title'];			        			        	
			     	$json_semestre[$cpt++] = $couple;				        	
			        } 			        
			        
                $response = new Response();
                $result = json_encode(array('parcours' => $json_parcours,'ue' => $json_courses,"semestres"=>$json_semestre));
                
                $response->headers->set('Content-Type', 'application/json');
                $response->setContent($result);
                return $response;
            }
  
		}    
	}

	
	public function filtreAction()
	{ 		
     	$request = $this->getRequest();
        $em = $this->getDoctrine()->getEntityManager();     
        
        $parameters = $request->request->get("aloes_tableaux");
        

		$array_selected = array();
		if (isset($parameters["ue"]))
			{
			foreach ($parameters["ue"]	as $value){
				array_push($array_selected,$value);
			}
			}

        	   
	  	$json_courses 	= array();   
	  	
        if($request->isXmlHttpRequest()) 
        {
        		$array_semestres 		= array();
        		$array_parcours 		= array();   

        		if (isset($parameters['semestres']))
        			$array_semestres 	= $parameters['semestres'];
        		if (isset($parameters['parcours']))
        			$array_parcours 	= $parameters['parcours'];        			
        			
        	

              	$datas = $em->getRepository('IfeAloesBundle:Course')->findByFiltre($parameters['programs'],$array_parcours,$array_semestres);
  		       		
 		       	$cpt = 0;	
                foreach ($datas as $data) 
			        {		        	
			     	$couple=array();
			        $couple['id'] 		= $data['id'];
			        $couple['label'] 	= $data['label'];
			        if (in_array ($data['id'], $array_selected))	
			        	$couple['checked'] 	= "checked";	
			        else
			        	$couple['checked'] 	= "";				        		        			        	
			     	$json_courses[$cpt++] = $couple;				        	
			        } 				        			        
 			        
			        
                $response = new Response();
                $result = json_encode(array('ue' => $json_courses));
                
                $response->headers->set('Content-Type', 'application/json');
                $response->setContent($result);
                return $response;
            }
  
	}	

	
	public function rapportAction()
	{ 		   
		$em = $this->getDoctrine()->getManager();	
		
     	$request = $this->getRequest();
        $em = $this->getDoctrine()->getEntityManager();     
        
        $parameters = $request->request->get("aloes_tableaux");        
        
        $msg = "";
     
        if (!isset($parameters['champs']))
			$msg = $msg."Sélectionner un ou plusieurs champs<br/>";
        if (!isset($parameters['ue']) && $parameters['rapports'][0]!="0")
			$msg = $msg."Sélectionner une ou plusieurs UE<br/>";        
        
		if ($msg!="") 
			{	
        	return $this->render('IfeAloesBundle:Tableaux:error.html.twig', 
        	array("menu" => 'tableaux',"msg" => $msg)); 	        
			}
			
			
			
		if ($parameters['rapports'][0]=="0")
			{ 
			$program = $parameters['programs'][0];		
			
		    $program = $em->getRepository('IfeAloesBundle:Program')->find($program);		    
		   	$courses = $em->getRepository('IfeAloesBundle:Course')->findByProgram($program,array('isOptional' => "ASC" , 'label' => "ASC" ));
				
        	return $this->render('IfeAloesBundle:Tableaux:program.html.twig', 
        						 array("program" => $program, "courses" => $courses )); 	
        						 	    
			}
		else if ($parameters['rapports'][0]=="1")
			{ 
			$liste_cours 	= array();
			
			$cpt = 0;
			foreach ($parameters['ue'] as $ue)
				{
					
				$cours = array();	
					
				$course = $em->getRepository('IfeAloesBundle:Course')->find($ue);					
				
		        $genObj = $em->getRepository('IfeAloesBundle:GeneralObjective')->findByCourse($course);
		        $weights = $em->getRepository('IfeAloesBundle:SpecificObjective')->findWeightsByCourse($course);
		        
		        foreach ($genObj as $entity1)
		        {
		            $entity1->setWeights($weights);
		        }        

		        
		        $comp = $em->getRepository('IfeAloesBundle:GeneralCompetence')->findByProgram($course->getProgram());   	    	        
		        
		        $weights2 = $em->getRepository('IfeAloesBundle:SpecificCompetence')->findWeightsByProgram($course->getProgram()->getId(), array($ue));        

		        $compClone =  array() ;
		        
		       	foreach ($comp as $entity2) 
		        {		  
		        	$css = $entity2->getChildren();
		        	
		        	$cssClone =  array() ;
		        			
		        	foreach ($css as $entity3) 
		        		{
		        		$csClone = clone $entity3; 	
		        		array_push($cssClone, $csClone);
		        		}	
		        	
		        	
		        	$cgClone = clone $entity2;
		        	$cgClone->setSpecificCompetences($cssClone);	
	        	
//		            $entity2->setWeights($weights2); 
		            $cgClone->setWeights($weights2); 
		            array_push($compClone, $cgClone);
		        }    		        

		        
		        $colors =  array() ;		        
		        
		        $topics= $em->getRepository('IfeAloesBundle:Topic')->findByCourse($course,array('startDate' => 'ASC'));
		       	
		        foreach ($topics as $topic) 
		        	{	
					foreach($topic->getTypologies() as $typo)
						{
						$colors[$typo->getTitle()]=$this->get_random_color();
						}		        		
		        	}
		        
		        $assessments = $em->getRepository('IfeAloesBundle:Assessment')->findByCourse($course);    

						       	
		        foreach ($assessments as $assessment) 
		        	{	
					foreach($assessment->getTypologies() as $typo)
						{
						$colors[$typo->getTitle()]=$this->get_random_color();
						}		        		
		        	}		        
		        	        
		        $cours["cours"]			= $course;
		        $cours["genObj"]		= $genObj;		        
		        $cours["comp"]			= $compClone;	
		        $cours["topics"]		= $topics;			        
		        $cours["assessments"]	= $assessments;	
		        $cours["colors"]	    = $colors;
		        $cours["champs"]		= $parameters['champs'];	
 	        		        
				$liste_cours[$cpt++]=$cours;

				}
				
        	return $this->render('IfeAloesBundle:Tableaux:resums.html.twig', 
        						 array("liste_cours" => $liste_cours)); 
			}
				
		else if ($parameters['rapports'][0]=="2")
			{ 
			    $em = $this->getDoctrine()->getManager();     
			    
			    $program = $parameters['programs'][0];

		        $entities = $em->getRepository('IfeAloesBundle:GeneralCompetence')->findByProgram($program);

		        $courses = $em->getRepository('IfeAloesBundle:Course')->findByProgram($program);
		        
		        $weights = $em->getRepository('IfeAloesBundle:SpecificCompetence')->findWeightsByProgram($program, $parameters['ue']);
		
		 
		        foreach ($entities as $entity) 
		        {
		            $entity->setWeights($weights);
		        }				
				
		        return $this->render('IfeAloesBundle:Tableaux:competences.html.twig', array(
		            'program' => $program,
		            'entities' => $entities,
		            'courses' => $courses,
		        	'menu'	=> "competence_assessment"
		          
		        ));				
					
			}
		else if ($parameters['rapports'][0]=="3")
			{ 
			    $em = $this->getDoctrine()->getManager();     
			    
			    
			    
			    $program = $parameters['programs'][0];
			    
				$liste_travaux 	= array();			    

		        $entities = $em->getRepository('IfeAloesBundle:GeneralCompetence')->findByProgram($program);

		        $cpt = 0;
				foreach ($parameters['ue'] as $ue)
					{
					
					$course = $em->getRepository('IfeAloesBundle:Course')->find($ue);
					
					$assessments	= $em->getRepository('IfeAloesBundle:Course')->findListAssesment($course);
					$work = array();
					
										
					$work["color"]	= $this->get_random_color();
					$work["course"]	= $course;
					$work["assessments"]	= $assessments;
					$liste_travaux[$cpt++]	= $work;					
					
					}

		        
		        return $this->render('IfeAloesBundle:Tableaux:travaux.html.twig', array(
		            'program' 		=> $program,
		            'entities' 		=> $entities,
		        	'liste_travaux' => $liste_travaux
		          
		        ));			        
		        
		        
			}
			
         
	}
	

	
    
    
    /**
     * Finds and displays a Course entity.
     *
     */
    public function resumAction(Course $course,$param)
    {

    /*	
    $user = $this->get('security.context')->getToken()->getUser();    	
    	
    if 	(
       			( $this->get('security.context')->isGranted('ROLE_ADMIN') 		  === true)  ||
       			( $this->get('security.context')->isGranted('ROLE_ENSEIGNANT')    === true && $course->isRedacteur($user->getId()) ) ||       			
       			( $this->get('security.context')->isGranted('ROLE_RESPONSABLE')   === true && $course->getProgram()->isResp($user->getId()) ) ||
       			( $course->getPublicationState()==1 )   	
    	)    	
    	{
   */ 		
    		
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

        $assessments = $em->getRepository('IfeAloesBundle:Assessment')->findByCourse($course);        
        
 
        
        return $this->render('IfeAloesBundle:Tableaux:plan.html.twig', array(
            'course' 		=> $course,
        	'genObj'		=> $genObj,
        	'comp'			=> $comp,
        	'topics'		=> $topics,
        	'program' 		=> $course->getProgram(), 
        	'assessments'	=> $assessments, 
        	'menu'	  		=> "course_resum",
        	'champs'			=> $param
        ));

/*        
    	}
    else
    	{
    	return $this->redirect($this->generateUrl('fos_user_security_login'));
    	}
*/
    }  	

		public	function get_random_color()
			{
			$c ="";
			for ($i = 0; $i<6; $i++)
				{
				$c .=  dechex(rand(0,15));
				}
			return "#$c";
		} 	        	

    /**
     * Finds and displays a Course entity.
     *
     */
    public function calendarAction(Course $course)
    {

        $em = $this->getDoctrine()->getManager();

        if (!$course) {
            throw $this->createNotFoundException('Unable to find Course entity.');
        }

        $entities = $em->getRepository('IfeAloesBundle:Topic')->findAllByCourses($course); 

        $assessments = $em->getRepository('IfeAloesBundle:Assessment')->findByCourse($course);            
        

		$output = "BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VTIMEZONE
TZID:Europe/Paris
X-LIC-LOCATION:Europe/Paris
BEGIN:DAYLIGHT
TZOFFSETFROM:+0100
TZOFFSETTO:+0200
TZNAME:CEST
DTSTART:19700329T020000
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=-1SU
END:DAYLIGHT
BEGIN:STANDARD
TZOFFSETFROM:+0200
TZOFFSETTO:+0100
TZNAME:CET
DTSTART:19701025T030000
RRULE:FREQ=YEARLY;BYMONTH=10;BYDAY=-1SU
END:STANDARD
END:VTIMEZONE
PRODID:-NONSGML Events //EN\r\n";
 

		define('DATE_ICAL', 'Ymd\THis\Z');
				
		// loop over events
		foreach ($entities as $topic) {
		 $output .=
				"BEGIN:VEVENT\r\n".
				"SUMMARY:".utf8_encode($topic->getTitle())."\r\n". 
				"UID:".$topic->getId()."\r\n". 
				"STATUS:" . strtoupper("") ."\r\n". 
				"DTSTART;TZID=Europe/Paris:" . GMDATE(DATE_ICAL, strtotime($topic->getStartDate()->format('Ymd\THis\Z')))."\r\n". 
				"DTEND;TZID=Europe/Paris:" . GMDATE(DATE_ICAL, strtotime($topic->getEndDate()->format('Ymd\THis\Z')))."\r\n". 
				"LAST-MODIFIED:" . GMDATE(DATE_ICAL, strtotime( date('Ymd\THis\Z')))."\r\n".
				"LOCATION:".$topic->getPlace()."\r\n".
				"END:VEVENT\r\n";
		}; 

		// loop over events
		foreach ($assessments as $assessment) {
		 $output .=
				"BEGIN:VEVENT\r\n".
				"SUMMARY:".utf8_encode($assessment->getTitle())."\r\n". 
				"UID:".$assessment->getId()."\r\n". 
				"STATUS:" . strtoupper("") ."\r\n". 
				"DTSTART;TZID=Europe/Paris:" . GMDATE(DATE_ICAL, strtotime($assessment->getDeadline()->format('Ymd\THis\Z')))."\r\n". 
				"DTEND;TZID=Europe/Paris:" . GMDATE(DATE_ICAL, strtotime($assessment->getDeadline()->format('Ymd\THis\Z')))."\r\n". 
				"LAST-MODIFIED:" . GMDATE(DATE_ICAL, strtotime( date('Ymd\THis\Z')))."\r\n".
				"LOCATION:\r\n".
				"END:VEVENT\r\n";
		}; 		
		
		
		// close calendar
		$output .= "END:VCALENDAR\r\n";
		
		$output = strtr($output, array(
		    "\r\n" => "\r\n",
		    "\r" => "\r\n",
		    "\n" => "\r\n",
		));
		 
		$response = new Response();
		$response->headers->set('Content-Type', 'text/calendar');
		$response->setContent($output);
		return $response;		
		
		exit();        

    }


}
