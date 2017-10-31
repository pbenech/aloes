<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Ife\AloesBundle\Entity\Event;
use Ife\AloesBundle\Entity\EventRepository;


class Assessment2Type extends AbstractType
{
	
 	protected $topic;
	
	public function __construct($topic){
		$this->topic = $topic;	
	} 	
 	
	
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
	    	$topic = $this->topic;       	
    	
            $builder
                ->add('title','text',array('label'=> 'Titre'))

                ->add('weight', 'percent', array('label'=> "Coefficient *",'type'=>'fractional',"required" => false))
                
                
				->add('isIndividual', 'choice', array(
								'label'		=> " ",	 
	    						'choices'   => array('1' => 'Individuel', '2' => ' Groupe '),
	
	    						'required'  => true, 
								'expanded'	=> true 
					))                 
                  
                
	            ->add('event','entity',
	            			array(	'label'			=> "Evènement associé",
	            					'class'			=>'Ife\AloesBundle\Entity\Event',
	            					'expanded'   	=> false,
									'required' 		=> false,            			

	            					'query_builder' => function(EventRepository $er) use ( $topic ) {
	            										return $er->getTopicEvent($topic);
	            									}   
	            									))                                      
  	            									  									
				->add('deadline', 'datetime',array('required' => false,
											   'label'=> "Date de rendu",
                                               'widget' =>'single_text',
                                               'format' =>'dd/MM/yyyy HH:mm' ,				 
											   'attr' => array(
													        'class' => 'form-control input-inline datepicker',
        													'data-provide' => 'datetimepicker', 
        													'data-date-format' => 'dd/mm/yyyy hh:ii '
														)    
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
												
												
												
				/* SAVE	
				->add('deadline', 'datetime',array('required' => false,
                                               'widget' =>'single_text',
                                               'format' =>'dd/MM/yyyy HH:mm' ,				 
											   'attr' => array(
													        'class' => 'form-control input-inline datepicker',
        													'data-provide' => 'datetimepicker',
        													'data-date-format' => 'dd/mm/yyyy hh:ii '
														)    
												))  									
				*/
																				
				/*
                
		        ->add('deadline', 'collot_datetime', array( 
		        'label'	=> "Date de rendu",   
				'attr' => array(
				        'placeholder'       => 'Sélection date'
				    ),	
		        'required' => false, 
				    
		        'pickerOptions' =>   
		            array('format' => 'dd/mm/yyyy HH:ii p',     
		                'weekStart' => 0, 
		                'daysOfWeekDisabled' => '0,7', //example
		                'autoclose' => true, 
		                'startView' => 'month',
		                'minView' => 'hour',  
		                'maxView' => 'decade', 
		                'todayBtn' => false,
		                'todayHighlight' => false,
		                'keyboardNavigation' => true,
		                'language' => 'fr', 
		                'forceParse' => true, 
		                'minuteStep' => 30,  
		                'pickerReferer ' => 'default', //deprecated
		                'pickerPosition' => 'top-right',
		                'viewSelect' => 'day', 
		                'showMeridian' => true,  

		                )))
		               */
		                ;  
                

    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ife\AloesBundle\Entity\Assessment',
            'rating' => false
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
