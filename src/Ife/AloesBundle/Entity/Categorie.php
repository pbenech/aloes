<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


use Symfony\Component\Validator\Constraints as Assert;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="Ife\AloesBundle\Entity\CategorieRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Categorie
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    
     /**
     * @ORM\Column(type="string")
	 * @Assert\NotBlank()
     */
    private $title;   

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }    
       

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    
    /**
     * Set title
     *
     * @param string $title
     * @return Course
     */
    public function setTitle($title)
    {
    	$this->slug = Categorie::slugify($title);    	
    	
        $this->title = $title;

        return $this;
    }    
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=200)
     */
    private $slug;    

    
    public static function slugify($str)
    {
		$bad  = array( 'à','á','â','ã','ä','å','ç','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ù','ú','û','ü','ı','ÿ','œ','æ','µ', '-');
		$good = array( 'a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','u','u','u','u','y','y','oe','ae','u',' ');
		
		$r = mb_strtolower($str, 'UTF-8');
		$r = str_replace( $bad, $good, $r );
		$str = preg_replace('/[^a-z0-9\s]/', '?', $str);
		$str = trim($str);
		return $r;
    }    
    

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }    
    
    
    /**
     * Set slug
     *
     * @param string $slug
     * @return KeyWord
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }    
    
}