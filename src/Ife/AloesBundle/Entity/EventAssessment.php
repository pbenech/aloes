<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventAssessment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ife\AloesBundle\Entity\AssessmentObjectiveRepository")
 */
class EventAssessment
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Event", inversedBy="assessments")
     */
    private $event;

    /**
     * @ORM\ManyToOne(targetEntity="Assessment")
     */
    private $assessment;

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
     * Set event
     *
     * @param \Ife\AloesBundle\Entity\Event $event
     * @return EventAssessment
     */
    public function setEvent(\Ife\AloesBundle\Entity\Event $event = null)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \Ife\AloesBundle\Entity\Event 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set assessment
     *
     * @param \Ife\AloesBundle\Entity\Assessment $assessment
     * @return EventAssessment
     */
    public function setAssessment(\Ife\AloesBundle\Entity\Assessment $assessment = null)
    {
        $this->assessment = $assessment;

        return $this;
    }

    /**
     * Get assessment
     *
     * @return \Ife\AloesBundle\Entity\Assessment 
     */
    public function getAssessment()
    {
        return $this->assessment;
    }
}
