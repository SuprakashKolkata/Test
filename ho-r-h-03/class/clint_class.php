<?php
error_reporting('E_ERROR|E_WARNING'); 
session_start();

include('root/db.php');

class clint extends Connection
{
	
	function get_ali_clint_details()
		{
			$query_activity_details="SELECT
										our_client.*,
										industry.industry_name
										
									FROM
										our_client
										INNER JOIN industry ON industry.industry_id = our_client.industry_id
									WHERE
										(our_client.deleted_id=0)
										AND (industry.deleted_id=0)";
			 
			$query = $this->DBH->prepare($query_activity_details);
			$query->execute();		
			$results = $query->fetchAll();
			return $results;
		}
	function get_ali_application_details()
		{
			$query_activity_details="SELECT
											apply_details.*,
											industry.industry_name
											
										FROM
											apply_details
											INNER JOIN industry ON industry.industry_id = apply_details.industry_id
									WHERE
										(apply_details.deleted_id=0)
										AND (industry.deleted_id=0)
										
										ORDER BY apply_details.date DESC";
			
			$query = $this->DBH->prepare($query_activity_details);
			$query->execute();		
			$results = $query->fetchAll();
			return $results;
		}
	
	function lastInsertId_PDO()
	{
		 $lastInsertId=$this->DBH->lastInsertId();
		return $lastInsertId;
	}
}
?>
 