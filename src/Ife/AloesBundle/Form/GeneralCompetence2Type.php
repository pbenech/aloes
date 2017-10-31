<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Ife\AloesBundle\Form\SpecificCompetenceType;

class GeneralCompetence2Type extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, array(
                'label' => 'Titre' 
            ))
		    ->add('categories', 'collection', array(
		        		'label' => ' ',                    
		        		'required' => false,
		        		'type'   => "cato_selector", 
		        		'allow_add' => true,
		        		'allow_delete' => true,  
		        		'prototype' => true,   
		        		'options'  => array(
		        				'required'  => true,            
		        		)))		             
		        		
		        		
		        		
            ; 
    } 
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ife\AloesBundle\Entity\GeneralCompetence',
        ));
    }

    /**
     * @return string ... or whatever, I don't care about her underwear
     */
    public function getName()
    {
        return 'aloes_generalcompetence';
    }
}
