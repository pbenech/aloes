<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//use FR3D\LdapBundle\Ldap\LdapManager;
use Ife\AloesBundle\Entity\LdapManager;
  
use FR3D\LdapBundle\Tests\TestUser;

use Ife\AloesBundle\Entity\User;
use Ife\AloesBundle\Entity\Program;
use Ife\AloesBundle\Entity\Course;
use Ife\AloesBundle\Entity\CourseRepository;
use Ife\AloesBundle\Entity\Parameter;


use Ife\AloesBundle\Form\RespFosUserType;
use Ife\AloesBundle\Form\ParameterType;
 
/**
 * Program controller.
 *
 */
class RespController extends Controller
{

     protected $ldapManager;    
     protected $userManager;    
	    
     public function utilisateursAction($page,$sort,$direction){

	    $request = $this->getRequest();
    	$session = $request->getSession();	       	
     	
        $em = $this->getDoctrine()->getManager();    
             		  	    	  	    	
    	if($request->isMethod('POST'))
    		{
	    	$form = $this->getForm("");      			

	    	$form->bind($request);
    		if ($form->isValid()) 
    			{
    			$data = $form->getData();
    			$search = $data['search'];			
    			}   
    		}     		
		else
			{				
			if  ( $session->get("searchND")!=null)
    			$search = $session->get("searchND"); 
    		else 
    			{
    			$search = "";
    			}	    		
    			
		  	$form = $this->getForm($search);      					
			}
			 
    	
		$session->set("searchND",$search);              
        
        $user = $this->get('security.context')->getToken()->getUser();                
        $entities = $em->getRepository('IfeAloesBundle:User')->findUsers($search,$sort,$direction);  
  
    
		$paginator 		= $this->get('knp_paginator'); 	
		$pagination  	= $paginator->paginate($entities, $page,"25");         
               
        return $this->render('IfeAloesBundle:Resp:utilisateurs.html.twig', array(
            'pagination' => $pagination,
        	'menu'		   => 'adm-util',
			'form' 			=> $form->createView(),        
        	'page'			=> $page,
        	'sort'			=> $sort,
        	'direction'		=> $direction,        
        ));
    }
    
 
    private function getForm($search)
    {   	
    	$form = $this->createFormBuilder()
    	->add('search', 'text', array(
    			'label' => 'Filtre :',
    			'data' => $search,
    			'required'  => false,
    			'attr' => array('class'=>'m15px','placeholder'=> 'recherche')
    	))
    	->getForm();
    	
    	return $form;    	
    }       
    
    public function showuserAction($id,$page,$sort,$direction) {
    	
    	$em = $this->getDoctrine()->getManager();
        	
    	$user = $em->getRepository('IfeAloesBundle:User')->find($id);  	
    		 
		return $this->render('IfeAloesBundle:Resp:utilisateur-show.html.twig', array(
			   //       'pagination' => $pagination,
			   'menu'		    => 'adm-util',
			   'entity'			=> $user,
			   'page'			=> $page,
			   'sort'			=> $sort,
			   'direction'		=> $direction 
			   ));  
    	
    }
    
    public function updateuserAction($id,$page,$sort,$direction) {
    	        
    	$em = $this->getDoctrine()->getManager();
    	
    	$responsable = $this->get('security.context')->getToken()->getUser();    	
    	
    	$user = $em->getRepository('IfeAloesBundle:User')->find($id);  	    	
    	
        $courses = $em->getRepository('IfeAloesBundle:Course')->findAllOrderByRespProgram($responsable,$user);  
			
  		$formUser = $this->getUserUpdateForm($user,$courses);  

        return $this->render('IfeAloesBundle:Resp:utilisateur-update.html.twig', array(
   //       'pagination' => $pagination,
        	'menu'		    => 'adm-util',
   			'form' 			=> $formUser->createView(),        
        	'user'			=> $user,
        	'page'			=> $page,
        	'sort'			=> $sort, 
        	'direction'		=> $direction
        ));       		

  		
    }    
    
   private function getUserUpdateForm($user,$courses)
    {   	

		$courses_data3 = array();
		
		foreach($user->getEnseignants() as $program)
    		{
    		array_push($courses_data3,"PRO#".$program->getId());	
			foreach($user->getCourses() as $course)
	    		{
    			if($program->getId()==$course->getProgram()->getId())	
		    		array_push($courses_data3,"COU#".$course->getProgram()->getId()."#".$course->getId());	
	    		}	
    		}	   	

    	$form = $this->createFormBuilder()
    	->add('givenname', 'text', array(
    			'label' => 'Nom :',
    			'data' => $user->getGivenname() 	 
    	))
    	->add('sn', 'text', array(
    			'label' => 'Prénoms :',
    			'data' => $user->getSn() 	 
    	))
    	->add('email', 'text', array(
    			'label' => 'Email :',
    			'data' => $user->getEmail() 	 
    	))    	
    	
    	->add('fonction', 'text', array(
    			'label' => 'Fonction :',
    			'data' => $user->getFonction() 	 
    	))   	

    	->add('courses3', 'choice', array(
    			'label' => 'Cours :',    	  	
    			'choices' => $courses,   
    			'data' => $courses_data3,    
    			'multiple' => true, 
    			'expanded'	=> true

    	))      		 
    	->getForm();
    	
    	return $form;    	
    }   
            
    public function validuserAction($id,$page,$sort,$direction) {
	    
    	$request = $this->getRequest();
    	$session = $request->getSession();	  

    	$responsable = $this->get('security.context')->getToken()->getUser();        	
    	
    	$em = $this->getDoctrine()->getManager();		
 	
    	if($request->isMethod('POST'))
    		{	
    			
	    	$user = $em->getRepository('IfeAloesBundle:User')->find($id);  	    	
	    	
	        $courses = $em->getRepository('IfeAloesBundle:Course')->findAllOrderByRespProgram($responsable,$user);  
				 
	  		$formUser = $this->getUserUpdateForm($user,$courses);    
	  		$formUser->bind($request);			

	    	$data = $formUser->getData();
	    	
	    	if  ( $formUser->isValid() )
    			{
 
				$cpt=0;
				$array_role = array();
				
				$user->setFonction($data['fonction']);
				$user->setSn($data['sn']);
				$user->setGivenname($data['givenname']);
				$user->setEmail($data['email']);
															
				$roles = serialize($user->getRoles());
				
				$pos = strpos($roles,"ROLE_ENSEIGNANT");
								
				if ( $pos  !== false)
					$user->addRole("ROLE_ENSEIGNANT");	
				
				$user->reinitPartiel($courses); 
								
				$programs 	= array();
				$courses 	= array();						
				foreach ($data['courses3'] as $code)	{
							$array_code = explode("#",$code);
							if ($array_code[0]=="PRO")
								array_push($programs,$array_code[1] );
							if ($array_code[0]=="COU")
								array_push($courses,$array_code[2] );								
				}						
						
				$programs = $em->getRepository('IfeAloesBundle:Program')->findById($programs);  						
				foreach ($programs as $program)
					{
					$program->addEnseig($user);
					} 				
				
				$courses = $em->getRepository('IfeAloesBundle:Course')->findById($courses);  					
				foreach ($courses as $course)
					{
					$course->addRedacteur($user);
					} 																													
								 
				$em->persist($user);
				$em->flush();
			     	 			
			    return $this->render('IfeAloesBundle:Resp:utilisateur-show.html.twig', array(
			        	'menu'		    => 'adm-util',
			    		'entity'		=> $user,
			        	'page'			=> $page,
			        	'sort'			=> $sort,
			        	'direction'		=> $direction 
			        ));          			
    			}
    			
    		}
    		
		  	$form = $this->getForm($search);     
    		
    		
         return $this->render('IfeAloesBundle:Resp:utilisateur.html.twig', array(
   //       'pagination' => $pagination,
        	'menu'		    => 'adm-util',
   			'form' 			=> $form->createView(),        
   			'formLdap' 		=> $formLdap->createView(),  
        	'page'			=> $page,
        	'sort'			=> $sort,
        	'direction'		=> $direction,  
        	'findLdap'		=> sizeOf($dataLdap)     
        ));       		
    	 
    }        
    

    /**
     * Lists all Program entities.
     *
     */
    public function deleteuserAction($id,$page,$sort,$direction) {
    	
    	$em = $this->getDoctrine()->getManager();
        	
    	$user = $em->getRepository('IfeAloesBundle:User')->find($id);  	

    	$em->remove($user);
    	$em->flush();

       return $this->redirect($this->generateUrl('resp_utilisateurs', array(
                'page' => $page,'sort' => $sort, 'direction' => $direction
            )));
     	
    	
    } 
    
    
    /**
     * Lists all Program entities.
     *
     */
    public function addLdapAction($page,$sort,$direction) {
	    
    	$request = $this->getRequest();
    	$session = $request->getSession();	       	    	

    	$responsable = $this->get('security.context')->getToken()->getUser();      	
    	
 		$dataLdap = array();
		
    	if($request->isMethod('POST'))
    		{
	    	$form = $this->getForm("");      			

	    	$form->bind($request);
    		if ($form->isValid()) 
    			{
    			$data = $form->getData();
    			$search = $data['search'];	
				$results = $this->ldap_search($search);    						
				$dataLdap = $this->ldap_search_filter_bdd($results);
    			}   
    		}     		
		else
			{				
			if  ( $session->get("searchLdap")!=null)
    			$search = $session->get("searchLdap"); 
    		else 
    			{
    			$search = "";
    			}	    		
    			
		  	$form = $this->getForm($search);      					
			}    	 
			
    	
		$session->set("searchLdap",$search);    			
			
        $em = $this->getDoctrine()->getManager();
       		
 
	    $courses = $em->getRepository('IfeAloesBundle:Course')->findAllOrderByResponsableProgram($responsable);  
	        			
  		$formLdap = $this->getUserLdapForm($dataLdap,$courses); 			
			
        return $this->render('IfeAloesBundle:Resp:utilisateur.html.twig', array(
   //       'pagination' => $pagination,
        	'menu'		    => 'adm-util',
   			'form' 			=> $form->createView(),        
   			'formLdap' 		=> $formLdap->createView(),  
        	'page'			=> $page,
        	'sort'			=> $sort, 
        	'direction'		=> $direction,  
        	'findLdap'		=> sizeOf($dataLdap)     
        ));    	
    
    }

      private function getUserLdapForm($result,$courses)
    {   	
    	$form = $this->createFormBuilder()
    	->add('users', 'choice', array(
    			'label' => 'Sélectionner un utilisateur :',
    			'choices' => $result, 
    			'required'  => true,
    			'attr' => array('placeholder'=> 'rechercher par nom, pr�nom')
    	)) 	
    	->add('courses3', 'choice', array(
    			'label' => 'Cours :',    	  	
    			'choices' => $courses,   
    			'multiple' => true, 
    			'expanded'	=> true

    	))      		
    	->getForm();
    	
    	return $form;    	
    }   
     
  
    /**
     * Lists all Program entities.
     *
     */
    public function ldap_search($search)
    {
  	
		$fr3d_ldap_host = $this->container->getParameter('fr3d_ldap_host');    	
		$fr3d_ldap_dn	= $this->container->getParameter('fr3d_ldap_dn');       			
    	   	
		$ldapconn = ldap_connect($fr3d_ldap_host)
    		or die("Impossible de se connecter au serveur LDAP.");
        			   
    	if ($ldapconn) {

		    $ldapbind = ldap_bind($ldapconn);    
					    
		    if ($ldapbind) { 
		    	
			    $person=$search;
	
				$dn = "ou=people, dc=ens-lyon, dc=fr";
				$filter="(|(sn=*$person*)(givenname=*$person*))";
				$justthese = array("ou", "sn", "givenname", "mail");
				
				$result = ldap_search($ldapconn, $dn, $filter, $justthese);				    	
		    	$data 	= ldap_get_entries($ldapconn, $result);

		    } else {
		        echo "Connexion LDAP anonyme a échoué ...";
		    }

		} 

	return $data;	
    }

    
    public function ldap_search_filter_bdd($results)
    {

	$dataLdap = array();
	$dataUser = array();
		    	
    $em = $this->getDoctrine()->getManager();
        
    $users = $em->getRepository('IfeAloesBundle:User')->findAll();  
    foreach ($users as $usr)
	  {
	  $dataUser[$usr->getDn()] =  $usr->getSn().", ".$usr->getGivenname();  	
	  } 				
				
	for ($i=0; $i<$results["count"]; $i++) {   
		if (!array_key_exists($results[$i]["dn"],$dataUser))
			{
	        $name = "";
	            		
	        if(isset($results[$i]["sn"][0])) 
	        	$name = $results[$i]["sn"][0];
	            		
	        if(isset($results[$i]["givenname"][0])) 
	        	$name = $name.", ".$results[$i]["givenname"][0];    
	
	         $dataLdap[$results[$i]["dn"]] =  $name;                		
		     }
    	}	
    	
    return  $dataLdap;
    }        
    
    
   public function createLdapAction($page,$sort,$direction) {
	    
    	$request = $this->getRequest();
    	$session = $request->getSession();	  

 		$dataLdap = array();    	
    	
        $em = $this->getDoctrine()->getManager();    	
        

    	$responsable = $this->get('security.context')->getToken()->getUser();      	        
        
    						
	    $courses = $em->getRepository('IfeAloesBundle:Course')->findAllOrderByResponsableProgram($responsable);  
			
		$search = "";			
			
		if  ( $session->get("searchLdap")!=null)
    			$search = $session->get("searchLdap"); 
			
		$results = $this->ldap_search($search);  				
		$dataLdap = $this->ldap_search_filter_bdd($results);		
		
 	
    	if($request->isMethod('POST'))
    		{	
  			$formLdap = $this->getUserLdapForm($dataLdap,$courses);     			

	    	$formLdap->bind($request);
	    	$data = $formLdap->getData();
	    	
	    	if  ( $formLdap->isValid() ) 
    			{

    			$ldapManager = $this->get('fr3d_ldap.ldap_manager');
		   	
    			$dn = ldap_explode_dn($data['users'],1); 

    			$x = str_replace("uid=","",$dn[0]);
 
				$criteria = array('uid' => $x);					  
				$entities = $ldapManager->findUserBy($criteria);
 
				$cpt=0;
				$array_role = array();
				

				$entities->addRole("ROLE_ENSEIGNANT");	

				$programs 	= array();
				$courses 	= array();						
				foreach ($data['courses3'] as $code)	{
							$array_code = explode("#",$code);
							if ($array_code[0]=="PRO")
								array_push($programs,$array_code[1] );
							if ($array_code[0]=="COU")
								array_push($courses,$array_code[2] );								
					}						
						
				$programs = $em->getRepository('IfeAloesBundle:Program')->findById($programs);  						
				foreach ($programs as $program)
					{
					$program->addEnseig($entities);
					}
							 
				$courses = $em->getRepository('IfeAloesBundle:Course')->findById($courses);  					
				foreach ($courses as $course)
						{
						$course->addRedacteur($entities);
						} 						
			 
				$em->persist($entities);
				$em->flush();
			     	 			
			    return $this->render('IfeAloesBundle:Resp:utilisateur-show.html.twig', array(
			   //       'pagination' => $pagination,
			        	'menu'		    => 'adm-util',
			    		'entity'		=> $entities,
			        	'page'			=> $page,
			        	'sort'			=> $sort,
			        	'direction'		=> $direction 
			        ));          			
    			}
    			 
    		}
    		
		  	$form = $this->getForm($search);     
    		
    		 
         return $this->render('IfeAloesBundle:Resp:utilisateur.html.twig', array(
   //       'pagination' => $pagination,
        	'menu'		    => 'adm-util',
   			'form' 			=> $form->createView(),        
   			'formLdap' 		=> $formLdap->createView(),  
        	'page'			=> $page,
        	'sort'			=> $sort,
        	'direction'		=> $direction,  
        	'findLdap'		=> sizeOf($dataLdap)     
        ));       		
    	 
    }    
    
     public function addUserAction($page,$sort,$direction) {

    	$request = $this->getRequest();
    	$session = $request->getSession();	       	    	
   						
        $em = $this->getDoctrine()->getManager();

    	$responsable = $this->get('security.context')->getToken()->getUser();      	                
    						
	    $courses = $em->getRepository('IfeAloesBundle:Course')->findAllOrderByResponsableProgram($responsable);  
	             	        
        $entity = new User(); 
            	        
    	$form = $this->createForm(new RespFosUserType($courses),$entity);         
       					
			
        return $this->render('IfeAloesBundle:Resp:user.html.twig', array(
   //       'pagination' => $pagination,
        	'menu'		    => 'adm-util',
   			'form' 			=> $form->createView(),  
        	'page'			=> $page,
        	'sort'			=> $sort, 
        	'direction'		=> $direction
        ));  
    }     
    
    public function createUserAction($page,$sort,$direction) {
	    
    	$request = $this->getRequest();
    	$session = $request->getSession();	  

        $em = $this->getDoctrine()->getManager();    	

    	$responsable = $this->get('security.context')->getToken()->getUser();      	                
    						
	    $courses = $em->getRepository('IfeAloesBundle:Course')->findAllOrderByResponsableProgram($responsable); 
        			
    	$entity  = new User();
    	$form = $this->createForm(new RespFosUserType($courses),$entity);
    	$form->bind($request);
 
    	$data = $request->request->get('form');
    
    	if ($form->isValid()) {
    		
    		$mdp = $this->genererMDP(8);    		
    		
    		$entity->setPassword($mdp);
    		      		
    		$entity->setEnabled(1);
    		
			$array_role = array();
				
			$entity->setRoles(array());
			$entity->reinit();
				 

			$entity->addRole("ROLE_ENSEIGNANT");	

						
			$programs 	= array();
			$courses 	= array();						
			foreach ($data['courses3'] as $code)	{
							$array_code = explode("#",$code);
							if ($array_code[0]=="PRO")
								array_push($programs,$array_code[1] );
							if ($array_code[0]=="COU")
								array_push($courses,$array_code[2] );								
			}						
						
			$programs = $em->getRepository('IfeAloesBundle:Program')->findById($programs);  						
			foreach ($programs as $program)
				{
				$program->addEnseig($entity);
				}
							 
			$courses = $em->getRepository('IfeAloesBundle:Course')->findById($courses);  					
			foreach ($courses as $course)
				{
				$course->addRedacteur($entity);
				} 						 		
    		    		
    		$em->persist($entity);
    		$em->flush();    		

    		$manipulator = $this->get('fos_user.util.user_manipulator');
    		$manipulator->changePassword($entity->getUsername(), $entity->getPassword());    		
    		
    		$em->flush();    	

    		
    		$message = \Swift_Message::newInstance()
    			->setSubject('Aloes')
    			->setFrom("yvonnick.fesselier@ens-lyon.fr")
    			->setTo($entity->getEmail())
    			->setBcc("yvonnick.fesselier@ens-lyon.fr")

    			->setBody($this->renderView('IfeAloesBundle:Resp:inituser.txt.twig',array(
    					'password' 	=> $mdp,
    					'mail'		=> $entity->getUsername()
    			)))


    			; 
    		$this->get('mailer')->send($message);    		

	 			
			 return $this->render('IfeAloesBundle:Resp:utilisateur-show.html.twig', array(
			   //       'pagination' => $pagination,
			        	'menu'		    => 'adm-util',
			    		'entity'		=> $entity,
			        	'page'			=> $page,
			        	'sort'			=> $sort,
			        	'direction'		=> $direction 
			        ));          			

    	}		
    else 
        return $this->render('IfeAloesBundle:Admin:user.html.twig', array(
   //       'pagination' => $pagination,
        	'menu'		    => 'adm-util',
   			'form' 			=> $form->createView(),  
        	'page'			=> $page,
        	'sort'			=> $sort, 
        	'direction'		=> $direction
        ));  

    }  
    
      private function genererMDP ($longueur = 8){
    	// initialiser la variable $mdp
    	$mdp = "";
    
    	// Définir tout les caractères possibles dans le mot de passe,
    	// Il est possible de rajouter des voyelles ou bien des caractères spéciaux
    	$possible = "2346789BCDFGHJKMNPQRTVWXYZ";
    
    	// obtenir le nombre de caractères dans la chaîne précédente
    	// cette valeur sera utilisé plus tard
    	$longueurMax = strlen($possible);
    
    	if ($longueur > $longueurMax) {
    		$longueur = $longueurMax;
    	}
    
    	// initialiser le compteur
    	$i = 0;
    
    	// ajouter un caractère aléatoire à $mdp jusqu'à ce que $longueur soit atteint
    	while ($i < $longueur) {
    		// prendre un caractère aléatoire
    		$caractere = substr($possible, mt_rand(0, $longueurMax-1), 1);
    
    		// vérifier si le caractère est déjà utilisé dans $mdp
    		if (!strstr($mdp, $caractere)) {
    			// Si non, ajouter le caractère à $mdp et augmenter le compteur
    			$mdp .= $caractere;
    			$i++;
    		}
    	}
    
    	// retourner le résultat final
    	return $mdp;
    }    
    
}
