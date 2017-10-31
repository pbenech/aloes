<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Ife\AloesBundle\Entity\AloesUser;
use Ife\AloesBundle\Entity\Level;

class ProgramType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array('label'=>'Titre'))
 //           ->add('institution')
            ->add('label', 'text', array('label'=>'Sigle'))
            ->add('description','textarea',array('required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
            ->add('url','text',array("required" => false))
  //          ->add('level')
            
			->add("level", 
					'entity', 
					
					array(
						"class" => "Ife\AloesBundle\Entity\Level",
						'empty_value' => 'Choisissez ...',
						'label' => 'Niveaux',
						'empty_data'  => null,		
						'required' => false, 							
						"query_builder" => function(\Ife\AloesBundle\Entity\LevelRepository $er) 
							{
							  return $er->listLevel();
							}					

					))            
            
            
            //->add('director')
            /*
            ->add('director','entity',array(
            	'label'		=> 'Directeur',
                'class' 	=> 'IfeAloesBundle:AloesUser',

            ))*/              
        ;
    } 
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ife\AloesBundle\Entity\Program'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aloes_program';
    }
}
