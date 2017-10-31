<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\Query\AST\Functions\SizeFunction;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;


/**
 * SpecificObjectiveRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CourseRepository extends EntityRepository
{
    public function findByProgramUser($program,$user)
    {
    	$qb1 = $this->findByResponsable($program,$user);

     	$qb2 = $this->findByEnseignant($program,$user);   	
     	
    	$qb = array_unique(array_merge($qb1,$qb2));	  
 	   	
     	return $qb; 
    } 

    
	public function findAllByProgram($program,$page,$sort,$direction){	
		
		$qb = array();


		$qb = $this->createQueryBuilder("c")	
			->where("c.program = :program ")
			 ->orderBy($sort,$direction)	
			->setParameter("program", $program->getId())
	        ->getQuery()
	        ->getResult();


     	return $qb;
    } 
    
    
	
	public function findByResponsable($program,$user){	
		
		$qb = array();

		if($program->isResp($user->getId()))
			{
			$qb = $this->createQueryBuilder("c")	
			->where("c.program = :program ")
			->orderBy("c.title", "asc")
			->setParameter("program", $program->getId())
	        ->getQuery()
	        ->getResult();

			}

     	return $qb;
    } 

	public function findByEnseignant($program,$user){	
					
		$qb = $this->createQueryBuilder("c")
    	->leftJoin('c.redacteurs', 'u')
 		->where("u=:user")->setParameter("user", $user->getId())		
		->andwhere("c.program = :program ")
		->orderBy("c.title", "asc")
		->setParameter("program", $program->getId())
        ->getQuery()
        ->getResult();
        
     	return $qb;
    }     
    

	
    public function findProgramCourses($program_id,$course_id)
    {
		$qb = $this->createQueryBuilder("a")
		->where("a.program = :program ")
		->andWhere("a.id != :course")		
		->orderBy("a.title", "asc")
		->setParameter("course", $course_id)
		->setParameter("program", $program_id);
		
		return $qb;    
    }
    
    
    
	public function findAllOrderByProgram(){	
		
		$courses=array();
		
		$db = $this->getEntityManager()->getConnection();
			
		$sql = "SELECT program_id, program.label as program_label, program.title as program_title, course.id as course_id, course.label as course_label, course.title as course_title
		FROM `program` , course
		WHERE course.program_id = program.id
		ORDER BY program.label";
		
		$result = $db->fetchAll($sql);
		
		$cpt=0; 
		$currentProgram = "";
		 
		foreach ($result as $res)
			{
			if ($currentProgram != $res['program_id'])	
					$courses["PRO#".$res['program_id']]="[".$res['program_label']." - ".$res['program_title']."]";	
			
			$courses["COU#".$res['program_id']."#".$res['course_id']]= " -----  ".$res['course_label']." - ".$res['course_title'];	
					
			}

		return $courses ; 

	}
	
    
	public function findAllOrderByRespProgram($responsable,$user){	
		
		$courses=array(); 
		
		$db = $this->getEntityManager()->getConnection();
			
		$sql = "SELECT course.program_id, program.label as program_label, program.title as program_title, course.id as course_id, course.label as course_label, course.title as course_title
		FROM `program` , course, users_programs
		WHERE course.program_id = program.id and
		program.id=users_programs.program_id and
		users_programs.user_id=".$responsable->getId().
		" and
		program.id not in ( select program_id from users_programs where user_id=".$user->getId()." )				
		ORDER BY program.label";
		
		$result = $db->fetchAll($sql);
		
		$cpt=0; 
		$currentProgram = "";
		 
		foreach ($result as $res)
			{
			if ($currentProgram != $res['program_id'])	
					$courses["PRO#".$res['program_id']]="[".$res['program_label']." - ".$res['program_title']."]";	
			
			$courses["COU#".$res['program_id']."#".$res['course_id']]= " -----  ".$res['course_label']." - ".$res['course_title'];	
					
			}

		return $courses ; 

	}
	
	
    
	public function findAllOrderByResponsableProgram($responsable){	
		
		$courses=array(); 
		
		$db = $this->getEntityManager()->getConnection();
			
		$sql = "SELECT course.program_id, program.label as program_label, program.title as program_title, course.id as course_id, course.label as course_label, course.title as course_title
		FROM `program` , course, users_programs
		WHERE course.program_id = program.id and
		program.id=users_programs.program_id and
		users_programs.user_id=".$responsable->getId().
		" 				
		ORDER BY program.label";
		
		$result = $db->fetchAll($sql);
		
		$cpt=0; 
		$currentProgram = "";
		 
		foreach ($result as $res)
			{
			if ($currentProgram != $res['program_id'])	
					$courses["PRO#".$res['program_id']]="[".$res['program_label']." - ".$res['program_title']."]";	
			
			$courses["COU#".$res['program_id']."#".$res['course_id']]= " -----  ".$res['course_label']." - ".$res['course_title'];	
					
			}

		return $courses ; 

	}
	
	
    public function findListAssesment($course)
    {
        $sql = "
		SELECT *
		FROM assessment
		WHERE 
		course_id = ?
		order by deadline
		";
        
        $conn = $this->_em->getConnection();
        $stmt = $conn->executeQuery($sql, array($course->getId()));
        $data = $stmt->fetchAll();
        return $data;        
    }		
	

    public function findListObjectives($course)
    {
        $sql = "
		SELECT *
		FROM specific_objective
		WHERE 
		course_id = ?
		"; 
        
        $conn = $this->_em->getConnection();
        $stmt = $conn->executeQuery($sql, array($course->getId()));
        $data = $stmt->fetchAll();
        return $data;        
    }	


    public function findListCompetences($course)
    {
        $sql = "
		SELECT *
		FROM specific_competence
		WHERE 
		program_id = ? and
		specific_competence.id 
		in (select distinct(competence_id) from objective_competence)
		"; 
        
        $conn = $this->_em->getConnection();
        $stmt = $conn->executeQuery($sql, array($course->getProgram()->getId()));
        $data = $stmt->fetchAll();
        return $data;        
    }	    
    

    public function findAssessmentObjectiveWeight($course)
    {
        $sql = "
		SELECT  assessment_objective_weight.assessment_id, assessment_objective_weight.objective_id, assessment_objective_weight.weight 
		FROM assessment_objective_weight,assessment
		WHERE 
		assessment.id = assessment_objective_weight.assessment_id and 
		assessment.course_id = ?
		"; 
        
        $conn = $this->_em->getConnection();
        $stmt = $conn->executeQuery($sql, array($course->getId()));
        $data = $stmt->fetchAll();
        return $data;        
    }	     

    
 
    public function findObjectiveCompetenceWeight($course)
    {
        $sql = "
		SELECT   objective_competence_weight.objective_id,  	objective_competence_weight.competence_id,  objective_competence_weight.weight 
		FROM objective_competence_weight,specific_objective
		WHERE 
		objective_competence_weight.objective_id =  specific_objective.id and 
		specific_objective.course_id = ?
		"; 
        
        $conn = $this->_em->getConnection();
        $stmt = $conn->executeQuery($sql, array($course->getId()));
        $data = $stmt->fetchAll();
        return $data;        
    }	     
       
    
    
    public function findAssessmentCompetenceWeight($course)
    {
        $sql = "
		SELECT    assessment_competence_weight.assessment_id, 	assessment_competence_weight.competence_id, assessment_competence_weight.weight 
		FROM assessment_competence_weight,assessment
		WHERE 
		assessment_competence_weight.assessment_id =  assessment.id and 
		assessment.course_id = ?
		"; 
          
        $conn = $this->_em->getConnection();
        $stmt = $conn->executeQuery($sql, array($course->getId()));
        $data = $stmt->fetchAll();
        return $data;        
    }	     
      
    
	public function findByArrayParcours($program,$array_parcours){	
					
		if (sizeof($array_parcours)==0) 
             $sql = "select course.id , course.label from course where program_id='".$program."' order by course.label"; 
		else            
			$sql = "select distinct course.id , course.label from course, parcours_course where course.id=parcours_course.course_id and  parcours_course.parcours_id in (".implode(",", $array_parcours).") order by course.label"; 

			
        $conn = $this->_em->getConnection();
        $stmt = $conn->executeQuery($sql, array());
        $data = $stmt->fetchAll();
        return $data;   
    }     
    
 
	public function findBySemestre($program){	
					
      
		$sql = "select distinct semestre.id, semestre.title from semestre,course_semester,course 
				where semestre.id=course_semester.semestre_id and
					  course_semester.course_id and
					  course.program_id=".$program; 

			
        $conn = $this->_em->getConnection();
        $stmt = $conn->executeQuery($sql, array());
        $data = $stmt->fetchAll();
        return $data;   
    }      
      

    
	public function findByFiltre($program,$array_parcours,$array_semestres){	
					
      
		$sql = "select distinct course.id ,  course.label from course ";
		if (sizeof($array_semestres)> 0)			
				$sql = $sql ." right join course_semester on course.id=course_semester.course_id  and course_semester.semestre_id in (".implode(",", $array_semestres).") "; 				

		if (sizeof($array_parcours)> 0)			
				$sql = $sql ." right join parcours_course on course.id=parcours_course.course_id  and parcours_course.parcours_id in (".implode(",", $array_parcours).") "; 				
				
		$sql = $sql ." where program_id=".$program."  order by   course.label"; 


        $conn = $this->_em->getConnection();
        $stmt = $conn->executeQuery($sql, array());
        $data = $stmt->fetchAll();
        return $data;   
    }       
    
        
}
