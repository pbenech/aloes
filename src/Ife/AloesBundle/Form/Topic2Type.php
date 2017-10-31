<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Topic2Type extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title','text',array('label' => 'Titre : ','required'=> true, 'attr' => array('class' => 'col-sm-12')))
            ->add('place','text',array('label' => 'Lieu','required'=> false,)) 
            ->add('hdeb','time',array( 'input' => 'array','label' => 'Horaire','required'=> false)) 
            ->add('hfin','time',array( 'input' => 'array','label' => 'à','required'=> false))   
			->add('isFaceToFace', 'choice', array(
							'label'		=> " ",	 
    						'choices'   => array('1' => 'Séquence en présentiel', '2' => ' Séquence à distance '),

    						'required'  => true,
							'expanded'	=> true 
				))              
            
            
            //            ->add('description','textarea',array('attr' => array('class' => 'tinymce','data-theme' => 'aloes')))            
            ->add('fc','hidden')  
                        
            ->add('startDate','datetime',array('format' => 'Y/m/d', 'read_only' => true,'attr'=>array('style'=>'display:none;')) )
            ->add('endDate','datetime',array('format' => 'Y/m/d', 'read_only' => true,'attr'=>array('style'=>'display:none;')) )
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
