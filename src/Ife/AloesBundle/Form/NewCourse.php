<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewCourse extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label','text',array('required'=> true,'label' => 'Sigle'))
            ->add('title','text',array('required'=> true,'label' => 'Titre'))
            
            
	        ->add('parcours', 'entity', array(
	            'by_reference' => true,
	            'multiple' => true,   
	            'expanded' => true,   
	            'class'    => 'Ife\AloesBundle\Entity\Parcours',
	            'query_builder' => function(\Doctrine\ORM\EntityRepository $er) {
	                    $qb = $er->createQueryBuilder('d');
	                    return $qb->orderBy('d.title', 'ASC');
	            }))              
            
            
            ->add('credits','text',array('required'=> false,'label' => 'Crédits'))
            ->add('publicationState','choice',array( 'required'=> true,'label' => 'Statut',    
            	'choices' => array('0' => 'Brouillon', '1' => 'Publié'),
    			'preferred_choices' => array('0'), 'expanded' => true,))  
			->add('isOptional', 'choice', array(
							'label'		=> "Optionnel",	
    						'choices'   => array('1' => 'Oui', '0' => 'Non'),
    						'required'  => true,
							'expanded'	=> true  
				))    
            
				

            ->add('semestres', 'entity', array(
                'class' => 'Ife\AloesBundle\Entity\Semestre',

            	'label'	=> 'Semestre(s)',
                'multiple' => true,
                'expanded' => true
          
              ))    
		    ->add('year','text',array('required' => false,'label' => 'Année'))              				
				
            ->add('langues', 'entity', array(
                'class' => 'Ife\AloesBundle\Entity\Langue',

            	'label'	=> 'Langue(s) du cours',
                'multiple' => true,
                'expanded' => true
          
              )) 
            ->add('url_ped','text',array('required' => false,'label' => 'Url Plateforme pédagogique','attr'=>array('class'=>"col-sm-8")))            
            ->add('url_web','text',array('required' => false,'label' => 'Url site web (hypotheses, etc)','attr'=>array('class'=>"col-sm-8")))     
            ->add('url_twi','text',array('required' => false,'label' => 'Url Twitter','attr'=>array('class'=>"col-sm-8")))                           
            ->add('url_aut','text',array('required' => false,'label' => 'Url Autre ','attr'=>array('class'=>"col-sm-8")))       
            
              
		    
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
        return 'aloes_new_course';
    }
}
