<?php
namespace Ife\AloesBundle\Entity;

use Ife\AloesBundle\Entity\ObjectiveCompetence;
use Ife\AloesBundle\Entity\SpecificCompetence;
use Ife\AloesBundle\AloesModel\AbstractLinkSource;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Objective
 *
 * @ORM\Table(name="specific_objective")
 * @ORM\Entity(repositoryClass="Ife\AloesBundle\Entity\SpecificObjectiveRepository")
 */
class SpecificObjective extends AbstractLinkSource
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
     * @ORM\Column(type="integer", nullable=true)
     */
    private $position;

    /**
     * @ORM\ManyToOne(targetEntity="Course", inversedBy="objectives")
     */
    private $course;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $title; 

    /**
     * @ORM\ManyToOne(targetEntity="GeneralObjective", inversedBy="specificObjectives")
     */
    private $generalObjective; 
 
    /**
     * @ORM\OneToMany(targetEntity="AssessmentObjective", 
     * mappedBy="objective", orphanRemoval=TRUE, cascade={"persist"})
     */
    private $assessmentLinks;

    /** 
     * @ORM\OneToMany(targetEntity="ObjectiveCompetence", 
     * mappedBy="objective", orphanRemoval=TRUE, cascade={"persist"})
     */
    private $competenceLinks;

    /**
     * Importance of the objective in the course.
     */
    public $weight;


    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public $isSelected = false;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->assessmentLinks = new \Doctrine\Common\Collections\ArrayCollection();
        $this->competenceLinks = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set created
     *
     * @param \DateTime $created
     * @return SpecificObjective
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
     * @return SpecificObjective
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
     * Set position
     *
     * @param integer $position
     * @return SpecificObjective
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
     * Set title
     *
     * @param string $title
     * @return SpecificObjective
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
     * Set course
     *
     * @param \Ife\AloesBundle\Entity\Course $course
     * @return SpecificObjective
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
     * Set generalObjective
     *
     * @param \Ife\AloesBundle\Entity\GeneralObjective $generalObjective
     * @return SpecificObjective
     */
    public function setGeneralObjective(\Ife\AloesBundle\Entity\GeneralObjective $generalObjective = null)
    {
        $this->generalObjective = $generalObjective;

        return $this;
    }

    /**
     * Get generalObjective
     *
     * @return \Ife\AloesBundle\Entity\GeneralObjective 
     */
    public function getGeneralObjective()
    {
        return $this->generalObjective;
    }

    /* Assessment links */
    /* ================ */

    /**
     * Add assessmentLinks
     *
     * @param \Ife\AloesBundle\Entity\AssessmentObjective $assessmentLinks
     * @return SpecificObjective
     */
    public function addAssessmentLink(\Ife\AloesBundle\Entity\AssessmentObjective $ao)
    {
        $this->assessmentLinks[] = $ao;

        return $this;
    }

    /**
     * Remove assessmentLinks
     *
     * @param \Ife\AloesBundle\Entity\AssessmentObjective $assessmentLinks
     */
    public function removeAssessmentLink(\Ife\AloesBundle\Entity\AssessmentObjective $ao)
    {
        $this->assessmentLinks->removeElement($ao);
    }

    /**
     * Get assessmentLinks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssessmentLinks()
    {
        return $this->assessmentLinks;
    }

    /* Competence links */
    /* ================ */

    /**
     * Add link to competence
     *
     * @param \Ife\AloesBundle\Entity\ObjectiveCompetence $oc
     * @return SpecificObjective
     */
    public function addCompetenceLink(\Ife\AloesBundle\Entity\ObjectiveCompetence $oc)
    {
        $this->competenceLinks[] = $oc;

        return $this;
    }

    /**
     * Remove link to competence
     *
     * @param \Ife\AloesBundle\Entity\ObjectiveCompetence $competenceLinks
     */
    public function removeCompetenceLink(\Ife\AloesBundle\Entity\ObjectiveCompetence $oc)
    {
        $this->competenceLinks->removeElement($oc);
    }

    /**
     * Get the links to competences
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCompetenceLinks()
    {
        return $this->competenceLinks;
    }

    /* Implementation of parent abstract methods */
    /* ========================================= */

    protected function createLink()
    {
        return new ObjectiveCompetence();
    }

    public function getLinks() 
    {
        return $this->competenceLinks;
    }    
}
