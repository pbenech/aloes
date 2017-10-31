<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Program controller.
 *
 */
class PublicController extends Controller
{
    /**
     * Lists all Program entities.
     *
     */
    public function aboutAction()
    {
    	$em = $this->getDoctrine()->getManager();
        	
    	$parameter = $em->getRepository('IfeAloesBundle:Parameter')->find(1);  	
    	

        return $this->render('IfeAloesBundle:Public:about.html.twig', array(
        	'menu'		   	=> 'about',
        	'parameter'		=> $parameter
        ));
    }	
    
 
    private function getForm($search)
    {   	
    	$form = $this->createFormBuilder()
    	->add('email', 'text', array(
    			'label' => 'Courriel :',
    			'data' => "",
    			'required'  => true,
    			'attr' => array('class'=>'m15px','placeholder'=> 'Courriel')
    	))
    	->getForm();
    	
    	return $form;    	
    }  
    
     /**
     * Lists all Program entities.
     *
     */
    public function password_resetAction()
    {
 		$form = $this->getForm("");      	

        return $this->render('IfeAloesBundle:Public:password_reset.html.twig', array(
        	'menu'   => 'login',
            'form'   => $form->createView(),        
        ));
    }	
       
    /**
     * Lists all Program entities.
     *
     */
    public function password_re_initAction(Request $request)
    {

    $em = $this->getDoctrine()->getManager();    	
    	
	$form = $this->getForm("");      			

	$form->bind($request);

    $data 	= $form->getData();
    $email 	= $data['email'];
 	
    $user = $em->getRepository('IfeAloesBundle:User')->findOneByEmail($email);    	
    
    $logic = false;  
    
    $msg = "Votre mot de passe n'a pas été réinitialisé.";  
     	    		
    if ( isset($user) && strlen ($user->getPassword())>0 )
    		{
    		$logic = true;
    		
    		$mdp = $this->genererMDP(8);    		       		
    		
    		$user->setPassword($mdp);    		
    		
    		$em->flush();     		
    		
    		$manipulator = $this->get('fos_user.util.user_manipulator');
    		$manipulator->changePassword($user->getUsername(), $user->getPassword());    		
    		
    		$em->flush();    
    		
    		
    		$message = \Swift_Message::newInstance()
    			->setSubject('Aloes')
    			->setFrom("yvonnick.fesselier@ens-lyon.fr")
    			->setTo($user->getEmail())
    			->setBcc("yvonnick.fesselier@ens-lyon.fr")

    			->setBody($this->renderView('IfeAloesBundle:Admin:inituser.txt.twig',array(
    					'password' 	=> $mdp,
    					'mail'		=> $user->getUsername()
    			)))


    			; 
    		$this->get('mailer')->send($message);  

    		$msg = " Votre nouveau mot de passe vous a été envoyé par courriel. ";
    		}		
    		
        return $this->render('IfeAloesBundle:Public:password.html.twig', array(
        	'menu'		   => 'login',
        	'msg'		   => $msg
        )); 			
    			
    }       
       
       
    /**
     * Lists all Program entities.
     *
     */
    public function creditsAction()
    {    	
    	$em = $this->getDoctrine()->getManager();
        	
    	$parameter = $em->getRepository('IfeAloesBundle:Parameter')->find(1);  	

        return $this->render('IfeAloesBundle:Public:credits.html.twig', array(
        	'menu'		   => 'credits',
        	'parameter'		=> $parameter
        ));
    }	
        
         // ---------------------------------------------------------------------
    //  Générer un mot de passe aléatoire
    // ---------------------------------------------------------------------
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
