<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Session
 *
 * @ORM\Table
 * @ORM\Entity(repositoryClass="Ife\AloesBundle\Entity\EventRepository")
 */
class Event
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
     * @ORM\Column(type="datetime")
	 * @Assert\NotBlank()
     */
    private $startDate;

    /** 
     * @ORM\Column(type="datetime", nullable=true)
     */ 
    private $endDate;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;


    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contexte;    
    

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $outils;       
    
    /**
     * "Consignes" in french.
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $instructions;

    /**
     * Description of the way tutoring is given for this work topic.
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $tutoring;


    /**
     * Useful resources for this work topic.
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $resources;

       
 
    /* Related entities */
    /* ================ */

    
    /**
     * @ORM\OneToMany(targetEntity="Assessment", mappedBy="event", cascade={"persist", "merge"})
     */     
    private $assessments;  
 
    /**
     * @ORM\OneToMany(targetEntity="EventUser", mappedBy="event")
     */
    private $users;
   
    /**
     * @ORM\ManyToOne(targetEntity="Course")
     */
    private $course;

    /**
     * @ORM\ManyToOne(targetEntity="Topic")
     */
    private $topic;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->assessments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function initAssessments()
    {
        $this->assessments = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Event
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Event
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Event
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
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
     * Set instructions
     *
     * @param string $instructions
     * @return Event
     */
    public function setInstructions($instructions)
    {
        $this->instructions = $instructions;

        return $this;
    }

    /**
     * Get instructions
     *
     * @return string 
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Set tutoring
     *
     * @param string $tutoring
     * @return Event
     */
    public function setTutoring($tutoring)
    {
        $this->tutoring = $tutoring;

        return $this;
    }

    /**
     * Get tutoring
     *
     * @return string 
     */
    public function getTutoring()
    {
        return $this->tutoring;
    }

    /**
     * Set resources
     *
     * @param string $resources
     * @return Event
     */
    public function setResources($resources)
    {
        $this->resources = $resources;

        return $this;
    }

    /**
     * Get resources
     *
     * @return string 
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * Add assessments
     *
     * @param \Ife\AloesBundle\Entity\Assessment $assessments
     * @return Event
     */
    public function addAssessment(\Ife\AloesBundle\Entity\Assessment $assessments)
    {
    	$assessments->setEvent($this);
    	
            // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        if (!$this->assessments->contains($assessments)) {
        	$this->assessments[] = $assessments;
        }    	
    	


        return $this;
    }

    /**
     * Remove assessments
     *
     * @param \Ife\AloesBundle\Entity\Assessment $assessments
     */
    public function removeAssessment(\Ife\AloesBundle\Entity\Assessment $assessments)
    {
        $this->assessments->removeElement($assessments);
    }
 
    /**
     * Get assessments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssessments()
    {
        return $this->assessments;
    }

    /**
     * Add users
     *
     * @param \Ife\AloesBundle\Entity\EventUser $users
     * @return Event
     */
    public function addUser(\Ife\AloesBundle\Entity\EventUser $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Ife\AloesBundle\Entity\EventUser $users
     */
    public function removeUser(\Ife\AloesBundle\Entity\EventUser $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set course
     *
     * @param \Ife\AloesBundle\Entity\Course $course
     * @return Event
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
     * Set topic
     *
     * @param \Ife\AloesBundle\Entity\Topic $topic
     * @return Event
     */
    public function setTopic(\Ife\AloesBundle\Entity\Topic $topic = null)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get topic
     *
     * @return \Ife\AloesBundle\Entity\Topic 
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Event
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

    /**
     * Set contexte
     *
     * @param string $contexte
     * @return Event
     */
    public function setContexte($contexte)
    {
        $this->contexte = $contexte;

        return $this;
    }

    /**
     * Get contexte
     *
     * @return string 
     */ 
    public function getContexte()
    {
        return $this->contexte;
    }    


    /**
     * Set outils
     *
     * @param string $outils
     * @return Event
     */
    public function setOutils($outils)
    {
        $this->outils = $outils;

        return $this;
    }

    /**
     * Get outils
     *
     * @return string 
     */ 
    public function getOutils()
    {
        return $this->outils;
    }      

}
