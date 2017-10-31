<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Parameter
 *
 * @ORM\Table() 
 * @ORM\Entity(repositoryClass="Ife\AloesBundle\Entity\SemestreRepository")

 */
class Semestre
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * General description of the course.
     * 
     * @ORM\Column(type="text", type="text", nullable=true)
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
     * Set title
     *
     * @param string $title
     * @return Level
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
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

  
    
	public function __toString()
     {
        return $this->title;
    }      
}
