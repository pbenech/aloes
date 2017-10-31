<?php

namespace Ife\AloesBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;
use Ife\AloesBundle\AloesModel\ResultIndexerTrait;

/**
 * ProgramRepository
 *
 */
class ProgramRepository extends EntityRepository
{
 
	public function findByAdmin($page,$sort,$direction){	
	    	$qb = $this->createQueryBuilder('p')
			  ->orderBy($sort,$direction)	
    		  ->getQuery()
    		  ->getResult();
		
     	return $qb;	
		
		
	}
 
 
	public function findByUsr($user,$page,$sort,$direction){		

		$qb_order = array();
			
    	$qb1 = $this->findByResponsable($user,$page,$sort,$direction);
    		  
     	$qb2 = $this->findByEnseignant($user,$page,$sort,$direction);   	

    	$qb = array_unique(array_merge($qb1,$qb2));	  

    	foreach ($qb as $pro)
    		{
    		if ($sort=="p.label")	
	    		$qb_order[$pro->getLabel()]	= $pro;
    		if ($sort=="p.title")	
	    		$qb_order[$pro->getLabel()]	= $pro; 
    		}
    		
    	if ($direction=="asc")	
    		ksort($qb_order);
    	if ($direction=="desc")	
    		krsort($qb_order);	
    	
     	return $qb_order;

    }  
	
	
	public function findByResponsable($user,$page,$sort,$direction){				
    	$qb = $this->createQueryBuilder('p')
    		  ->leftJoin('p.resps', 'u')
 			  ->where("u=:user")->setParameter("user", $user)
			  ->orderBy($sort,$direction)	
    		  ->getQuery()
    		  ->getResult();

     	return $qb; 
    } 

	public function findByEnseignant($user,$page,$sort,$direction){				
    	$qb = $this->createQueryBuilder('p')
    		  ->leftJoin('p.enseigs', 'u')
 			  ->where("u=:user")->setParameter("user", $user)
			  ->orderBy($sort,$direction) 			  
    		  ->getQuery()
    		  ->getResult();

     	return $qb;
    }     

        
}