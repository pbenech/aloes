<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AssessmentObjective
 *
 * @ORM\Table(name="assessment_objective")
 * @ORM\Entity(repositoryClass="Ife\AloesBundle\Entity\AssessmentObjectiveRepository")
 */
class AssessmentObjective
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $rating = 1;

    /**
     * @ORM\ManyToOne(targetEntity="Assessment", inversedBy="objectives")
     */
    private $assessment;

    /**
     * @ORM\ManyToOne(targetEntity="SpecificObjective", inversedBy="assessments")
     */
    private $objective;


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
     * Set rating
     *
     * @param integer $rating
     * @return AssessmentObjective
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set assessment
     *
     * @param \Ife\AloesBundle\Entity\Assessment $assessment
     * @return AssessmentObjective
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

    /**
     * Set objective
     *
     * @param \Ife\AloesBundle\Entity\SpecificObjective $objective
     * @return AssessmentObjective
     */
    public function setObjective(\Ife\AloesBundle\Entity\SpecificObjective $objective = null)
    {
        $this->objective = $objective;

        return $this;
    }

    /**
     * Get objective
     *
     * @return \Ife\AloesBundle\Entity\SpecificObjective 
     */
    public function getObjective()
    {
        return $this->objective;
    }

    public function getTarget()
    {
        return $this->objective;
    }

    public function setSource(Assessment $source)
    {
        $this->assessment = $source;
    }

    public function setTarget(SpecificObjective $target)
    {
        $this->objective = $target;
    }
}
