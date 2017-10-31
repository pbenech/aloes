<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Form3TopicType extends AbstractType
{

	protected  $topics;	
 
	public function __construct($topics){
		$this->topics = $topics;
 	}

		
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$topics = $this->topics;    	
    	
        $builder
            ->add('topics', 'collection', array('type' => new Topic2Type(),'data'=>$topics)); 
    } 
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ife\AloesBundle\Entity\Course'
        ));    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aloes_topic_form3';
    }
}
