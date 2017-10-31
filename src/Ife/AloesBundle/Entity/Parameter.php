<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


use Symfony\Component\Validator\Constraints as Assert;

/**
 * Parameter
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Parameter
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * General description of the course.
     * 
     * @ORM\Column(type="text", type="text", nullable=true)
     */ 
    private $about;

    /**
     * General description of the course.
     * 
     * @ORM\Column(type="text", type="text", nullable=true)
     */ 
    private $credits;
    
    
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
     * Set about
     *
     * @param string $about
     * @return Param
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string 
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set credits
     *
     * @param string $credits
     * @return Param
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;

        return $this;
    }

    /**
     * Get credits
     *
     * @return string  
     */
    public function getCredits()
    {
        return $this->credits;
    }
    
}
