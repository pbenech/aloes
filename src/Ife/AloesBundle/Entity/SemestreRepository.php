<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;
use Ife\AloesBundle\AloesModel\ResultIndexerTrait;

/**
 * ProgramRepository
 *
 */
class SemestreRepository extends EntityRepository
{ 
	 
 	public function findSemestre($page,$sort,$direction){	
	    	$qb = $this->createQueryBuilder('l')
			  ->orderBy($sort,$direction)	
    		  ->getQuery()
    		  ->getResult();
		
     	return $qb;	
		
		
	} 

	public function listSemestre(){	
	    	$qb = $this->createQueryBuilder('l')
			  ->orderBy("l.title","asc");
		
     	return $qb;	
		
		
	}
        
}