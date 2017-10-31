<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Ife\AloesBundle\Entity\Typologie;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Session
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ife\AloesBundle\Entity\TopicRepository")
 */
class Topic  
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;


    /**
     * Does the course sometimes occur face to face ? (Not
     * incompatible with also being at distance.)
     * 
     * @ORM\Column(type="integer", nullable=true)
     */
    private $isFaceToFace;    
    
    public $fc;    
    
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $startDate;

    
    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $hdeb;    
    
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $endDate;

    
    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $hfin;    
        
    
    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="string")
     */
    private $place;    
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /* Related entities */
    /* ================ */

    /**
     * @ORM\ManyToOne(targetEntity="Course")
     */
    private $course;

    /**
     * @ORM\OneToMany(targetEntity="Event", mappedBy="topic")
     */
    private $events;

    /**
     * @ORM\OneToMany(targetEntity="Assessment", mappedBy="topic")
     */
    private $assessments;
    
    
    
	/**
	 * @var \Doctrine\Common\Collections\Collection
	 * @Assert\Count(
	 *      max = "1", 
	 *      maxMessage="Vous devez choisir une seule thématique"
	 * ) 
	 * 
	 * @ORM\ManyToMany(targetEntity="Ife\AloesBundle\Entity\Typologie", cascade={"persist"})

	 */  
	private $typologies;        
    
    
     
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
        $this->assessments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->typologies = new \Doctrine\Common\Collections\ArrayCollection();        
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
     * @return Topic
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getFc()
    {
        return $this->fc;
    }


    public function setFc($fc)
    {
        $this->fc = $fc;

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
     * @return Topic
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
     * Set hdeb
     *
     * @param \Time $hdeb
     * @return Topic
     */
    public function setHdeb($hdeb)
    {
        $this->hdeb = $hdeb;

        return $this;
    }

    
    
    /**
     * Get hdeb
     *
     * @return \Time 
     */
    public function getHdeb()
    {
        return $this->hdeb;
    }

    
    /**
     * Set hfin
     *
     * @param \Time $hfin
     * @return Topic
     */
    public function setHfin($hfin)
    {
        $this->hfin = $hfin;

        return $this;
    }

    
    
    /**
     * Get hfin
     *
     * @return \Time 
     */
    public function getHfin()
    {
        return $this->hfin;
    }    
    
    

    /**
     * Get isFaceToFace
     *
     * @return boolean 
     */
    public function getIsFaceToFace()
    {
        return $this->isFaceToFace;
    }    
    
    /**
     * Set description
     *
     * @param string $description
     * @return Topic
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
     * Set course
     *
     * @param \Ife\AloesBundle\Entity\Course $course
     * @return Topic
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
     * Add events
     *
     * @param \Ife\AloesBundle\Entity\Event $events
     * @return Topic
     */
    public function addEvent(\Ife\AloesBundle\Entity\Event $events)
    {
        $this->events[] = $events;

        return $this;
    }

    /**
     * Remove events
     *
     * @param \Ife\AloesBundle\Entity\Event $events
     */
    public function removeEvent(\Ife\AloesBundle\Entity\Event $events)
    {
        $this->events->removeElement($events);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Add assessments
     *
     * @param \Ife\AloesBundle\Entity\Assessment $assessments
     * @return Topic
     */
    public function addAssessment(\Ife\AloesBundle\Entity\Assessment $assessments)
    {
        $this->assessments[] = $assessments;

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
     * Set isFaceToFace
     *
     * @param boolean $isFaceToFace
     * @return Course
     */
    public function setIsFaceToFace($isFaceToFace)
    {
        $this->isFaceToFace = $isFaceToFace;

        return $this;
    }    
    
    /**
     * Set title
     *
     * @param string $title
     * @return Topic
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
     * Set place
     *
     * @param string $place
     * @return Topic
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }     
    
    
    /**
     * Computes the total weight of the topic.
     * 
     */
    public function getWeight()
    {
        if (!$this->assessments->count()) return 0;

        $sum = 0;
        foreach ($this->assessments as $a)
        {
            $sum += $a->getWeight();
        }
        return $sum;
    }        

	public function __toString()
     {
        return $this->title;
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
	
}
