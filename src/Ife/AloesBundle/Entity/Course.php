<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


use Ife\AloesBundle\Entity\User;  
use Ife\AloesBundle\Entity\Parcours;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Course
 *
 * @ORM\Table(name="course")
 * @ORM\Entity(repositoryClass="Ife\AloesBundle\Entity\CourseRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Course
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
    private $label;

    /**
     * @ORM\Column(type="string")
	 * @Assert\NotBlank()
     */
    private $title;

    /**
     * General description of the course.
     * 
     * @ORM\Column(type="text", type="text", nullable=true)
     */ 
    private $description;

    /**
     * General evaluation of the course.
     * 
     * @ORM\Column(type="text", type="text", nullable=true)
     */ 
    private $evaluation;
    
    
    /**
     * Preamble to the list of course objectives.
     * 
     * @ORM\Column(type="text", type="text", nullable=true)
     */
    private $objectivesPreamble;

    /**
     * Preamble to the list of course assessments.
     * 
     * @ORM\Column(type="text", type="text", nullable=true)
     */
    private $assessmentsPreamble;

    /**
     * Description of the course pedagogy.
     * 
     * @ORM\Column(type="text", type="text", nullable=true)
     */
    private $pedagogy;

    /**
     * Description of the course pedagogy.
     * 
     * @ORM\Column(type="text", type="text", nullable=true)
     */
    private $infos;    
    
    
    /**
     * Description of the course rules.
     * 
     * @ORM\Column(type="text", type="text", nullable=true)
     */
    private $rules;

    
    /**
     * Description of the course resources (bibliography and webography).
     * 
     * @ORM\Column(type="text", type="text", nullable=true)
     */
    private $resources;


    /**
     * Miscellaneous information.
     * 
     * @ORM\Column(type="text", type="text", nullable=true)
     */
    private $miscellaneous;

    /**
     * @ORM\Column(type="string", type="text", nullable=true)
     */
    private $institution;    

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $credits;

    /**
     * @ORM\Column(type="string", type="text", nullable=true)
     */
    private $semester;

    /**
     * The year of the described course offering.
     * 
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Range(
     *      min = 2000,
     *      max = 2100)
     */
    private $year;
    
    /**
     * Wether the course is mandatory in the program or not.
     * 
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isOptional;

    /**
     * Language in which the course is taught.
     * 
     * @ORM\Column(type="string", nullable=true)
     */
    private $language;

    /**
     * The time slot during which the course is given. For example
     * "Monday afternoons"
     * 
     * @ORM\Column(type="string", nullable=true)
     */
    private $timeSlot;

    /**
     * Where the course takes place. For example: "Room 117"
     * 
     * @ORM\Column(type="string", nullable=true)
     */
    private $location;
   
    /**
     * Does the course sometimes occur face to face ? (Not
     * incompatible with also being at distance.)
     * 
     * @ORM\Column(type="integer", nullable=true)
     */
    private $isFaceToFace;
    
    /**
     * Does the course sometimes occur at distance ? (Not incompatible
     * with also being face to face.)
     * 
     * @ORM\Column(type="integer", nullable=true)
     */
    private $isRemote;

    /**
     * Keywords describing the course content.
     * 
     * @ORM\Column(type="string", nullable=true)
     */
    private $keywords;
    
    /**
     * @ORM\Column(type="string", nullable=true)
   	* @Assert\Url()
     */
    private $url_ped;    

    /**
     * @ORM\Column(type="string", nullable=true)
   	* @Assert\Url()
     */
    private $url_web;       

    /**
     * @ORM\Column(type="string", nullable=true)
   	* @Assert\Url()
     */
    private $url_twi;     

    /**
     * @ORM\Column(type="string", nullable=true)
   	* @Assert\Url()
     */
    private $url_aut;       

    /* Related entities */
    /* ================ */

    /**
     * @ORM\ManyToOne(targetEntity="Program", inversedBy="courses")
     */
    private $program;

    /**
     * @ORM\OneToMany(targetEntity="LearningEnvironment", mappedBy="course")
     */
    private $environments;

    /**
	 * @ORM\ManyToMany(targetEntity="Course", cascade={"persist"})
     */
    private $prerequisites;

    /**
	 * @ORM\ManyToMany(targetEntity="Course", cascade={"persist"})
	 * @ORM\JoinTable(
     *      name="course_concurent")
     */
    private $concurrentCourses;    

    
    /**
	 * @ORM\ManyToMany(targetEntity="Langue", cascade={"persist"})
	 * @ORM\JoinTable(
     *      name="course_langue")
     */
    private $langues;        

    
    /**
	 * @ORM\ManyToMany(targetEntity="Semestre", cascade={"persist"})
	 * @ORM\JoinTable(
     *      name="course_semester")
     */
    private $semestres;        
        
    

    /**
     * Add courseLangue
     *
     * @param \Ife\AloesBundle\Entity\Langue $langue
     * @return Course
     */
    public function addLangues(\Ife\AloesBundle\Entity\Langue $langue)
    {
        $this->langues[] = $langue;

        return $this;
    }

    /**
     * Remove $langue
     *
     * @param \Ife\AloesBundle\Entity\Langue $langue
     */
    public function removeLangues(\Ife\AloesBundle\Entity\Langue $langue)
    {
        $this->langues->removeElement($langue);
    }

    /**
     * Get concurrentCourses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLangues()
    {
        return $this->langues;
    }    
    
    
    

    /**
     * Add courseSemestre
     *
     * @param \Ife\AloesBundle\Entity\Semestre $semestre
     * @return Course
     */
    public function addSemestre(\Ife\AloesBundle\Entity\Semestre $semestre)
    {
        $this->semestres[] = $semestre;

        return $this;
    }

    /**
     * Remove $semestre
     *
     * @param \Ife\AloesBundle\Entity\Semestre $semestre
     */
    public function removeSemestre(\Ife\AloesBundle\Entity\Semestre $semestre)
    {
        $this->langues->removeElement($semestre);
    }

    /**
     * Get concurrentCourses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSemestres()
    {
        return $this->semestres; 
    }        
    
    
    /**
     * @ORM\OneToMany(targetEntity="Topic", mappedBy="course", cascade={"remove"})
     */
    private $topics;

    /**
     * @ORM\OneToMany(targetEntity="Event", mappedBy="course", cascade={"remove"})
     * @ORM\OrderBy({"startDate" = "ASC"})
     */
    private $events;

    /**
     * @ORM\OneToMany(targetEntity="Assessment", mappedBy="course", cascade={"remove"})
     */
    private $assessments;
    
    /**
     * @ORM\OneToMany(targetEntity="GeneralObjective", mappedBy="course", cascade={"remove"} )
     */
    private $objectives;
            

    /**
     * @ORM\OneToMany(targetEntity="Typologie", mappedBy="course", cascade={"remove"})
     */
    private $typologies;    
    
    
    /* Métadonnées de publication */
    /* ========================== */

    /**
     * @ORM\Column(type="string")
	 * @Assert\NotBlank()
     */
    private $publicationState;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created;

    

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
     * Set label
     *
     * @param string $label
     * @return Course
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
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set isOptional
     *
     * @param boolean $isOptional
     * @return Course
     */
    public function setIsOptional($isOptional)
    {
        $this->isOptional = $isOptional;

        return $this;
    }

    /**
     * Get isOptional
     *
     * @return boolean 
     */
    public function getIsOptional()
    {
        return $this->isOptional;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Course
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Set evaluation
     *
     * @param string $evaluation
     * @return Course
     */
    public function setEvaluation($evaluation)
    {
        $this->evaluation = $evaluation;

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
     * Get evaluation
     *
     * @return string 
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }    
    
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

    public function __toString() 
    {
      return $this->label ;
    }

    public function getWeightInProgram() {

      $s = $this->program->getEctsSum();
      
      if ($s == 0)
	throw new Exception('Sum of ects for program '.
			    $this->program->getLabel().
			    ' is zero'); 

      return floatval($this->ects/$s);
    }

    public function toArray() {
      $a = array();

      $a["id"] = $this->id;
      $a["label"] = $this->label;
      $a["description"] = $this->description;
      $a["title"] = $this->title;
      $a["ects"] = $this->ects;
      $a["weight"] = $this->getWeightInProgram();

      return $a;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->environments 	= new \Doctrine\Common\Collections\ArrayCollection();
        $this->topics 			= new \Doctrine\Common\Collections\ArrayCollection();
        $this->events 			= new \Doctrine\Common\Collections\ArrayCollection();
        $this->assessments 		= new \Doctrine\Common\Collections\ArrayCollection();
        $this->objectives 		= new \Doctrine\Common\Collections\ArrayCollection();
        $this->redacteurs 		= new \Doctrine\Common\Collections\ArrayCollection();        
        $this->langues 			= new \Doctrine\Common\Collections\ArrayCollection();    
        $this->typologies 		= new \Doctrine\Common\Collections\ArrayCollection();  
      	$this->parcours 		= new \Doctrine\Common\Collections\ArrayCollection();
        
    }  

    /**
     * Set objectivesPreamble
     *
     * @param string $objectivesPreamble
     * @return Course
     */
    public function setObjectivesPreamble($objectivesPreamble)
    {
        $this->objectivesPreamble = $objectivesPreamble;

        return $this;
    }

    /**
     * Get objectivesPreamble
     *
     * @return string 
     */
    public function getObjectivesPreamble()
    {
        return $this->objectivesPreamble;
    }

    /**
     * Set assessmentsPreamble
     *
     * @param string $assessmentsPreamble
     * @return Course
     */
    public function setAssessmentsPreamble($assessmentsPreamble)
    {
        $this->assessmentsPreamble = $assessmentsPreamble;

        return $this;
    }

    /**
     * Get assessmentsPreamble
     *
     * @return string 
     */
    public function getAssessmentsPreamble()
    {
        return $this->assessmentsPreamble;
    }

    /**
     * Set pedagogy
     *
     * @param string $pedagogy
     * @return Course
     */
    public function setPedagogy($pedagogy)
    {
        $this->pedagogy = $pedagogy;

        return $this;
    }

    /**
     * Get pedagogy
     *
     * @return string 
     */
    public function getPedagogy()
    {
        return $this->pedagogy;
    }

    /**
     * Set rules
     *
     * @param string $rules
     * @return Course
     */
    public function setRules($rules)
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * Get rules
     *
     * @return string 
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Set resources
     *
     * @param string $resources
     * @return Course
     */
    public function setResources($resources)
    {
        $this->resources = $resources;

        return $this;
    }

    /**
     * Get resources
     *
     * @return string 
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * Set miscellaneous
     *
     * @param string $miscellaneous
     * @return Course
     */
    public function setMiscellaneous($miscellaneous)
    {
        $this->miscellaneous = $miscellaneous;

        return $this;
    }

    /**
     * Get miscellaneous
     *
     * @return string 
     */
    public function getMiscellaneous()
    {
        return $this->miscellaneous;
    }

    /**
     * Set institution
     *
     * @param string $institution
     * @return Course
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
     * Set credits
     *
     * @param integer $credits
     * @return Course
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;

        return $this;
    }

    /**
     * Get credits
     *
     * @return integer 
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Set semester
     *
     * @param string $semester
     * @return Course
     */
    public function setSemester($semester)
    {
        $this->semester = $semester;

        return $this;
    }

    /**
     * Get semester
     *
     * @return string 
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return Course
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Course
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set timeSlot
     *
     * @param string $timeSlot
     * @return Course
     */
    public function setTimeSlot($timeSlot)
    {
        $this->timeSlot = $timeSlot;

        return $this;
    }

    /**
     * Get timeSlot
     *
     * @return string 
     */
    public function getTimeSlot()
    {
        return $this->timeSlot;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Course
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
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
     * Get isFaceToFace
     *
     * @return boolean 
     */
    public function getIsFaceToFace()
    {
        return $this->isFaceToFace;
    }

    /**
     * Set isRemote
     *
     * @param boolean $isRemote
     * @return Course
     */
    public function setIsRemote($isRemote)
    {
        $this->isRemote = $isRemote;

        return $this;
    }

    /**
     * Get isRemote
     *
     * @return boolean 
     */
    public function getIsRemote()
    {
        return $this->isRemote;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return Course
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set publicationState
     *
     * @param string $publicationState
     * @return Course
     */
    public function setPublicationState($publicationState)
    {
        $this->publicationState = $publicationState;

        return $this;
    }

    /**
     * Get publicationState
     *
     * @return string 
     */
    public function getPublicationState()
    {
        return $this->publicationState;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Course
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
	 * Auto set the updated date
	 *
	 * @ORM\PreUpdate
	 */
	public function setUpdatedValue()
	{
		$this->setCreated(new \DateTime());
	}
    /**
     * Add environments
     *
     * @param \Ife\AloesBundle\Entity\LearningEnvironment $environments
     * @return Course
     */
    public function addEnvironment(\Ife\AloesBundle\Entity\LearningEnvironment $environments)
    {
        $this->environments[] = $environments;

        return $this;
    }

    /**
     * Remove environments
     *
     * @param \Ife\AloesBundle\Entity\LearningEnvironment $environments
     */
    public function removeEnvironment(\Ife\AloesBundle\Entity\LearningEnvironment $environments)
    {
        $this->environments->removeElement($environments);
    }

    /**
     * Get environments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEnvironments()
    {
        return $this->environments;
    }

    /**
     * Add topics
     *
     * @param \Ife\AloesBundle\Entity\Topic $topics
     * @return Course
     */
    public function addTopic(\Ife\AloesBundle\Entity\Topic $topics)
    {
        $this->topics[] = $topics;

        return $this;
    }

    /**
     * Remove topics
     *
     * @param \Ife\AloesBundle\Entity\Topic $topics
     */
    public function removeTopic(\Ife\AloesBundle\Entity\Topic $topics)
    {
        $this->topics->removeElement($topics);
    }

    /**
     * Get topics
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * Add events
     *
     * @param \Ife\AloesBundle\Entity\Event $events
     * @return Course
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
     * @return Course
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
     * Add objectives
     *
     * @param \Ife\AloesBundle\Entity\GeneralObjective $objectives
     * @return Course
     */
    public function addObjective(\Ife\AloesBundle\Entity\GeneralObjective $objectives)
    {
        $this->objectives[] = $objectives;

        return $this;
    }

    /**
     * Remove objectives
     *
     * @param \Ife\AloesBundle\Entity\GeneralObjective $objectives
     */
    public function removeObjective(\Ife\AloesBundle\Entity\GeneralObjective $objectives)
    {
        $this->objectives->removeElement($objectives);
    }

    /**
     * Get objectives
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getObjectives()
    {
        return $this->objectives;
    }

    /**
     * Add prerequisites
     *
     * @param \Ife\AloesBundle\Entity\Course $prerequisites
     * @return Course
     */
    public function addPrerequisite(\Ife\AloesBundle\Entity\Course $prerequisites)
    {
        $this->prerequisites[] = $prerequisites;

        return $this;
    }

    /**
     * Remove prerequisites
     *
     * @param \Ife\AloesBundle\Entity\Course $prerequisites
     */
    public function removePrerequisite(\Ife\AloesBundle\Entity\Course $prerequisites)
    {
        $this->prerequisites->removeElement($prerequisites);
    }

    /**
     * Get prerequisites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPrerequisites()
    {
        return $this->prerequisites;
    }

    /**
     * Add concurrentCourses
     *
     * @param \Ife\AloesBundle\Entity\Course $concurrentCourses
     * @return Course
     */
    public function addConcurrentCourse(\Ife\AloesBundle\Entity\Course $concurrentCourses)
    {
        $this->concurrentCourses[] = $concurrentCourses;

        return $this;
    }

    /**
     * Remove concurrentCourses
     *
     * @param \Ife\AloesBundle\Entity\Course $concurrentCourses
     */
    public function removeConcurrentCourse(\Ife\AloesBundle\Entity\Course $concurrentCourses)
    {
        $this->concurrentCourses->removeElement($concurrentCourses);
    }

    /**
     * Get concurrentCourses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConcurrentCourses()
    {
        return $this->concurrentCourses;
    }

    /**
     * Set infos
     *
     * @param string $infos
     * @return Course
     */
    public function setInfos($infos)
    {
        $this->infos = $infos;

        return $this;
    }

    /**
     * Get infos
     *
     * @return string 
     */
    public function getInfos()
    {
        return $this->infos;
    }

    /**
     * Set url_ped
     *
     * @param string $urlPed
     * @return Course
     */
    public function setUrlPed($urlPed)
    {
        $this->url_ped = $urlPed;

        return $this;
    }

    /**
     * Get url_ped
     *
     * @return string 
     */
    public function getUrlPed()
    {
        return $this->url_ped;
    }

    /**
     * Set url_web
     *
     * @param string $urlWeb
     * @return Course
     */
    public function setUrlWeb($urlWeb)
    {
        $this->url_web = $urlWeb;

        return $this;
    }

    /**
     * Get url_web
     *
     * @return string 
     */
    public function getUrlWeb()
    {
        return $this->url_web;
    }

    /**
     * Set url_twi
     *
     * @param string $urlTwi
     * @return Course
     */
    public function setUrlTwi($urlTwi)
    {
        $this->url_twi = $urlTwi;

        return $this;
    }

    /**
     * Get url_twi
     *
     * @return string 
     */
    public function getUrlTwi()
    {
        return $this->url_twi;
    }

    /**
     * Set url_aut
     *
     * @param string $urlAut
     * @return Course
     */
    public function setUrlAut($urlAut)
    {
        $this->url_aut = $urlAut;

        return $this;
    }

    /**
     * Get url_aut
     *
     * @return string 
     */
    public function getUrlAut()
    {
        return $this->url_aut;
    }
    
     
    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="courses")
     * @ORM\JoinTable(name="users_courses")
     **/    
    protected $redacteurs;
     
    public function addRedacteur(User $user)
    {
        $user->addCourse($this); // synchronously updating inverse side
        $this->redacteurs[] = $user;
    }         
    
    public function isRedacteur($id)
    {
    	
    	$isRedacteur = false;   
    	foreach ($this->redacteurs as $usr) {
    		if ($usr->getId() == $id)
    			$isRedacteur = true;
    	}

		return $isRedacteur;   
		
    } 
    
     
    public function getRedacteurs()
    {
        return $this->redacteurs;
    }      
    
    
    /**
     * Add typologies
     *
     * @param \Ife\AloesBundle\Entity\Typologie $typologies
     * @return Course
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
    

    
    
    /**
	 * @ORM\ManyToMany(targetEntity="Parcours", mappedBy="cours", cascade={"persist","remove"})
	 * @ORM\JoinTable(name="parcours_course")
     */
    private $parcours;            
    
    
    /**
     * Add Course
     *
     * @param Course $course
     */ 
    public function addParcours(Parcours $parcours)
    {
  		$parcours->addCours($this);     	
    	
   		$this->parcours[] = Parcours;

    }    
    
	/**
	 * Add Users to this Attachment
	 * 
	 * @param ArrayCollection
	 */
	public function setParcours($parcours)
	{
		foreach ($this->parcours->getSnapshot() as $parcour){ // On parcours les anciens utilisateurs li�s
            $parcour->getCours()->removeElement($this);   
		}				
		
	    $this->parcours = $parcours;    
	    
	    foreach ($this->parcours as $parcour){
            $parcour->addCours($this);
        }	    		
	    
	}    
    

    /**
     * Get ArrayCollection
     *
     * @return ArrayCollection $clients
     */
    public function getParcours()
    {
        return $this->parcours;
    }
 
    
    
    
    
}
