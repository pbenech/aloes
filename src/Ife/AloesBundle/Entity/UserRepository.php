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
class UserRepository extends EntityRepository
{	
	public function findUsers($search,$sort,$direction)
	{
		
		$_dilemme=array();
		
		
		$db = $this->getEntityManager()->getConnection();

		/*
		$sql = "SELECT * from fos_user 
				where sn like \"%".mysql_escape_string($search)."%\" or givenname like \"%".mysql_escape_string($search)."%\"  or email like \"%".mysql_escape_string($search)."%\" 
				ORDER BY ".$sort. "   ".$direction;
		*/
		
		$sql = "SELECT fos_user.*, GROUP_CONCAT(DISTINCT(program.label) SEPARATOR '<br/>') as programs, GROUP_CONCAT(DISTINCT(course.label) SEPARATOR '<br/>') as courses
		FROM fos_user
		LEFT JOIN users_programs ON fos_user.id = users_programs.user_id  
		LEFT JOIN program as program ON users_programs.program_id = program.id 
		LEFT JOIN users_courses ON fos_user.id = users_courses.user_id
		LEFT JOIN course as course ON users_courses.course_id = course.id
		WHERE sn like \"%".mysql_escape_string($search)."%\" or givenname like \"%".mysql_escape_string($search)."%\"  or email like \"%".mysql_escape_string($search)."%\" 
		or program.label like \"%".mysql_escape_string($search)."%\" 
		or course.label like \"%".mysql_escape_string($search)."%\" 		
	
		GROUP BY fos_user.id 
		ORDER BY ".$sort. "   ".$direction;

		/*
		 *   
		 SELECT fos_user.*, GROUP_CONCAT(DISTINCT(program.label)), GROUP_CONCAT(DISTINCT(course.label))
		FROM fos_user
		LEFT JOIN users_programs ON fos_user.id = users_programs.user_id
		LEFT JOIN program ON users_programs.program_id = program.id
		LEFT JOIN users_courses ON fos_user.id = users_courses.user_id
		LEFT JOIN course ON users_courses.course_id = course.id
		GROUP BY fos_user.id
		ORDER BY fos_user.id
		 */
		
		
		$result = $db->fetchAll($sql);  
		$cpt=0;
		
		 
		foreach ($result as $res)
		{
			$dil = array();
			
			$dil["id"]				= $res["id"];
			$dil["sn"]  			= $res["sn"];						
			$dil["givenname"]  		= $res["givenname"];			
			$dil["email"]  			= $res["email"];
			$dil["email"]  			= $res["email"];
			$dil["programs"]  		= $res["programs"];
			$dil["courses"]  		= $res["courses"];
			
			if (strpos($res["roles"],"ROLE_ADMIN")!== false)	
				$dil["ROLE_ADMIN"]  = "*";
			else 		
				$dil["ROLE_ADMIN"]  = "";

			if (strpos($res["roles"],"ROLE_RESPONSABLE")!== false)	
				$dil["ROLE_RESPONSABLE"]  = "*";
			else 		
				$dil["ROLE_RESPONSABLE"]  = "";				

			if (strpos($res["roles"],"ROLE_ENSEIGNANT")!== false)	
				$dil["ROLE_ENSEIGNANT"]  = "*";
			else 		
				$dil["ROLE_ENSEIGNANT"]  = "";					
				
			$_dilemme[$cpt++]=$dil;
		}
		 
		return $_dilemme ;		
	}	
	

}
