<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Ife\AloesBundle\Entity\User;  

/**
 * Program
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ife\AloesBundle\Entity\ProgramRepository")
 */
class Program
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     
    
    
    
    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="responsables")
     * @ORM\JoinTable(name="users_programs")
     **/    
    protected $resps; 
     
    public function addResp(User $user)
    {
        $user->addProgram($this); // synchronously updating inverse side
        $this->resps[] = $user;
    }     

   /**
     * Get resps
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResps()
    {
        return $this->resps; 
    }
    
    
  
    public function isResp($id)
    {
    	$isResp = false;   
    	foreach ($this->resps as $usr) {
    		if ($usr->getId() == $id)
    			$isResp = true;
    	}
		return $isResp;  
    } 

    
     
    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="enseignants")
     **/    
     private $enseigs;
     
    public function addEnseig(User $user)
    {
        $user->addEnseignantProgram($this); // synchronously updating inverse side
        $this->enseigs[] = $user;
    }       
    

  
    public function isEnseignant($id)
    {
    	$isEnseignant = false;   
    	foreach ($this->enseigs as $usr) {
    		if ($usr->getId() == $id)
    			$isEnseignant = true;
    	}
		return $isEnseignant;  
    }     

    /**
     * @var string
     *
     * @ORM\Column(type="string")
	 * @Assert\NotBlank()
     */
    private $title;
    

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=TRUE)
     */
    private $institution;


    /**
     * @var string
     *
     * @ORM\Column(type="string")
	 * @Assert\NotBlank()
     */
    private $label;


    /**
     * @var string
     *
     * @ORM\Column(type="text", type="text", nullable=true)
     */ 
    private $description;
    
    /**
     * @var string
     *
     * @ORM\Column(type="text", type="text", nullable=true)
     */ 
    private $competences;    
    
    


    /**
     * @ORM\Column(type="string", type="text", nullable=true)
   	* @Assert\Url()
     */
    private $url;


    /* Related entities */
    /* ================ */


    /**
     * @ORM\ManyToOne(targetEntity="AloesUser")
     */
    private $director;


    /**
     * @ORM\OneToMany(targetEntity="Goal", mappedBy="program", cascade={"remove"})
     */
    private $goals; 

 
    /**
     * @ORM\OneToMany(targetEntity="Course", mappedBy="program", cascade={"remove"})
 	 * @ORM\OrderBy({"label" = "ASC"}) 
     */
    private $courses;

    
 
    /**
     * @ORM\OneToMany(targetEntity="Parcours", mappedBy="parcours", cascade={"persist"} )
     */ 
    private $parcours;    
    

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
     * @ORM\ManyToOne(targetEntity="Level", inversedBy="levelprograms")
     */
    private $level;
        

    /**
     * Set level
     *
     * @param \Ife\AloesBundle\Entity\Level $level
     * @return Level
     */
    public function setLevel(\Ife\AloesBundle\Entity\Level $level = null)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return \Ife\AloesBundle\Entity\Level 
     */
    public function getLevel()
    {
        return $this->level;
    }    
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->goals = new \Doctrine\Common\Collections\ArrayCollection();
        $this->courses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->resps = new \Doctrine\Common\Collections\ArrayCollection();
        $this->enseigs = new \Doctrine\Common\Collections\ArrayCollection();        
        $this->parcours = new \Doctrine\Common\Collections\ArrayCollection();     
           
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Program
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
     * Set institution
     *
     * @param string $institution
     * @return Program
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;

        return $this;
    }

    /**
     * Get institution
     *
     * @return string 
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Program
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Program
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
     * Set url
     *
     * @param string $url
     * @return Program
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set director
     *
     * @param \Ife\AloesBundle\Entity\AloesUser $director
     * @return Program
     */
    public function setDirector(\Ife\AloesBundle\Entity\AloesUser $director = null)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get director
     *
     * @return \Ife\AloesBundle\Entity\AloesUser 
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Add goals
     *
     * @param \Ife\AloesBundle\Entity\Goal $goals
     * @return Program
     */
    public function addGoal(\Ife\AloesBundle\Entity\Goal $goals)
    {
        $this->goals[] = $goals;

        return $this;
    }

    /**
     * Remove goals
     *
     * @param \Ife\AloesBundle\Entity\Goal $goals
     */
    public function removeGoal(\Ife\AloesBundle\Entity\Goal $goals)
    {
        $this->goals->removeElement($goals);
    }

    /**
     * Get goals
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * Add courses
     *
     * @param \Ife\AloesBundle\Entity\Course $courses
     * @return Program
     */
    public function addCourse(\Ife\AloesBundle\Entity\Course $courses)
    {
        $this->courses[] = $courses;

        return $this;
    }

    /**
     * Remove courses
     *
     * @param \Ife\AloesBundle\Entity\Course $courses
     */
    public function removeCourse(\Ife\AloesBundle\Entity\Course $courses)
    {
        $this->courses->removeElement($courses);
    }

    /**
     * Get courses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCourses()
    {
        return $this->courses;
    }

    public function __toString() {
        return $this->label;
    }
    
    
   /**
     * Add parcours
     *
     * @param \Ife\AloesBundle\Entity\Parcours $parcours
     * @return Program
     */
    public function addParcours(\Ife\AloesBundle\Entity\Parcours $parcours)
    {
        $this->parcours[] = $parcours;

        return $this;
    }

    /**
     * Remove parcours
     *
     * @param \Ife\AloesBundle\Entity\Parcours $parcours
     */
    public function removeParcours(\Ife\AloesBundle\Entity\Parcours $parcours)
    {
        $this->parcours->removeElement($parcours);
    }

    /**
     * Get parcours
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParcours()
    {
        return $this->parcours;
    }    
    

    /**
     * Set competences
     *
     * @param string $competences
     * @return Program
     */
    public function setCompetences($competences)
    {
        $this->competences = $competences;

        return $this;
    }

    /**
     * Get competences
     *
     * @return string 
     */
    public function getCompetences()
    {
        return $this->competences;
    }    
    
}
