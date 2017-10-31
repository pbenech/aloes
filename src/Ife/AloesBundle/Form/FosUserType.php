<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FosUserType extends AbstractType
{
	
	protected  $courses;
 
	public function __construct($courses){
		$this->courses = $courses;
 	}	
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$courses = $this->courses;
    	
    	$builder            		             
            ->add('givenname', 'text'	, array('label' => "Prénom utilisateur"))                           
            ->add('sn', 'text'	, array('label' => "Nom utilisateur"))  
               
            ->add('username', 'text'	, array('label' => "Login")) 
                                    
            ->add('email', 'text'	, array('label' => "Courriel"))
            
	    	->add('role1', 'choice', array(
	    			'label' => 'Administrateur :',
	    			'choices' => array("1"=>"Oui","0"=>"Non"),
	    			'data' => 0,
	    			'required'  => true,
	    			'expanded'	=> true, 
	    			'mapped' => false 	 
	    	))    	
	    	->add('role2', 'choice', array(
	    			'label' => 'Responsable de formation :',
	    			'choices' => array("1"=>"Oui","0"=>"Non"),
	    			'data' => 0,
	    			'required'  => true,
	    			'expanded'	=> true, 
	    			'mapped' => false 	
	    	
	    	))       	
	  	
	    	->add('courses2', 'choice', array(
	    			'label' => 'Cours :',    	  	
	    			'choices' => $courses,   
	    			'multiple' => true, 
	    			'expanded'	=> true, 
	    			'mapped' => false 	
	
	    	))   
	    	->add('role3', 'choice', array(
	    			'label' => 'Enseignant :',
	    			'choices' => array("1"=>"Oui","0"=>"Non"),
	    			'required'  => true,
	    			'data' => 0,    	
	    			'expanded'	=> true,  
	    			'mapped' => false 	
	    	))       	
	
	    	->add('courses3', 'choice', array(
	    			'label' => 'Cours :',    	  	
	    			'choices' => $courses,   
	    			'multiple' => true, 
	    			'expanded'	=> true, 
	    			'mapped' => false 	
	
	    	))      		            
	            
            
                                   
    	;
    }  

    public function getName()
    {
        return 'form';
    }
    
    
    public function setDefaultOptions(OptionsResolverInterface $resolver){
    
    	$resolver->setDefaults(array(
    			'data_class' => 'Ife\AloesBundle\Entity\User'
    	));
    }
    
}

