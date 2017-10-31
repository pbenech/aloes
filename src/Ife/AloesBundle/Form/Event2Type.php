<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


use Ife\AloesBundle\Entity\User;
use Ife\AloesBundle\Entity\Assessment; 
use Ife\AloesBundle\Entity\AssessmentRepository;

class Event2Type extends AbstractType
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
            ->add('title','text',array('required' => true,'label' => 'Titre'))  

                     
 
			->add('startDate', 'datetime',array('required' => false,
                                               'widget' =>'single_text',
            //                                   'format' =>'dd/MM/yyyy HH:mm' ,	 
                                               'format' =>'dd/MM/yyy HH:mm' ,
			
											   'attr' => array(
													        'class' => 'input-append date form_datetime',
        													'data-provide' => 'datetimepicker', 		
        										//			'data-format' => 'yyyy/MM/dd hh:mm '
														)    
												))             

 
			->add('endDate', 'datetime',array('required' => false,
                                               'widget' =>'single_text',
            //                                   'format' =>'dd/MM/yyyy HH:mm' ,	 
                                               'format' =>'dd/MM/yyy HH:mm' ,
			
											   'attr' => array(
													        'class' => 'input-append date form_datetime',
        													'data-provide' => 'datetimepicker', 		
        										//			'data-format' => 'yyyy/MM/dd hh:mm '
														)    
												))       												
												
            ->add('description','textarea',array('label'=>'Introduction ','required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))

            ->add('contexte','textarea',array('label'=>'Contexte ','required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
            ->add('outils','textarea',array('label'=>'Outils ','required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
    
            ->add('instructions','textarea',array('label'=>'Consignes et modalités ','required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
            ->add('tutoring','textarea',array('label'=>'Tutorat ','required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
            ->add('resources', 'textarea',array('label'=>'Support (document,etc ) ','required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))  


            ->add('assessments','entity',
            			array(	'label'			=> "Sélectionner travaux associés",
            					'class'			=>'Ife\AloesBundle\Entity\Assessment',
            					'expanded'   	=> false,
								'required' 		=> false,            			
            					'multiple'   	=> true, 
            					'query_builder' => function(AssessmentRepository $er) use ( $topic ) {
            										return $er->getTopicAssessment($topic);
            									}  
            									))             

              
            ;  
    }
     
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ife\AloesBundle\Entity\Event'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aloes_event';
    }
}
