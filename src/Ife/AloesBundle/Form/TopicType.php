<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TopicType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title','text',array('label' => 'Titre'))
            ->add('description','textarea',array('attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
    //        ->add('startDate', 'date', array('empty_value'=>''))
    //        ->add('endDate', 'date', array('empty_value'=>''))

           
        ->add('startDate', 'collot_datetime', array( 
        'label'	=> "Date début",
        'attr'	=> array("class" => "col-md-6"),
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
        'attr'	=> array("class" => "col-md-6"),        
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
            
            
            ->add('assessments', 'collection', array(
                'type' => new AssessmentType(),
            ))
            
            

            
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
        return 'aloes_topic_create';
    }
}
