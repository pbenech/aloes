<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourseUser
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EventUser
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Event", inversedBy="users")
     */
    private $event;

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
     * Set event
     *
     * @param \Ife\AloesBundle\Entity\Event $event
     * @return EventUser
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
     * Set user
     *
     * @param \Ife\AloesBundle\Entity\AloesUser $user
     * @return EventUser
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
