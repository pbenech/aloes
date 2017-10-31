<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ife\AloesBundle\Entity\GeneralItem;
use Ife\AloesBundle\Entity\Categorie;

use Symfony\Component\Validator\Constraints as Assert;

/** 
 * @ORM\Entity() 
 * @ORM\Table()
 */

class GeneralCompetence extends GeneralItem
{
	
	
	
    /** 
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;    

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity="Program") 
     */
    private $program;

    /**
     * Related specific competences.
     * 
     * @ORM\OneToMany(targetEntity="SpecificCompetence", mappedBy="generalCompetence", cascade={"remove"}) 
 	 * @ORM\OrderBy({"position" = "asc"})  
     */
    private $specificCompetences;
    
    
	/**
	 * @var \Doctrine\Common\Collections\Collection
	 * @Assert\Count(
	 *      max = "1", 
	 *      maxMessage="Vous devez choisir une seule catégorie"
	 * ) 
	 * @ORM\ManyToMany(targetEntity="Ife\AloesBundle\Entity\Categorie", cascade={"persist"})

	 */
	private $categories;        

	
	
	
	

    /* Aggregate weight of the competence in the program*/
    public $weight; 

    /* Edition metadata */
    /* ================ */
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $position;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created;
 
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastModified;  

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->specificCompetences = new \Doctrine\Common\Collections\ArrayCollection();
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();        
    }

    /**
     * Set id
     *
     * @param string $id
     * @return GeneralCompetence
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set title
     *
     * @param string $title
     * @return GeneralCompetence
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
     * Set position
     *
     * @param integer $position
     * @return GeneralCompetence
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
     * Set created
     *
     * @param \DateTime $created
     * @return GeneralCompetence
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
     * @return GeneralCompetence
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
     * Set program
     *
     * @param \Ife\AloesBundle\Entity\Program $program
     * @return GeneralCompetence
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
     * Add specificCompetences
     *
     * @param \Ife\AloesBundle\Entity\SpecificCompetence $specificCompetences
     * @return GeneralCompetence
     */
    public function addSpecificCompetence(\Ife\AloesBundle\Entity\SpecificCompetence $specificCompetences)
    {
        $this->specificCompetences[] = $specificCompetences;

        return $this;
    }

    /**
     * Remove specificCompetences
     *
     * @param \Ife\AloesBundle\Entity\SpecificCompetence $specificCompetences
     */
    public function removeSpecificCompetence(\Ife\AloesBundle\Entity\SpecificCompetence $specificCompetences)
    {
        $this->specificCompetences->removeElement($specificCompetences);
    }

    /**
     * Get specificCompetences
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSpecificCompetences()
    {
        return $this->specificCompetences;
    }

    
    public function setSpecificCompetences($specificCompetences)
    {
        return $this->specificCompetences = $specificCompetences;
    }    
    
    public function getChildren()
    {
        return $this->specificCompetences;
    }
    


	   
    /**
     * Add generalCompetenceCategorie
     *
     * @param \Ife\AloesBundle\Entity\Categorie $categorie
     * @return Course
     */
    public function addCategorie(\Ife\AloesBundle\Entity\Categorie $categorie)
    {
        $this->categories[] = $categorie;

        return $this;
    }

    /**
     * Remove $categorie
     *
     * @param \Ife\AloesBundle\Entity\Categorie $categorie
     */
    public function removeCategorie(\Ife\AloesBundle\Entity\Categorie $categorie)
    {
        $this->categories->removeElement($categorie);
    }

    /**
     * Get generalCompetenceCategorie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories; 
    }	 
	
}
