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
class TopicRepository extends EntityRepository
{

    
	public function findAllByCourses($course){	
		
		$qb = array();
		
		$qb = $this->createQueryBuilder("t")	
			->where("t.course = :course ")
			->orderBy("t.startDate", "asc")			
			->setParameter("course", $course->getId())
	        ->getQuery()
	        ->getResult();


     	return $qb;
    } 	
	
}
