<?php

namespace Ife\AloesBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Ife\AloesBundle\Form\TypoToStringTransformer;

 
class TypoSelectorType extends AbstractType
{
	private $om;

	public function __construct(ObjectManager $om)
	{
		$this->om = $om;
	}

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$transformer = new TypoToStringTransformer($this->om);
		$builder->addModelTransformer($transformer);
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array());
	}

	public function getParent()
	{
		return 'hidden';
	}

	public function getName()
	{
		return 'typo_selector';
	}
}