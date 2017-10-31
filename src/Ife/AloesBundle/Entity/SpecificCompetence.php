<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Competence
 *
 * @ORM\Entity(repositoryClass="Ife\AloesBundle\Entity\SpecificCompetenceRepository")
 * @ORM\Table(name="specific_competence")
 */
class SpecificCompetence
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
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
     */
    private $title;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $position;

    /**
     * @ORM\ManyToOne(targetEntity="Program")
     */
    private $program; 
    
    
    /**
     * @var string
     *
     * @ORM\Column(type="text", type="text", nullable=true)
     */ 
    private $description;    
    

    /**
     * @ORM\ManyToOne(targetEntity="GeneralCompetence", 
     * inversedBy="specifics")
     */
    private $generalCompetence; 

    /** 
     * @ORM\OneToMany(targetEntity="ObjectiveCompetence", 
     * mappedBy="competence", orphanRemoval=TRUE, cascade={"persist"}))
     */
    private $objectiveLinks;
 
    /* Public properties used in templates */

    public $weight;

    public $isSelected;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->objectives = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return SpecificCompetence
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
     * @return SpecificCompetence
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
     * @return SpecificCompetence
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
     * @return SpecificCompetence
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
     * Set program
     *
     * @param \Ife\AloesBundle\Entity\Program $program
     * @return SpecificCompetence
     */
    public function setProgram(\Ife\AloesBundle\Entity\Program $program = null)
    {
        $this->program = $program;

        return $this;
    }

    /**
     * Get program
     *
     * @return \Ife\AloesBundle\Entity\Program 
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Set generalCompetence
     *
     * @param \Ife\AloesBundle\Entity\GeneralCompetence $generalCompetence
     * @return SpecificCompetence
     */
    public function setGeneralCompetence(\Ife\AloesBundle\Entity\GeneralCompetence $generalCompetence = null)
    {
        $this->generalCompetence = $generalCompetence;

        return $this;
    }

    /**
     * Get generalCompetence
     *
     * @return \Ife\AloesBundle\Entity\GeneralCompetence 
     */
    public function getGeneralCompetence()
    {
        return $this->generalCompetence;
    }

    /**
     * Add objectives
     *
     * @param \Ife\AloesBundle\Entity\ObjectiveCompetence $objectives
     * @return SpecificCompetence
     */
    public function addObjective(\Ife\AloesBundle\Entity\ObjectiveCompetence $objectives)
    {
        $this->objectives[] = $objectives;

        return $this;
    }

    /**
     * Remove objectives
     *
     * @param \Ife\AloesBundle\Entity\ObjectiveCompetence $objectives
     */
    public function removeObjective(\Ife\AloesBundle\Entity\ObjectiveCompetence $objectives)
    {
        $this->objectives->removeElement($objectives);
    }

    /**
     * Get objectives
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getObjectives()
    {
        return $this->objectives;
    }

    /**
     * Add objectiveLinks
     *
     * @param \Ife\AloesBundle\Entity\ObjectiveCompetence $objectiveLinks
     * @return SpecificCompetence
     */
    public function addObjectiveLink(\Ife\AloesBundle\Entity\ObjectiveCompetence $objectiveLinks)
    {
        $this->objectiveLinks[] = $objectiveLinks;

        return $this;
    }

    /**
     * Remove objectiveLinks
     *
     * @param \Ife\AloesBundle\Entity\ObjectiveCompetence $objectiveLinks
     */
    public function removeObjectiveLink(\Ife\AloesBundle\Entity\ObjectiveCompetence $objectiveLinks)
    {
        $this->objectiveLinks->removeElement($objectiveLinks);
    }

    /**
     * Get objectiveLinks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getObjectiveLinks()
    {
        return $this->objectiveLinks;
    }
    
    public function __toString()
    { 
        return $this->getTitle(); 
    }    
    
    
    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return Program
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }    
    
    
}
