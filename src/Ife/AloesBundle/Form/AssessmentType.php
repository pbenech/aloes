<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AssessmentType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if (!$options['rating']) {
            $builder
                ->add('title','text',array('label'=> 'Titre'))
                ->add('weight', 'percent', array('label'=> "Coefficient *",'type'=>'fractional',"required" => false))
        //        ->add('deadline');
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
		         //       'initialDate' => date('m/d/Y', 1577836800), //example
		                )));             
                
                
                
        } else {
            $builder->add('objectiveLinks', 'collection', array(
                'type' => new AssessmentObjectiveType(),
            ));            
        }
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
        return 'aloes_assessment';
    }
}
