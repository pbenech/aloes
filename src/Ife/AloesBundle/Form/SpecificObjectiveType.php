

<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Ife\AloesBundle\Form\ObjectiveCompetenceType;

class SpecificObjectiveType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if (!$options['rating']) {
            $builder->add('title','text',array("required"=> false));
        } else {
            $builder->add('competenceLinks', 'collection', array(
                'type' => new ObjectiveCompetenceType(),
            ));
        }
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ife\AloesBundle\Entity\SpecificObjective',
            'rating' => false
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aloes_specific_objective';
    }
}
