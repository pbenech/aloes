<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;
use Ife\AloesBundle\AloesModel\ResultIndexerTrait;

/**
 * ProgramRepository
 *
 */
class LevelRepository extends EntityRepository
{
 
	public function findLevel($page,$sort,$direction){	
	    	$qb = $this->createQueryBuilder('l')
			  ->orderBy($sort,$direction)	
    		  ->getQuery()
    		  ->getResult();
		
     	return $qb;	
		
		
	}
 
   
	public function listLevel(){	
	    	$qb = $this->createQueryBuilder('l')
			  ->orderBy("l.sigle","asc");
		
     	return $qb;	
		
		
	}
        
}