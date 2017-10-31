<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


use Ife\AloesBundle\Entity\User;  
use Ife\AloesBundle\Entity\Course;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Course
 *
 * @ORM\Table(name="parcours")
 * @ORM\Entity(repositoryClass="Ife\AloesBundle\Entity\ParcoursRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Parcours
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
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
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
     * Set title
     *
     * @param string $title
     * @return Course
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Program", inversedBy="parcours")
     */
    private $program;
    
    /**
     * Set program
     *
     * @param  \Ife\AloesBundle\Entity\Program $program
     * @return Course
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
	 * @ORM\ManyToMany(targetEntity="Course", inversedBy="parcours", cascade={"persist"})
	 * @ORM\JoinTable(name="parcours_course")
     */
    private $cours;       
 
    /**
     * Add Course
     *
     * @param Course $course
     */ 
    public function addCours(Course $course)
    {

   		$this->cours[] = $course;
    	return $this;	
    }
  
	/**
	 * Add Users to this Attachment
	 * 
	 * @param ArrayCollection
	 */
	public function setCours($courses)
	{
	    $this->cours = $courses;
	}    
    
 
	/**
	 * Get associated users
	 *
	 * @return ArrayCollection 
	 */
	public function getCours()
	{
	    return $this->cours;
	}


    public function removeCours(\Ife\AloesBundle\Entity\Course $courses)
    {
        $this->cours->removeElement($courses);
    }    
	
	
    /**
     * Constructor
     */
    public function __construct()
    {
      	$this->cours 		= new \Doctrine\Common\Collections\ArrayCollection();      
    }      
    

    public function __toString() 
    {
      return $this->title ;
    }    
    
    
}