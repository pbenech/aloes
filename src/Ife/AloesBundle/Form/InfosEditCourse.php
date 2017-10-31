<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InfosEditCourse extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('description','textarea',array('label'=>'Description ','required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
		    ->add('pedagogy','textarea',array('label'=>'Méthodes Pédagogiques ','attr' => array('required' => false,'class' => 'tinymce','data-theme' => 'aloes')))
            ->add('resources','textarea',array('label'=>'Ressources ','required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))		    
		    ->add('rules','textarea',array('label'=>'Règlements ','required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
		    ->add('infos','textarea',array('label'=>'Autres informations utiles ','required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
		    ->add('evaluation','textarea',array('label'=>'Evaluation ','required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
		    
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
