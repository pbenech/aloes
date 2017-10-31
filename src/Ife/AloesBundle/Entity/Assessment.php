<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Ife\AloesBundle\Entity\AssessmentObjective;
use Ife\AloesBundle\Entity\AssessmentObjectiveRepository;
use Ife\AloesBundle\Entity\SpecificObjective;
use Ife\AloesBundle\Entity\Typologies;
use Ife\AloesBundle\AloesModel\AbstractLinkSource;

use Symfony\Component\Validator\Constraints as Assert;


/**
 * Assessment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ife\AloesBundle\Entity\AssessmentRepository")
 */
class Assessment extends AbstractLinkSource
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @ORM\Id
     */
    private $id;
    
    

    /**
     * 
     * @ORM\Column(type="integer", nullable=true)
     */
    private $isIndividual;        
    

    /**
     * Get isIndividual
     *
     * @return boolean 
     */
    public function getIsIndividual()
    {
        return $this->isIndividual;
    }       
    
    

    /**
     * Set isIndividual
     *
     * @param boolean $isIndividual
     * @return Course
     */
    public function setIsIndividual($isIndividual)
    {
        $this->isIndividual = $isIndividual;

        return $this;
    }      
    
    /**
     * @ORM\ManyToOne(targetEntity="Event", inversedBy="assessments", cascade={"persist", "merge"})
	 * @ORM\JoinColumn(name="event_id",referencedColumnName="id")
     */
    private $event;     
    
    
	/**
	 * @var \Doctrine\Common\Collections\Collection
	 * @Assert\Count(
	 *      max = "1", 
	 *      maxMessage="Vous devez choisir un seul type de travail"
	 * ) 
	 * @ORM\ManyToMany(targetEntity="Ife\AloesBundle\Entity\Typologie", cascade={"persist"})
	 * @ORM\JoinTable(name="ass_typ",
	 *   joinColumns={
	 *     @ORM\JoinColumn(name="id_ass", referencedColumnName="id")
	 *   },
	 *   inverseJoinColumns={
	 *     @ORM\JoinColumn(name="id_typ", referencedColumnName="id")
	 *   }
	 * )
	 */
	private $typologies;    
    
    
    
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
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $weight;

    /**
     * @ORM\Column(type="datetime", nullable=TRUE)
     */
    private $deadline;

    /**
     * @ORM\ManyToOne(targetEntity="Course", inversedBy="assessments")
     */
    private $course;

    /**
     * @ORM\OneToMany(targetEntity="AssessmentObjective",
     * mappedBy="assessment", orphanRemoval=TRUE, cascade={"persist"})
     */
    private $objectiveLinks;

    /**
     * @ORM\ManyToOne(targetEntity="Topic", inversedBy="assessments")  
     */
    private $topic;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->objectiveLinks = new \Doctrine\Common\Collections\ArrayCollection();
        $this->typologies = new \Doctrine\Common\Collections\ArrayCollection();
    } 

    
    public function  __toString()
    {
    return $this->title;
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
     * @return Assessment
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
     * @return Assessment
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
     * @return Assessment
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
     * @return Assessment
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
     * Set description
     *
     * @param string $description
     * @return Assessment
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
     * Set weight
     *
     * @param float $weight
     * @return Assessment
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set deadline
     *
     * @param \DateTime $deadline
     * @return Assessment
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Get deadline
     *
     * @return \DateTime 
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set course
     *
     * @param \Ife\AloesBundle\Entity\Course $course
     * @return Assessment
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
     * Add a linked objective.
     *
     * @param Objective $objective The objective being linked. 
     */
    public function addObjective(SpecificObjective $objective, $rating = 1) 
    {
        $ao = new AssessmentObjective();
        $ao->setAssessment($this);
        $ao->setObjective($objective);
        $ao->setRating($rating);
        $this->objectiveLinks[] = $ao;        
        return $this;
    } 

    /**
     * Unlink an objective.
     *
     * @param Objective $objective Objective to unlink.
     */
    public function removeObjective(SpecificObjective $objective)
    {
        foreach ($this->objectiveLinks as $ao) {
            if ($ao->getObjective()->getId() == $objective->getId()) {
                $this->objectiveLinks->removeElement($ao);
            }
        }
    }

    /**
     * Reset the linked objectives to the given collection.
     *
     * @param Objective[] $objectives Array containing the new linked objectives.
     */
    public function setObjectives($objectives)
    {
        // Remember the ratings before clearing out old links.
        $ratings = array();
        foreach ($this->objectiveLinks as $link) {
            $ratings[$link->getObjective()->getId()] = $link->getRating();
        }

        $this->objectiveLinks->clear();

        // Add each objective, possibly again with its old rating.
        foreach($objectives as $o) {
            $r = (array_key_exists($o->getId(), $ratings)) ? $ratings[$o->getId()] : 1;
            $this->addObjective($o, $r);
        }
        return $this;
    }

    /**
     * Get the ids of all linked objectives.
     *
     * @return int[]
     */
    public function getObjectiveIds()
    {
        return $this->getObjectiveLinks()->map(function ($ao) {
            return $ao->getObjective()->getId();
        })->toArray();
    }

    /**
     * Returns the array of all linked objectives, with the
     * corresponding weights.
     *
     * @return SpecificObjective[]
     */
    public function getObjectives()
    {

        if (count($this->objectiveLinks) == 0) return array();
        
        $s = array_reduce($this->objectiveLinks->toArray(),
                          function($c,$ao){
                              return $c + $ao->getRating();
                          },0);
        
        return $this->getObjectiveLinks()->map(function ($ao) use ($s) {
            $o = $ao->getObjective();
            $o->weight = round($ao->getRating() / $s, 2);
            return $o;
        })->toArray();
    }

    public function getObjectiveCount()
    {
        return $this->objectiveLinks->count();
    }

    /**
     * Get objective links 
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getObjectiveLinks()
    {
        return $this->objectiveLinks;
    }
    

    /**
     * Set topic
     *
     * @param \Ife\AloesBundle\Entity\Topic $topic
     * @return Assessment
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

    protected function createLink()
    {
        return new AssessmentObjective();
    }

    public function getLinks()
    {
        return $this->objectiveLinks;
    }

    /**
     * Add objectiveLinks
     *
     * @param \Ife\AloesBundle\Entity\AssessmentObjective $objectiveLinks
     * @return Assessment
     */
    public function addObjectiveLink(\Ife\AloesBundle\Entity\AssessmentObjective $objectiveLinks)
    {
        $this->objectiveLinks[] = $objectiveLinks;

        return $this;
    }

    /**
     * Remove objectiveLinks
     *
     * @param \Ife\AloesBundle\Entity\AssessmentObjective $objectiveLinks
     */
    public function removeObjectiveLink(\Ife\AloesBundle\Entity\AssessmentObjective $objectiveLinks)
    {
        $this->objectiveLinks->removeElement($objectiveLinks);
    }
    
    
/**
 * Set desk
 *
 * @param Ife\AloesBundle\Entity\Event $event
 */
public function setEvent(\Ife\AloesBundle\Entity\Event $event = null)
{
    $this->event = $event;
}
 
/**
 * Get desk
 *
 * @return Ife\AloesBundle\Entity\Event
 */
public function getEvent()
{
    return $this->event;
}    



 
	/**
	 * Add typologies
	 *
	 * @param \Ife\AloesBundle\Entity\Typologie $typologies

	 */
	public function addTypologie(\Ife\AloesBundle\Entity\Typologie $typologies)
	{
		$this->typologies[] = $typologies;

		return $this;
	}

	/**
	 * Remove typologies
	 *
	 * @param \Ife\AloesBundle\Entity\Typologie $typologies
	 */
	public function removeTypologie(\Ife\AloesBundle\Entity\Typologie $typologies)
	{
		$this->typologies->removeElement($typologies);
	}

	/**
	 * Get typologies
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getTypologies()
	{
		return $this->typologies;
	}

}
