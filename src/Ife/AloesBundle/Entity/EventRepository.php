<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;


/**
 * SpecificObjectiveRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EventRepository extends EntityRepository
{
 
  	public function findByCourse($course,$page,$sort,$direction){				
    	$qb = $this->createQueryBuilder('e')
 			  ->where("e.course=:course")->setParameter("course", $course)
			  ->orderBy($sort,$direction) 			  
    		  ->getQuery()
    		  ->getResult();

     	return $qb;
    }

    
	
	public function getTopicEvent($topic)
	{
		$qb = $this->createQueryBuilder('s')
		->where('s.topic = :topic')
		->setParameter('topic',$topic);
		return $qb;
	}        
    
	
    public function findEventsTopic($topic)
    	{
    	$events = array();     		

        $sql = "SELECT event.id, GROUP_CONCAT(assessment.title SEPARATOR '<br/>' ) as title
				FROM event
				LEFT JOIN assessment ON assessment.event_id = event.id
				WHERE event.topic_id =".$topic.
				" GROUP BY event.id "; 
        
        $conn = $this->_em->getConnection();
        $stmt = $conn->executeQuery($sql);
        $data = $stmt->fetchAll();
	    
        $cpt=0;           
        
		foreach ($data as $evt)
			{   
			$event = array();   				
			$event['key']		= $evt['id'];	
			$event['event']		= $evt['title'];	

		    $events[$cpt++]=$event;  			
			}   			
		return 	$events;    
        
    	}  	
	
}
