<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Ife\AloesBundle\Entity\Program;

use Ife\AloesBundle\Entity\CourseRepository;


class EditCourse extends AbstractType
{
	
	protected $program;
	protected $course;
		
	public function __construct($program,$course){
		$this->program 	= $program;
		$this->course 	= $course;	
 	}	
		
	
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	
    	$program = $this->program;    	
    	$course	 = $this->course;   
    	    	
        $builder
            ->add('program','entity',array(
            	'label'		=> 'Programme',
                'class' 	=> 'IfeAloesBundle:Program',
    			'property'  => 'label',
            ))         
            ->add('label','text',array('required' => false,'label' => 'Sigle','attr'=>array('class'=>"col-sm-4")))
            ->add('title','text',array('required' => false,'label' => 'Titre','attr'=>array('class'=>"col-sm-12")))
           // ->add('semester','text',array('required' => false,'label' => 'Semestre')) 
           
            
	        ->add('parcours', 'entity', array(
	            'by_reference' => true,
	            'multiple' => true,   
	            'expanded' => true,   
	            'class'    => 'Ife\AloesBundle\Entity\Parcours',
	            'query_builder' => function(\Doctrine\ORM\EntityRepository $er) use($program) {
	                    $qb = $er->createQueryBuilder('d')->where('d.program = :program')->setParameter('program', $program);
	                    return $qb->orderBy('d.title', 'ASC');
	            }))              
 
            ->add('semestres', 'entity', array(
                'class' => 'Ife\AloesBundle\Entity\Semestre',

            	'label'	=> 'Semestre(s)',
                'multiple' => true,
                'expanded' => true
          
              ))             
            
		    ->add('year','text',array('required' => false,'label' => 'Année'))

            ->add('publicationState','choice',array(     
            	'choices' => array('0' => 'Brouillon', '1' => 'Publié'),
    			'preferred_choices' => array('0'), 'expanded' => true,
            	'label' => 'Statut'))  	
            	    
  /*          ->add('language','text',array('required' => false,'label' => 'Langue(s) du cours')) */
            
            
            ->add('langues', 'entity', array(
                'class' => 'Ife\AloesBundle\Entity\Langue',

            	'label'	=> 'Langue(s) du cours',
                'multiple' => true,
                'expanded' => true
          
              )) 
                          
            
            ->add('credits','text',array('required' => false,'label' => 'Nombre de crédits','attr'=>array('class'=>"col-sm-4")))

            
            ->add('prerequisites', 'entity', array(
                'class' => 'Ife\AloesBundle\Entity\Course',
                'property' => 'label',
            	'label'	=> 'Préalable(s)',
                'multiple' => true,
                'expanded' => true,
                'query_builder' => function(CourseRepository $er) use($program,$course) {
            			return $er->findProgramCourses($program,$course);
            	}            
              )) 
              
            ->add('concurrentCourses', 'entity', array(
                'class' => 'Ife\AloesBundle\Entity\Course',
                'property' => 'label',
            	'label'	=> 'Concomitant(s) ',
            	'multiple' => true,
                'expanded' => true,
                'query_builder' => function(CourseRepository $er) use($program,$course){
            			return $er->findProgramCourses($program,$course);
            	}            
              ))             
            
            
            //->add('objectivesPreamble','textarea',array('required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
            //->add('assessmentsPreamble','textarea',array('required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
            
            //->add('isFaceToFace','choice',array('required' => true,'label' => 'En présentiel'))
            
            
            //->add('isRemote','checkbox',array('required' => false,'label' => 'En ligne'))

			->add('isOptional', 'choice', array(
							'label'		=> "Optionnel",	
    						'choices'   => array('1' => 'Oui', '0' => 'Non'),
    						'required'  => true,
							'expanded'	=> true  
				))            
             
          
            
            ->add('url_ped','text',array('required' => false,'label' => 'Url Plateforme pédagogique','attr'=>array('class'=>"col-sm-8")))            
            ->add('url_web','text',array('required' => false,'label' => 'Url site web (hypotheses, etc)','attr'=>array('class'=>"col-sm-8")))     
            ->add('url_twi','text',array('required' => false,'label' => 'Url Twitter','attr'=>array('class'=>"col-sm-8")))                           
            ->add('url_aut','text',array('required' => false,'label' => 'Url Autre ','attr'=>array('class'=>"col-sm-8")))       
            
           // ->add('created','datetime',array('required' => false,'label' => 'Date création'))
 		   /*
	         ->add('created', 'collot_datetime', array( 
	        'label'	=> "Date création",
	        'attr'	=> array('placeholder'       => 'Sélection date'),
	        'pickerOptions' => 
	            array('format' => 'dd/mm/yyyy',       
	                'weekStart' => 0,
	                'daysOfWeekDisabled' => '1,7', //example
	                'autoclose' => true, 
	                'startView' => 'month',
	                'minView' => 'month',  
	                'maxView' => 'decade', 
	                'todayBtn' => false,
	                'todayHighlight' => false,
	                'keyboardNavigation' => true,
	                'language' => 'fr',
	                'forceParse' => true,
	                'minuteStep' => 0, 
	                'pickerReferer ' => 'default', //deprecated
	                'pickerPosition' => 'bottom-right',
	                'viewSelect' => 'month', 
	                'showMeridian' => true, 
	              //  'initialDate' => date('m/d/Y', 1577836800), //example
	                ))                
           */   

        ;  
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ife\AloesBundle\Entity\Course'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ife_aloesbundle_course';
    }
}
