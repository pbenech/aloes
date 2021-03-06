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
class ObjectiveCompetenceRepository extends EntityRepository
{

	
    public function findCourse($program,$objective_id = 0)
    { 
    	
	$db = $this->getEntityManager()->getConnection();		
		
    $sql = "
		SELECT general_competence.id as gc_id, general_competence.title as gc_title,specific_competence.id as sc_id,specific_competence.title as sc_title
		FROM general_competence,specific_competence  
		WHERE general_competence.id=specific_competence.general_competence_id and general_competence.program_id = ".$program."  
		order by general_competence_id
		";   
     
	$ocs=array();
		 
	$result = $db->fetchAll($sql);  		
		
	foreach ($result as $res)
		{	  
		$oc=array();		
		$oc['gc_id']		= 	$res['gc_id'];
		$oc['gc_title']		= 	$res['gc_title'];
		$oc['sc_id']		= 	$res['sc_id'];
		$oc['sc_title']		= 	$res['sc_title'];
		$oc['rating']		= 	"";
		

		$ocs[$res['gc_id']."#".$res['sc_id']]=$oc;		
		}
		
 
    $sql2 = "select * from objective_competence,specific_competence where objective_competence.competence_id=specific_competence.id  and objective_id=".$objective_id;   		
	$result2 = $db->fetchAll($sql2);  
	foreach ($result2 as $res2)
		{	   
		$tmp = $ocs[$res2['general_competence_id']."#".$res2['competence_id']];
		$tmp['rating']=$res2['rating'];
		$ocs[$res2['general_competence_id']."#".$res2['competence_id']]=$tmp;
		}
		
    return $ocs;        
    }


}
