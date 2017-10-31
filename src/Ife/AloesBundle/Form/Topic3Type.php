<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Topic3Type extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title','text',array('label' => 'Titre ','required'=> true,'attr' => array('class' => 'col-sm-12')))
            ->add('place','text',array('label' => 'Lieu ','required'=> false,'attr' => array('class' => 'col-sm-12')))             
            ->add('description','textarea',array('required'=> false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))   
                       
            //->add('hdeb','time',array('label' => 'Horaire','required'=> false,))   
            //->add('hfin','time',array('label' => 'à','required'=> false,))                           
            

			->add('startDate', 'datetime',array('required' => false,
												'label' => 'Date Heure début',
                                               'widget' =>'single_text',
            //                                   'format' =>'dd/MM/yyyy HH:mm' ,	 
                                               'format' =>'dd/MM/yyy HH:mm' ,
			
											   'attr' => array(
													        'class' => 'form-control input-inline datepicker',
        													'data-provide' => 'datetimepicker', 		
        													'data-date-format' => 'dd/mm/yyyy hh:ii '
														)    
												))             
												
												
 
			->add('endDate', 'datetime',array('required' => false,
												'label' => 'Date Heure fin',			
                                               'widget' =>'single_text',
            //                                   'format' =>'dd/MM/yyyy HH:mm' ,	 
                                               'format' =>'dd/MM/yyy HH:mm' ,
			
											   'attr' => array(
													        'class' => 'form-control input-inline datepicker',
        													'data-provide' => 'datetimepicker', 		
        													'data-date-format' => 'dd/mm/yyyy hh:ii '
														)    
												))              
            
 													
  	            									  							
												
			->add('isFaceToFace', 'choice', array(
							'label'		=> " ",	 
    						'choices'   => array('1' => 'Séquence en présentiel', '2' => ' Séquence à distance '),

    						'required'  => true,
							'expanded'	=> true 
				))												

				
   
		        ->add('typologies', 'collection', array(
		        		'label' => ' ',                    
		        		'required' => false,
		        		'type'   => "typo_selector", 
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
            'data_class' => 'Ife\AloesBundle\Entity\Topic'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aloes_assessment2';
    }
}
