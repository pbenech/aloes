<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
 
use Ife\AloesBundle\Entity\Parcours;

class ParcoursType extends AbstractType
{
	

	protected  $program;	
 
	public function __construct($program){
		$this->program = $program;
 	}
	
	
	
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$program = $this->program;        	
    	
        $builder 
            ->add('title','text',array('required'=> true,'label' => 'Libellé'))           
  
            
	        ->add('cours', 'entity', array(
	            'by_reference' => true,
	            'multiple' => true,   
	            'expanded' => true,   
	            'class'    => 'Ife\AloesBundle\Entity\Course',
	            'query_builder' => function(\Doctrine\ORM\EntityRepository $er) use($program) {
	                    $qb = $er->createQueryBuilder('d')
	                      		 ->add('where', 'd.program = ?1')
	                      		 ->orderBy('d.label', 'ASC')
	                      		 ->setParameter(1, $program);
	                    return $qb;
	            }))            
            
            
            ; 
    }  
      
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ife\AloesBundle\Entity\Parcours'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aloes_parcours';
    }
}
