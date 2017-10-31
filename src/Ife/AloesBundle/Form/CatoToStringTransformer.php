<?php 

namespace Ife\AloesBundle\Form;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;

use Ife\AloesBundle\Entity\Categorie;

class CatoToStringTransformer implements DataTransformerInterface
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
            throw new TransformationFailedException('La catégorie ne peut pas etre vide');
        }
        
        $slug = Categorie::slugify($str);
        $typo = $this->om
            ->getRepository('IfeAloesBundle:Categorie')
            ->findOneBySlug($slug);
        ;
        
        if (null === $typo)
        {
        	foreach(self::$notPersisted as &$kw)
        		if($kw->getSlug() == $slug)
        			return $kw;
        	
        	$typo = new Categorie();      	
        	$typo->setTitle($str);
       	
        	self::$notPersisted[] = $typo;
        }
        
        return $typo;
    }
}