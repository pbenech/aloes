<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;
use Ife\AloesBundle\AloesModel\ResultIndexerTrait;
 
/**
 * SpecificObjectiveRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AssessmentRepository extends EntityRepository
{
    
    public function findAssessmentObjectiveByCourse($course)
    {
    	$assessmentObjectives = array(); 
    	
        $sql = "
		select assessment.id as id,assessment_objective.objective_id as obj,  specific_objective.title, assessment_objective_weight.weight, assessment_objective.rating		
		from assessment, assessment_objective, specific_objective,assessment_objective_weight		
		where   
		assessment.id=assessment_objective.assessment_id and
		assessment.id =assessment_objective_weight.assessment_id and		
		specific_objective.course_id=? and		
		specific_objective.id = assessment_objective.objective_id and
		specific_objective.id = assessment_objective_weight.objective_id
		order by assessment.id ,specific_objective.id
		";
        $conn = $this->_em->getConnection();
        $stmt = $conn->executeQuery($sql, array($course->getId()));
        $data = $stmt->fetchAll();
        
        $obj_cur = ""; 
 		$objectives = array();
 				       
		foreach ($data as $oc)
			{        
			if ( ($oc['id']!=$obj_cur) && ($obj_cur!=""))	
				{
				$assessmentObjectives[$obj_cur]=	$objectives;
				$objectives = array();
				}
				
			$objective = array();
			$objective['obj']		=$oc['obj'];				
			$objective['title']		=$oc['title'];		
			$objective['weight']	=$oc['weight'];	
			$objective['rating']	=$oc['rating'];	
						 
			$objective['competences']	= array();				
			
			$objectives[$oc['obj']]=$objective;

			
			$obj_cur = $oc['id'];
			}
			
		if ($obj_cur!="")	
			$assessmentObjectives[$obj_cur]=	$objectives;
		
         
        return $assessmentObjectives;        
    }    
    
    
    public function findAssessmentsCourse($course,$event)
    	{
    	$assessments = array();     		

        $sql = "SELECT assessment.* FROM assessment WHERE course_id =".$course." and assessment.id not in (select assessment_id from event_assessment where event_id=".$event.")";

        $conn = $this->_em->getConnection();
        $stmt = $conn->executeQuery($sql);
        $data = $stmt->fetchAll();
		foreach ($data as $ass)
			{   
			$assessments[$ass['id']]=	$ass['title'];				
			}   			
		return 	$assessments;    
        
    	}      
    
    public function findAssessmentsEventCourse($course,$event)
    	{
     	$assessments = array();      	 	

        $sql = "select * from assessment WHERE course_id =".$course." and assessment.id in (select assessment_id from event_assessment where event_id=".$event.") ";
        $conn = $this->_em->getConnection();
        $stmt = $conn->executeQuery($sql);
        $data = $stmt->fetchAll();
		foreach ($data as $ass)
			{   
			$assessment = array();
			$assessment['id']		=$ass['id'];				
			$assessment['title']		=$ass['title'];	
			$assessments[$ass['id']]=	$ass['title'];				
			}   
			
		return 	$assessments;  		
    	}    
    
    
    public function findAssessmentsTopic($topic)
    	{
    	$assessments = array();     		

        $sql = "SELECT assessment.id, event.title
				FROM assessment
				LEFT JOIN event ON assessment.event_id = event.id
				WHERE assessment.topic_id = ".$topic; 
        
        $conn = $this->_em->getConnection();
        $stmt = $conn->executeQuery($sql);
        $data = $stmt->fetchAll();
	    
        $cpt=0;           
        
		foreach ($data as $ass)
			{   
			$assessment = array();   				
			$assessment['key']		= $ass['id'];	
			$assessment['event']	= $ass['title'];	

		    $assessments[$cpt++]=$assessment;  			
			}   			
		return 	$assessments;    
        
    	}  
    	
    	
	
	public function getTopicAssessment($topic)
	{
		$qb = $this->createQueryBuilder('s')
		->where('s.topic = :topic')
		->setParameter('topic',$topic);
		return $qb;
	}    	
    	

	public function getCourseAssessmentWeight($course)
	{
		$qb = $this->createQueryBuilder('a')
		->select("sum(a.weight) ")
		->where('a.course = :course')
		->setParameter('course', $course)
		->getQuery()
    	->getSingleScalarResult();
		return $qb;
	}   
	
}
