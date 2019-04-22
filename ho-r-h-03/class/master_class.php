<?php
error_reporting('E_ERROR|E_WARNING'); 
session_start();

include('root/db.php');

class master extends Connection
{
	
	 // Fetch from table
	function basic_fetch($table)
	{
		$sql="SELECT * FROM `";
		$sql.=$table;
		$sql.="` WHERE (deleted_id=0)";

		$query = $this->DBH->prepare($sql);
		$query->execute();		
	    $results = $query->fetchAll();		
		
		return $results;		
	}
	
	
	
	
	
 // Fetch from table by id
	function basic_fetch_by_id($table,$where,$id)
	{
		$sql="SELECT * FROM `";
		$sql.=$table;
		$sql.="` WHERE (deleted_id=0) AND (";
		$sql.=$where;
		$sql.="='";
		$sql.=$id;
		$sql.="')";

		$query = $this->DBH->prepare($sql);
		$query->execute();		
	    $results = $query->fetchAll();		
		
		return $results;		
	}
}
    ?>