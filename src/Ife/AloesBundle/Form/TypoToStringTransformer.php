<?php

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;

use Ife\AloesBundle\Entity\Typologie;

class TypoToStringTransformer implements DataTransformerInterface
{
	    private $om;
	    private static $notPersisted = array();

    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }

	public function transform($keyWord)
    {
        if (null === $keyWord) {
            return '';
        }

        return $keyWord->getTitle();
    }

	public function reverseTransform($str)
    {
        if (null == $str) {
            throw new TransformationFailedException('La typôlogie ne peut pas etre vide');
        }
        
        $slug = Typologie::slugify($str);
        $typo = $this->om
            ->getRepository('IfeAloesBundle:Typologie')
            ->findOneBySlug($slug);
        ;
        
        if (null === $typo)
        {
        	foreach(self::$notPersisted as &$kw)
        		if($kw->getSlug() == $slug)
        			return $kw;
        	
        	$typo = new Typologie();      	
        	$typo->setTitle($str);
       	
        	self::$notPersisted[] = $typo;
        }
        
        return $typo;
    }
}