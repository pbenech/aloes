<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PasswordResetType extends AbstractType
{
	

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$builder         	    	
            ->add('email', 'text'	, array('label' => "Courriel","required" => true));
    }  

    public function getName()
    {
        return 'password_rest';
    }
    
    
    public function setDefaultOptions(OptionsResolverInterface $resolver){
    
    	$resolver->setDefaults(array(
    	));
    }
    
}

