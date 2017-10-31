<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Ife\AloesBundle\Form\SpecificObjectiveType;

class GeneralObjectiveType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, array(
                'label' => 'Titre'
            ))
            ->add('specificObjectives', 'collection', array(
                'type' => new SpecificObjectiveType(),
                'label' => 'Compétences spécifiques'
            ));        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ife\AloesBundle\Entity\GeneralObjective'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aloes_general_objective';
    }
}
