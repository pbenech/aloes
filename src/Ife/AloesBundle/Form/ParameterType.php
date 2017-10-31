<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Ife\AloesBundle\Entity\Parameter;

class ParameterType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('about','textarea',array('required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
            ->add('credits','textarea',array('required' => false,'attr' => array('class' => 'tinymce','data-theme' => 'aloes')))
          
        ;
    } 
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ife\AloesBundle\Entity\Parameter'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aloes_parameter';
    }
}
