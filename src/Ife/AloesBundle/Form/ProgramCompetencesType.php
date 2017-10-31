<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Ife\AloesBundle\Entity\AloesUser;
use Ife\AloesBundle\Entity\Level;

class ProgramCompetencesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('competences','textarea',array("label"=>"Description générale",'required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
          
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
