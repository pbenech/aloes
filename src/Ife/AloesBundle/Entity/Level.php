<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Parameter
 *
 * @ORM\Table() 
 * @ORM\Entity(repositoryClass="Ife\AloesBundle\Entity\LevelRepository")

 */
class Level
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
     * General description of the course.
     * 
     * @ORM\Column(type="text", type="text", nullable=true)
     */ 
    private $sigle;    
    
    /**
     * @ORM\OneToMany(targetEntity="Program", mappedBy="level", cascade={"persist"})
     */
    private $levelprograms;
    


    /** 
     * Add levelprograms
     *
     * @param \Ife\AloesBundle\Entity\Program $program
     * @return Program
     */
    public function addLevelprograms(\Ife\AloesBundle\Entity\Program $program)
    {
        $this->levelprograms[] = $program;

        return $this;
    }

    /**
     * Remove levelprograms
     *
     * @param \Ife\AloesBundle\Entity\Program $program
     */
    public function removeLevelprograms(\Ife\AloesBundle\Entity\Program $program)
    {
        $this->levelprograms->removeElement($program);
    }

    /**
     * Get levelprograms
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLevelprograms()
    {
        return $this->levelprograms;
    }    
    
    
    public function __construct()
    {
        $this->levelprograms = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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

    /**
     * Set sigle
     *
     * @param string $sigle
     * @return Level
     */
    public function setSigle($sigle)
    {
        $this->sigle = $sigle;

        return $this;
    } 

    /**
     * Get title
     *
     * @return string 
     */
    public function getSigle()
    {
        return $this->sigle;
    }   
    
    
	public function __toString()
     {
        return $this->sigle;
    }      
}
