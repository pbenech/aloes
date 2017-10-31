<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


use Ife\AloesBundle\Entity\User;
use Ife\AloesBundle\Entity\Assessment; 
use Ife\AloesBundle\Entity\AssessmentRepository;

class EventType extends AbstractType
{
 	protected $list1;
 	protected $list2;
 		
	public function __construct($list1,$list2){
		$this->list1 = $list1;	
		$this->list2 = $list2;
	}	
		
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$list1 = $this->list1;   
    	$list2 = $this->list2;      	
    	
    	
        $builder
            ->add('title','text',array('required' => true,'label' => 'Titre'))

       //     ->add('startDate', 'collot_datetime')

           
        ->add('startDate', 'collot_datetime', array( 
        'label'	=> "Date début",
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
                )))            
   
        ->add('endDate', 'collot_datetime', array( 
        'label'	=> "Date fin",
    	'attr'	=> array('placeholder'       => 'Sélection date'),       
        'required' => false, 
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
         //       'initialDate' => date('m/d/Y', 1577836800), //example
                )))                 
     
                
       //     ->add('endDate', 'date', array('required' => false))
            
            ->add('description','textarea',array('label'=>'Description ','required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
            ->add('instructions','textarea',array('label'=>'Consignes ','required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
            ->add('tutoring','textarea',array('label'=>'Tutorat ','required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
            ->add('resources', 'textarea',array('label'=>'Ressources ','required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))  
            
		    ->add('assessments', 'choice', array(
             	'required' => false,
		    	'multiple' => true,
		        'choices'  => $list1,
		    	'mapped'   => false))
		    
		    ->add('assessments_selected', 'choice', array(

             	'required' => false,
		    	'multiple' => true,
		        'choices'  => $list2,
		    	'mapped'   => false))		    

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
