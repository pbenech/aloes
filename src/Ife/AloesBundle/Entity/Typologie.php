<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


use Ife\AloesBundle\Entity\User;  

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Typologie
 *
 * @ORM\Table(name="typologie")
 * @ORM\Entity(repositoryClass="Ife\AloesBundle\Entity\TypologieRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Typologie
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    
    /**
     * @ORM\ManyToOne(targetEntity="Course") 
     */
    private $course;    
    
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
    	$this->slug = Typologie::slugify($title);    	
    	
        $this->title = $title;

        return $this;
    }    
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=200)
     */
    private $slug;    
    
    /**
     * Get course
     *
     * @return \Ife\AloesBundle\Entity\Course 
     */
    public function getCourse()
    {
        return $this->course;
    }

    
    /**
     * Set course
     *
     * @param \Ife\AloesBundle\Entity\Course $course
     * @return GeneralObjective
     */
    public function setCourse(\Ife\AloesBundle\Entity\Course $course = null)
    {
        $this->course = $course;

        return $this;
    }    
    

    
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