<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Form1TopicType extends AbstractType
{
	
	protected  $lieu;	
	protected  $hdeb;	
	protected  $hfin;	
	protected  $isFaceToFace;	
	
	public function __construct($lieu,$hdeb,$hfin,$isFaceToFace){
		$this->lieu = $lieu;
		$this->hdeb = $hdeb;
		$this->hfin = $hfin;
		$this->isFaceToFace = $isFaceToFace;		
	}	
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$lieu = $this->lieu;    	
    	$hdeb = $this->hdeb;    
    	$hfin = $this->hfin;    
		$isFaceToFace = $this->isFaceToFace; 
		
        $builder
            ->add('lieu','text',array('label' => 'Lieu','data' => $lieu))   
            ->add('hdeb','time',array(  'input' => 'array','label' => 'Horaire ','data' => $hdeb))
            ->add('hfin','time',array(  'input' => 'array','label' => 'à','data' => $hfin))
			->add('isFaceToFace', 'choice', array(
							'label'		=> " ",	 
    						'choices'   => array('1' => 'Séquence en présentiel', '2' => ' Séquence à distance '),
							'data' 		=> $isFaceToFace, 
    						'required'  => true,
							'expanded'	=> true 
				))             
            
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array());
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aloes_topic_form1';
    }
}
