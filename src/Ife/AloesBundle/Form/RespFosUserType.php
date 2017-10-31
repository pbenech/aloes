<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RespFosUserType extends AbstractType
{
		
	protected  $courses;
 
	public function __construct($courses){
		$this->courses = $courses;
 	}	
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$courses = $this->courses;
    	
    	$builder            		             
            ->add('givenname', 'text'	, array('label' => "Nom utilisateur"))                           
            ->add('sn', 'text'	, array('label' => "Prénom utilisateur"))  
               
            ->add('username', 'text'	, array('label' => "Login")) 
                                    
            ->add('email', 'text'	, array('label' => "Courriel"))

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

