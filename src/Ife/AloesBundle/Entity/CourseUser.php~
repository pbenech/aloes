<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourseUser
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CourseUser
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Course")
     */
    private $course;

    /**
     * @ORM\ManyToOne(targetEntity="AloesUser")
     */
    private $user;

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
     * Set course
     *
     * @param \Ife\AloesBundle\Entity\Course $course
     * @return CourseUser
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
     * Set user
     *
     * @param \Ife\AloesBundle\Entity\AloesUser $user
     * @return CourseUser
     */
    public function setUser(\Ife\AloesBundle\Entity\AloesUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Ife\AloesBundle\Entity\AloesUser 
     */
    public function getUser()
    {
        return $this->user;
    }
}
