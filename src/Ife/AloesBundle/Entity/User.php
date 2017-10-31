<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use FOS\UserBundle\Entity\User as BaseUser;

use FR3D\LdapBundle\Model\LdapUserInterface as LdapUserInterface;

use Ife\AloesBundle\Entity\Program;  
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="Ife\AloesBundle\Entity\UserRepository")
 * @ORM\Table(name="fos_user") 
 * @UniqueEntity(fields="email", message="Sorry, this email address is already in use.")

 */
class User extends BaseUser implements LdapUserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
   

    protected $email;    
    
	/**
     * Ldap Object Distinguished Name
     * @ORM\Column(type="string", type="text", nullable=true)
     */
    protected $dn;

    
	/**
     * Ldap Object Distinguished Name
     * @ORM\Column(type="string", type="text", nullable=true)
     */
    protected $sn;    

	/**
     * Ldap Object Distinguished Name
     * @ORM\Column(type="string", type="text", nullable=true)
     */
    protected $fonction;        
    
   
    public function setSn($dn)
    {
    	$this->sn = $dn;
    }

    
    /**
     * {@inheritDoc}
     */

    public function getSn()
    {
    	return $this->sn;
    }    
    
    
    public function setFonction($fonction)
    {
    	$this->fonction = $fonction;
    }

    
    /**
     * {@inheritDoc}
     */

    public function getFonction()
    {
    	return $this->fonction;
    }       
    
    /**
     * {@inheritDoc}
     */
   
    public function setDn($dn)
    {
    	$this->dn = $dn;
    }

    
	/**
     * Ldap Object Distinguished Name
     * @ORM\Column(type="string", type="text", nullable=true)
     */
    protected $givenname;        
    
    

    public function getGivenname()
    {
    	return $this->givenname;
    }    
    
    /** 
     * {@inheritDoc}
     */
   
    public function setGivenname($dn)
    {
    	$this->givenname = $dn;
    }    
    
    /**
     * {@inheritDoc}
     */

    public function getDn()
    {
    	return $this->dn;
    }
  
    
         
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
		$this->responsables = new \Doctrine\Common\Collections\ArrayCollection();        
		$this->enseignants = new \Doctrine\Common\Collections\ArrayCollection();       
		$this->courses = new \Doctrine\Common\Collections\ArrayCollection(); 
    }
    

    public function setEmail($dn)
    {
    	$this->email = $dn;
    }
    
    public function getEmail()
    {
    	return $this->email;
    }   

    
    /**
     * @ORM\ManyToMany(targetEntity="Program", inversedBy="resps")
     * @ORM\JoinTable(name="users_programs")
     **/
    public $responsables;   
         
    
    public function addProgram(Program $program)
    {
        $this->responsables[] = $program; 
    }    

    
    /**
     * Remove $course
     *
     * @param \Ife\AloesBundle\Entity\Course $course
     */
    public function removeProgram(Program $program)
    {
        $this->responsables->removeElement($program);
    }     
    

    public function getResponsables()
    {
    	return $this->responsables;
    }       
            
    
    public function reinit()
    {
		$this->responsables = new \Doctrine\Common\Collections\ArrayCollection();        
		$this->enseignants = new \Doctrine\Common\Collections\ArrayCollection();       
		$this->courses = new \Doctrine\Common\Collections\ArrayCollection();     		
    }    
    
    
    public function reinitPartiel($cours)
    {      
    	    
    	foreach($cours   as $key => $value)
    		{
    		$array_key = explode("#", $key);	
    		if ($array_key[0]=="COU")
    			{
	    		foreach ($this->courses as $course)  
		    		{
		    		$str = "COU#".$course->getProgram()->getId()."#".$course->getId();	
			   		if ($str==$key)
			    		$this->removeCourse($course);	    		
	    			}
    			}
    		if ($array_key[0]=="PRO")   
    			{ 		
    	    	foreach ($this->enseignants as $enseignant)  
		    		{			    			
		    		$str = "PRO#".$enseignant->getId();	
			   		if ($str==$key)
			    		$this->removeEnseignantProgram($enseignant);	    		

	    			}
	    	
    			}	
    		} 
    }        
    
    
    /**
     * @ORM\ManyToMany(targetEntity="Program", inversedBy="enseigs")
     * @ORM\JoinTable(name="enseignants_programs")
     **/
    public $enseignants;   

    public function getEnseignants()
    {
    	return $this->enseignants;
    }       
        
    
    
    public function addEnseignantProgram(Program $program)
    {
        $this->enseignants[] = $program; 
    }      
    
    
    /**
     * Remove program
     *
     * @param \Ife\AloesBundle\Entity\Program $program
     */
    public function removeEnseignantProgram(Program $program)
    {
        $this->enseignants->removeElement($program);
    }    
        
    /**
     * @ORM\ManyToMany(targetEntity="Course", inversedBy="redacteurs")
     * @ORM\JoinTable(name="users_courses")
     **/
    public $courses;   

    public function addCourse(Course $course)
    {
        $this->courses[] = $course; 
    }    


    public function getCourses()
    {
    	return $this->courses;
    }  
    
    /**
     * Remove $course
     *
     * @param \Ife\AloesBundle\Entity\Course $course
     */
    public function removeCourse(Course $course)
    {
        $this->courses->removeElement($course);
    }     
    

    public function isRoleAdmin()
    {
	if (in_array("ROLE_ADMIN", $this->roles, true))
		return true;
	else
		return false;
    }  


    public function isRoleResponsable()
    {
	if (in_array("ROLE_RESPONSABLE", $this->roles, true))
		return true;
	else
		return false;
    }      
    

    public function isRoleEnseignant()
    {
	if (in_array("ROLE_ENSEIGNANT", $this->roles, true))
		return true;
	else
		return false;
    }     
}