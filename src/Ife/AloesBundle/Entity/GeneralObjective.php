<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ife\AloesBundle\Entity\GeneralItem;


use Symfony\Component\Validator\Constraints as Assert;

/** 
 * @ORM\Entity() 
 * @ORM\Table(name="general_objective")
 */

class GeneralObjective extends GeneralItem
{
    /** @ORM\Id
     *  @ORM\Column(type="integer")
     *  @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastModified;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $title;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $position;

    /**
     * @ORM\ManyToOne(targetEntity="Course") 
     */
    private $course;
 
    /** 
     * @ORM\OneToMany(targetEntity="SpecificObjective", mappedBy="generalObjective") 
 	 * @ORM\OrderBy({"position" = "asc"})  
     */  
    private $specificObjectives; 

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->specificObjectives = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return GeneralObjective
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set lastModified
     *
     * @param \DateTime $lastModified
     * @return GeneralObjective
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * Get lastModified
     *
     * @return \DateTime 
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return GeneralObjective
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
     * Set position
     *
     * @param integer $position
     * @return GeneralObjective
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
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
     * Add specificObjectives
     *
     * @param \Ife\AloesBundle\Entity\SpecificObjective $specificObjectives
     * @return GeneralObjective
     */
    public function addSpecificObjective(\Ife\AloesBundle\Entity\SpecificObjective $specificObjectives)
    {
        $this->specificObjectives[] = $specificObjectives;

        return $this;
    }

    /**
     * Remove specificObjectives
     *
     * @param \Ife\AloesBundle\Entity\SpecificObjective $specificObjectives
     */
    public function removeSpecificObjective(\Ife\AloesBundle\Entity\SpecificObjective $specificObjectives)
    {
        $this->specificObjectives->removeElement($specificObjectives);
    }

    /**
     * Get specificObjectives
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSpecificObjectives()
    {
        return $this->specificObjectives;
    }

    /* An alias for getSpecificObjectives */
    public function getChildren() 
    {
        return $this->getSpecificObjectives();
    }

}
