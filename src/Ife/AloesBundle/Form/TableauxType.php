<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TableauxType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

  
	        ->add('programs', 'entity', array(
	            'by_reference' => true,
	            'multiple' => false,   
	            'expanded' => true, 
	        	//'required'	=> false,
	            'class'    => 'Ife\AloesBundle\Entity\Program',
	            'query_builder' => function(\Doctrine\ORM\EntityRepository $er) {
	                    $qb = $er->createQueryBuilder('d');
	                    return $qb->orderBy('d.title', 'ASC');
	            }))              

	            
	            
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
    
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aloes_tableaux';
    }
}
