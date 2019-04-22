		<?php
		error_reporting('E_ERROR|E_WARNING'); 
		session_start();

		include('root/db.php');

		class user extends Connection
		{
		// Insert in table
		function basic_insert($table,$data)
		{
			$array_size=sizeof($data);

			 $sql="INSERT INTO `".$table."` SET ";

		$i=0;
		foreach($data as $key => $value)
		{
			++$i;	

			if($i==$array_size)
				$sql.="`".$key."`='".$value."' ; ";
			else
				$sql.="`".$key."`='".$value."' , ";
		}
		
		$query = $this->DBH->prepare($sql);
		$query->execute();
		
		return $query;
	 }

	 
	 // Fetch from table
	function basic_fetch($table)
	{
		
		 $query="SELECT 
					*
				FROM 
					`".$table."`
				WHERE 
					(deleted_id=0)";
					//echo $query;

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

	 // Fetch from table by id
	function basic_fetch_by_id($table,$where,$id)
	{
					$query="SELECT 
					            *
					       FROM 
					          `".$table."`
					       WHERE 
					          (deleted_id=0)
				        	AND
					         (".$where."='".$id."')" ; 
					

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
		
	}
    function basic_fetch_by_id_pagination($table,$where,$id,$start_from,$num_rec_per_page)
	{
					$query="SELECT 
					         *
						FROM 
						`".$table."`
						WHERE 
						(deleted_id=0)
						AND
						(".$where."='".$id."')
						LIMIT
						$start_from,$num_rec_per_page "  ;  
					        
					          
					

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
		
	}       
    
    function basic_fetch_by_order($table,$where1,$id1,$id2)
	{
		      $query="SELECT 
					*
				FROM 
					`".$table."`
				WHERE 
					(`deleted_id`=0)
				
				ORDER BY
				    ($where1)
				DESC   LIMIT 
				      $id1,$id2" ; 
					

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
		
	}





             function basic_fetch_activity_by_id($table,$where,$id)
	{
		   $query="SELECT 
					*
				FROM 
					`".$table."`
				WHERE 
					(deleted_id=0)
				AND
					(".$where."='".$id."') order by pirority" ; 
					

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
		
	}
	
	
	function basic_random_fetch_by_id_index($table,$where,$id,$id1)
	{
		
		  $query="SELECT 
					*
				FROM 
					`".$table."`
				WHERE 
					(deleted_id=0)
				AND
					(".$where."='".$id."')
					order by rand() limit ".$id1." " ; 
					

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
		
	}
	 // Fetch from table by id
	function basic_fetch_by_two_id($table,$where1,$id1,$where2,$id2)
	{
          $query="SELECT 
					*
				FROM 
					`".$table."`
				WHERE 
					(deleted_id=0)
				AND
					(".$where1."='".$id1."')
				AND
					(".$where2."='".$id2."')"; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

	
	function basic_fetch_by_two_id_order_desc($table,$where1,$id1,$where2,$id2,$where3,$num)
	{
       $query="SELECT 
					*
				FROM 
					`".$table."`
				WHERE 
					(deleted_id=0)
				AND
					(".$where1."='".$id1."')
				AND
					(".$where2."='".$id2."')
				
				order by $where3 desc limit $num"	
					; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}
	
	
	
	
	
	
	
	function basic_fetch_by_order_two_id($table,$where1,$id1,$where2,$id2)
	{
   $query="SELECT 
					*
				FROM 
					`".$table."`
				WHERE 
					(deleted_id=0)
				AND
					(".$where1."='".$id1."')
				AND
					(".$where2."='".$id2."')
					order by (leisure_id) desc limit 5 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

function basic_fetch_recent_by_two_id($table,$where1,$id1,$where2,$id2)
	{
      $query="SELECT 
					*
				FROM 
					`".$table."`
				WHERE 
					(deleted_id=0)
				AND
					(".$where1."='".$id1."')
				AND
					(".$where2."='".$id2."') order by (blog_id) desc limit 3"; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}
	function basic_random_fetch_by_id($table,$where2,$id2)
	{
      $query="SELECT 
					*
				FROM 
					`".$table."`
				WHERE 
					(deleted_id=0)
				
				AND
					(".$where2."='".$id2."')
				order by rand() limit 2 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}
	function basic_fetch_by_three_id($table,$where1,$id1,$where2,$id2,$where3,$id3)
	{
		 $query="SELECT 
					*
				FROM 
					`".$table."`
				WHERE 
					(deleted_id=0)
				AND
					(".$where1."='".$id1."')
				AND
					(".$where2."='".$id2."')
					AND
					(".$where3."='".$id3."')"; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}
	

	// joining
	function fetch_user_details_by_id($user_id)
	{
	   	$sql="SELECT
				*
			FROM
				d_00_user

		    WHERE
				 (user_id='".$user_id."')";
		 
		$query = $this->DBH->prepare($sql);
		$query->execute();		
		$results = $query->fetchAll();
		return $results;	
	}

	function update_by_id($table,$data,$where,$id)
	{

		$array_size=sizeof($data);

		$sql="UPDATE `";
		$sql.=$table;
		$sql.="` SET ";
		$i=0;
		foreach($data as $key => $value)
		{
		++$i; 

		if($i==$array_size)
		$sql.="`".$key."`='".$value."' ";
		else
		$sql.="`".$key."`='".$value."' , ";
		}

		$sql.=" WHERE (";
		  $sql.=$where;
		  $sql.="='";
		  $sql.=$id;
		  $sql.="')";

		  $query = $this->DBH->prepare($sql);
	  $query->execute();  

		  return $query;
	}

	function fetch_stockiest_details()
	{
	  	$sql="SELECT
				*
			FROM
				d_00_user ";
		 
		$query = $this->DBH->prepare($sql);
		$query->execute();		
		$results = $query->fetchAll();
		return $results;	
	}
	 // Fetch user's login details
	function fetch_login_details()
	{
		$sql="SELECT
				*
			FROM
				d_00_user
				
		    WHERE
		    	(d_00_user.deleted_id=0)
				";
		 
		$query = $this->DBH->prepare($sql);
		$query->execute();		
		$results = $query->fetchAll();
		return $results;
	}

	//fetch user's Activity details
	function fetch_activity_details()
	{
		$query_activity_details="SELECT
									d_00_user.user_name,
									d_00_user.user_first_name,
									d_00_user.user_middle_name,
									d_00_user.user_last_name,
									d_02_user_visit.menu,
									d_02_user_visit.sub_menu,
									d_02_user_visit.tasks,
									d_02_user_visit.activity_date
								FROM
									d_00_user
									INNER JOIN d_02_user_visit ON d_02_user_visit.user_id = d_00_user.user_id
							    WHERE
							    	(d_00_user.deleted_id=0)
									AND (d_02_user_visit.deleted_id=0)";
		 
		$query = $this->DBH->prepare($query_activity_details);
		$query->execute();		
		$results = $query->fetchAll();
		return $results;
	}



	
	
	
	// Fetch from table by id
	
	
	
	function basic_fetch_by_four_id($table,$where1,$id1,$where2,$id2,$where3,$id3,$where4,$id4)
	{
		 $query="SELECT 
					*
				FROM 
					`".$table."`
				WHERE 
					(deleted_id=0)
				AND
					(".$where1."='".$id1."')
				AND
					(".$where2."='".$id2."')
				AND
					(".$where3."='".$id3."')
				AND
					(".$where4."='".$id4."')"; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}
	
	function delete_by_id($table,$where,$id)
	{

       $query="UPDATE
					
					`".$table."`
				SET
					deleted_id=1
				WHERE
				     deleted_id=0
				AND
					".$where."='".$id."'"; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		return $result;
	}
	
	
	function multiple_delete_by_id($table,$where,$id)
	{

        $query="          UPDATE 
							`".$table."` 
						  SET 
							`deleted_id`=1
						  WHERE 
							(".$where." IN ($id))"; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		return $result;
	}
	
	
	/*function status_by_id($table,$where,$id)
	{

        echo $query="UPDATE 
							`".$table."`  ";
							
							if('active_status'=1)
							{
			$query.="`".$key."`='".$value."' ; ";					
							}
						  
					  
					 
						  
						  
						  
						  

		$result = $this->DBH->prepare($query);
		$result->execute();
		return $result;
	}
	*/	
	
	
	
	
	function lastInsertId_PDO()
	{
		 $lastInsertId=$this->DBH->lastInsertId();
		return $lastInsertId;
	}

	
	
	
	
	
	function get_details()
	{
		 $query="SELECT 
					gallery.*,
					add_catageory.catageory AS catageory_name
				FROM
					gallery
					INNER JOIN add_catageory ON gallery.catageory=add_catageory.catageory
				WHERE
					(gallery.deleted_id=0) AND (gallery.active_status=1) AND (add_catageory.active_status=1)
					AND (add_catageory.deleted_id=0) "; 
					
		$result = $this->DBH->prepare($query);
		$result->execute();
		return $result;
	}
		
	// Fetch from table by id
	function basic_fetch_by_id_master($table,$where,$id)
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
	
   
			function basic_fetch_two_edit_id($table,$where1,$id1,$where2,$id2)
	{
            $query="SELECT 
					*
				FROM 
					`".$table."`
				WHERE 
					(deleted_id=0)
				
     		    AND
					(".$where1."='".$id1."')
				AND
					(".$where2."!='".$id2."')"	; 
					
					 
					

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
		
	}
	
	function basic_fetch_three_edit_id($table,$where1,$id1,$where2,$id2,$where3,$id3)
	{
            $query="SELECT 
					*
				FROM 
					`".$table."`
				WHERE 
					(deleted_id=0)
				
     		    AND
					(".$where1."='".$id1."')
				AND
					(".$where2."='".$id2."')
				AND
				   (".$where3."!='".$id3."')  "	;
					
					 
					

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
		
	}
	
	
	function get_max_id($table,$where)
	{
      $query="SELECT 
					max($where)
				FROM 
					`".$table."` "; 
				

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}
	
	
	function delete_by_id_mat($table,$where,$id)
	{

        $query="UPDATE
					
					`".$table."`
				SET
					deleted_id=1
				WHERE
				     
					".$where."='".$id."'"; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		return $result;
	}
					

	function pagination_material_details($start_from,$num_rec_per_page)
	{
		  $query="SELECT 
					td_manufacture_details.*,
                    td_job_order.job_order_number AS JOB_ORDER_NUMBER
					FROM 
					td_manufacture_details
				    INNER JOIN td_job_order ON td_manufacture_details.job_order_number=td_job_order.job_order_id
					
					WHERE		
					td_manufacture_details.deleted_id=0
					and td_job_order.deleted_id=0
										
				    LIMIT $start_from, $num_rec_per_page"; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}
	
	  function all_material_details()
	{
		 $query="SELECT 
					td_manufacture_details.*,
                    td_job_order.job_order_number AS JOB_ORDER_NUMBER
					FROM 
					td_manufacture_details
				    INNER JOIN td_job_order ON td_manufacture_details.job_order_number=td_job_order.job_order_id
					
					WHERE		
					td_manufacture_details.deleted_id=0
					and td_job_order.deleted_id=0 "; 	
										
				    		
				     

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}
	
 function delete_via_id($table,$where1,$id1)
	{
		 $query="DELETE
		         
				 FROM
					
					`".$table."`
				
				WHERE
				     
					".$where1."='".$id1."' "; 
				
		$result = $this->DBH->prepare($query);
		$result->execute();
		return $result;
	}
	
	
	
	
	

	

function basic_fetch_by_pagination_id($table,$where1,$id1,$start_from,$num_rec_page)
	{
          $query="SELECT 
					*
				FROM 
					`".$table."`
				WHERE 
					(deleted_id=0)
				AND
					(".$where1."='".$id1."')
				LIMIT 
                      $start_from,$num_rec_page"; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

   function pagination_customer($table,$start_from, $num_rec_per_page)
	{
		 $query="SELECT 
					*
				FROM 
					`".$table."`
				WHERE 
					(`deleted_id`=0)
				LIMIT $start_from, $num_rec_per_page"; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

  function basic_fetch_by_master_order_limit($start_from,$num_rec_page)
	{
   $query="SELECT 
					`m_ord`.*,
					`m_cust`.custormer_name
					FROM 
					`m_ord`
					LEFT OUTER JOIN `m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
					WHERE		
					`m_ord`.deleted_id=0
					LIMIT 
					$start_from,$num_rec_page
					"; 
              

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

function basic_fetch_by_master_order()
	{
   $query="SELECT 
					`m_ord`.*,
					`m_cust`.custormer_name
					FROM 
					`m_ord`
					LEFT OUTER JOIN `m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
					WHERE		
					`m_ord`.deleted_id=0
					
					"; 
              

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}


    function govt_order($where,$id)
	{
		$query="SELECT 
					`m_ord`.*,
					`m_cust`.custormer_name 
					FROM 
					`m_ord`
					LEFT OUTER JOIN 
					`m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
					WHERE		
					`m_ord`.$where=$id
					AND `m_ord`.deleted_id=0
			  "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}


 
      function govt_item_assign()
	{
		$query="SELECT 
					`ord_item_assign`.*,
					`m_ord`.o_srl,
					`m_ord`.srl_dt,
					`m_ord`.c_code,
					`m_cust`.custormer_name
					FROM 
					`ord_item_assign`
					LEFT OUTER JOIN 
					`m_ord` ON `ord_item_assign`.order_id=`m_ord`.order_id
					LEFT OUTER JOIN 
					 `m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
					WHERE		
					 `ord_item_assign`.deleted_id=0
					GROUP BY 
					`ord_item_assign`.order_id
				"; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

   function govt_item_assign_pagination($start_from,$num_rec_page)
	{
		$query="SELECT 
					`ord_item_assign`.*,
					`m_ord`.o_srl,
					`m_ord`.srl_dt,
					`m_ord`.c_code,
					`m_cust`.custormer_name
					FROM 
					`ord_item_assign`
					LEFT OUTER JOIN 
					`m_ord` ON `ord_item_assign`.order_id=`m_ord`.order_id
					LEFT OUTER JOIN 
					 `m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
					WHERE		
					 `ord_item_assign`.deleted_id=0
					GROUP BY 
					`ord_item_assign`.order_id
					LIMIT 
					     $start_from,$num_rec_page 
                "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}
 
    function item_assign_order($order_id)
	{
	       $query="SELECT 
					`ord_item_assign`.*,
					`prd_item`.prod_code,
					`prd_item`.pr_efcdt,
					`prd_item`.cms_code, 	
                    `prd_item`.proc_prc,
                    `prd_item`.prod_des_one
					FROM 
					`ord_item_assign`
					LEFT OUTER JOIN 
					`prd_item` ON `ord_item_assign`.prd_item_id=`prd_item`.prd_item_id
					WHERE		
					 `ord_item_assign`.deleted_id=0
					AND
					  `ord_item_assign`.order_id=$order_id
					  
				 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}
 
    function vendor_assign_order_product($ord_item_assign_id)
	{
	       $query="SELECT 
					`ord_item_assign`.quantity,
					`m_ord`.o_srl,
					`m_ord`.ord_dt,
					`m_cust`.custormer_name,
					`prd_item`.prod_code,
					`prd_item`.pr_efcdt,
					`prd_item`.cms_code, 	
					`prd_item`.proc_prc
					FROM 
					`ord_item_assign`
					LEFT OUTER JOIN 
					`prd_item` ON `ord_item_assign`.prd_item_id=`prd_item`.prd_item_id
					LEFT OUTER JOIN 
					`m_ord` ON `ord_item_assign`.order_id=`m_ord`.order_id
					LEFT OUTER JOIN 
					`m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
					WHERE		
					`ord_item_assign`.deleted_id=0
					AND
					`ord_item_assign`.ord_item_assign_id=$ord_item_assign_id
				 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

function get_assigned_vendor($order_id,$item_id)
	{
	       $query="SELECT 
					`sor_item`.*,
					`ord_item_assign`.order_id,
					`ord_item_assign`.prd_item_id,
					`mfgr`.mfg_name,
					`mfgr`.mfgr_id
					FROM 
					`sor_item`
					LEFT OUTER JOIN 
					`ord_item_assign` ON `sor_item`.ord_item_assign_id=`ord_item_assign`.ord_item_assign_id
					LEFT OUTER JOIN 
					`mfgr` ON `sor_item`.mfgr_id=`mfgr`.mfgr_id
					WHERE		
					`sor_item`.deleted_id=0
					AND
					`ord_item_assign`.prd_item_id=$item_id
					AND
					`ord_item_assign`.order_id=$order_id
				 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

	function get_sorted_assigned_vendor($order_id,$item_id)
	{
	         $query="SELECT 
					`sor_item`.*,
					`ord_item_assign`.order_id,
					`ord_item_assign`.prd_item_id,
					`mfgr`.mfg_name
					FROM 
					`sor_item`
					LEFT OUTER JOIN 
					`ord_item_assign` ON `sor_item`.ord_item_assign_id=`ord_item_assign`.ord_item_assign_id
					LEFT OUTER JOIN 
					`mfgr` ON `sor_item`.mfgr_id=`mfgr`.mfgr_id
				    
				    WHERE		
					`sor_item`.deleted_id=0
					AND
					`ord_item_assign`.ord_item_assign_id=$item_id
					AND
					`ord_item_assign`.order_id=$order_id
				 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

function get_master_work_order($id1)
	{
	       $query="SELECT 
					`m_word`.*,
					`m_ord`.order_id,
					`m_ord`.o_srl,
					`m_ord`.c_code,
                    `m_ord`.ord_dt,
                    `m_ord`.prof_amt,
                    `m_cust`.custormer_name
					FROM 
					`m_word`
					LEFT OUTER JOIN 
					`m_ord` ON `m_word`.ord_id=`m_ord`.order_id
					LEFT OUTER JOIN 
					`m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
					WHERE		
					`m_word`.deleted_id=0
					AND
					`m_word`.ord_id=$id1
					
				 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}


 function get_work_order_item($order_id,$item_id)
	{
	       $query="SELECT 
					`ord_item_assign`.*,
					`prd_item`.prod_code,
					`prd_item`.pr_efcdt,
					`prd_item`.cms_code, 	
                    `prd_item`.proc_prc
					FROM 
					`ord_item_assign`
					LEFT OUTER JOIN 
					`prd_item` ON `ord_item_assign`.prd_item_id=`prd_item`.prd_item_id
					WHERE		
					 `ord_item_assign`.deleted_id=0
					AND
					  `ord_item_assign`.order_id=$order_id
					AND
					   `ord_item_assign`.prd_item_id=$item_id
				 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

   function get_word_item($order_id,$item_id)
	{
	       $query="SELECT 
					`word_item`.*,
					`prd_item`.prod_code,
					`prd_item`.pr_efcdt,
					`prd_item`.cms_code, 	
                    `prd_item`.proc_prc
					FROM 
					`word_item`
					LEFT OUTER JOIN 
					`prd_item` ON `word_item`.item_id=`prd_item`.prd_item_id
					WHERE		
					 `word_item`.deleted_id=0
					AND
					  `word_item`.ord_id=$order_id
					AND
					   `word_item`.item_id=$item_id
				 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}



   function get_word_vendor($order_id,$item_id,$vendor_id)
	{
	       $query="SELECT 
					`sor_item`.*,
					`ord_item_assign`.order_id,
					`ord_item_assign`.prd_item_id,
					`mfgr`.mfg_name
					FROM 
					`sor_item`
					LEFT OUTER JOIN 
					`ord_item_assign` ON `sor_item`.ord_item_assign_id=`ord_item_assign`.ord_item_assign_id
					LEFT OUTER JOIN 
					`mfgr` ON `sor_item`.mfgr_id=`mfgr`.mfgr_id
					WHERE		
					 `sor_item`.deleted_id=0
					AND
					  `ord_item_assign`.order_id=$order_id
					AND
					   `ord_item_assign`.prd_item_id=$item_id
					AND
					    `sor_item`.mfgr_id=$vendor_id
				 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

  function get_master_chalan($id1)
	{
	        $query="SELECT 
					`m_chl`.ch_no,
					`m_chl`.chalan_date,
					`m_word`.word_no,
					`m_word`.word_date,
					`m_ord`.order_id,
					`m_ord`.o_srl,
					`m_ord`.c_code,
                    `m_ord`.ord_dt,
                    `m_ord`.prof_amt,
                    `m_cust`.custormer_name
					FROM 
					`m_ord`
					LEFT OUTER JOIN 
					`m_word` ON `m_ord`.order_id=`m_word`.ord_id
					LEFT OUTER JOIN 
					`m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
					LEFT OUTER JOIN 
					`m_chl` ON `m_ord`.order_id=`m_chl`.job_order_no
					WHERE		
					`m_chl`.deleted_id=0
					AND
					`m_chl`.job_order_no=$id1
				"; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

function get_master_sale_bill($id1)
	{
	       $query="SELECT 
					`m_word`.word_no,
					`m_word`.word_date,
					`m_chl`.ch_no,
					`m_chl`.chalan_date,
					`m_ord`.order_id,
					`m_ord`.o_srl,
					`m_ord`.c_code,
                    `m_ord`.ord_dt,
                    `m_ord`.prof_amt,
                    `m_cust`.custormer_name
					FROM 
					`m_ord`
					LEFT OUTER JOIN 
					`m_word` ON    `m_ord`.order_id=`m_word`.ord_id
					LEFT OUTER JOIN 
					`m_chl` ON    `m_ord`.order_id=`m_chl`.job_order_no	
					LEFT OUTER JOIN 
					`m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
					WHERE		
					`m_word`.deleted_id=0
					AND
					`m_chl`.deleted_id=0
					AND
					`m_ord`.deleted_id=0
					AND
					`m_ord`.order_id=$id1
				 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

function get_item_sale_bill($id1)
	{
	       $query="SELECT 
					`msale_bl`.sbill_no,
					`msale_bl`.sbill_dt,
					`m_word`.word_no,
					`m_word`.word_date,
					`m_chl`.ch_no,
					`m_chl`.chalan_date,
					`m_ord`.order_id,
					`m_ord`.o_srl,
					`m_ord`.c_code,
                    `m_ord`.ord_dt,
                    `m_ord`.prof_amt,
                    `m_cust`.custormer_name
					FROM 
					`m_ord`
					LEFT OUTER JOIN 
					`m_word` ON    `m_ord`.order_id=`m_word`.ord_id
					LEFT OUTER JOIN 
					`m_chl` ON    `m_ord`.order_id=`m_chl`.job_order_no	
					LEFT OUTER JOIN 
					`m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
					LEFT OUTER JOIN 
					`msale_bl` ON `m_ord`.order_id=`msale_bl`.job_order_no
					WHERE		
					`m_word`.deleted_id=0
					AND
					`m_chl`.deleted_id=0
					AND
					`m_ord`.deleted_id=0
					AND
					`msale_bl`.deleted_id=0
                   AND
					`m_ord`.order_id=$id1
				 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}


	function get_assigned_vendor_for_word($order_id)
	{
	       $query="SELECT 
					`sor_item`.*,
					`ord_item_assign`.order_id,
					`ord_item_assign`.prd_item_id,
					`mfgr`.mfg_name,
					`mfgr`.mfgr_id
					FROM 
					`sor_item`
					LEFT OUTER JOIN 
					`ord_item_assign` ON `sor_item`.ord_item_assign_id=`ord_item_assign`.ord_item_assign_id
					LEFT OUTER JOIN 
					`mfgr` ON `sor_item`.mfgr_id=`mfgr`.mfgr_id
					WHERE		
					`sor_item`.deleted_id=0
					AND
					`ord_item_assign`.order_id=$order_id
					GROUP BY 
					`sor_item`.mfgr_id
                  "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}
	 function item_assign_for_work_order($order_id,$vendor_id)
	{
	        $query="SELECT 
					`ord_item_assign`.*,
					`sor_item`.mfgr_id,
					`sor_item`.assigned_quantity,
					`prd_item`.prod_code,
					`prd_item`.pr_efcdt,
					`prd_item`.cms_code, 	
                    `prd_item`.proc_prc
					FROM 
					`ord_item_assign`
					LEFT OUTER JOIN 
					`prd_item` ON `ord_item_assign`.prd_item_id=`prd_item`.prd_item_id
					LEFT OUTER JOIN
					`sor_item` ON `ord_item_assign`.ord_item_assign_id=`sor_item`.ord_item_assign_id 
					WHERE		
					`sor_item`.deleted_id=0
					AND
					  `ord_item_assign`.order_id=$order_id
					AND
					  `sor_item`.mfgr_id=$vendor_id  
				"; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

function item_order_vendor_details_for_work_order($order_id,$item_id,$vendor_id)
	{
	        $query="SELECT 
					`m_ord`.o_srl,
					`m_ord`.ord_dt,
					`m_ord`.c_code,
					`m_ord`.prof_amt,
					`ord_item_assign`.order_id,
					`ord_item_assign`.prd_item_id,
					`ord_item_assign`.quantity,
					`sor_item`.mfgr_id,
					`sor_item`.assigned_quantity,
					`prd_item`.prod_code,
					`prd_item`.pr_efcdt,
					`prd_item`.cms_code, 	
                    `prd_item`.proc_prc,
                    `mfgr`.mfg_name,
					`m_cust`.custormer_name

					FROM 
					`ord_item_assign`
					LEFT OUTER JOIN 
					`m_ord` ON `ord_item_assign`.order_id=`m_ord`.order_id
					LEFT OUTER JOIN
					`prd_item` ON `ord_item_assign`.prd_item_id=`prd_item`.prd_item_id
					LEFT OUTER JOIN
					`sor_item` ON `sor_item`.ord_item_assign_id=`ord_item_assign`.ord_item_assign_id
					LEFT OUTER JOIN
					`mfgr` ON `mfgr`.mfgr_id=`sor_item`.mfgr_id
					LEFT OUTER JOIN
					`m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
					 
					WHERE		
					`ord_item_assign`.deleted_id=0
					AND
					  `ord_item_assign`.order_id=$order_id
					AND
					  `ord_item_assign`.prd_item_id=$item_id  
					AND
					  `sor_item`.mfgr_id=$vendor_id  
				"; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

function work_order_job_vendor($order_id,$vendor_id)
	{
	        $query="SELECT 
					`m_ord`.o_srl,
					`m_ord`.ord_dt,
					`m_ord`.c_code,
					`m_ord`.prof_amt,
					`ord_item_assign`.order_id,
					`ord_item_assign`.prd_item_id,
					`ord_item_assign`.quantity,
					`sor_item`.mfgr_id,
					`sor_item`.assigned_quantity,
					`mfgr`.mfg_name,
					`m_cust`.custormer_name

					FROM 
					`ord_item_assign`
					LEFT OUTER JOIN 
					`m_ord` ON `ord_item_assign`.order_id=`m_ord`.order_id
					LEFT OUTER JOIN
					`sor_item` ON `sor_item`.ord_item_assign_id=`ord_item_assign`.ord_item_assign_id
					LEFT OUTER JOIN
					`mfgr` ON `mfgr`.mfgr_id=`sor_item`.mfgr_id
					LEFT OUTER JOIN
					`m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
					 
					WHERE		
					`ord_item_assign`.deleted_id=0
					AND
					  `ord_item_assign`.order_id=$order_id
					
					AND
					  `sor_item`.mfgr_id=$vendor_id  
				"; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}



function view_work_order()
	{
	        $query="SELECT 
					`sw_item`.*,
					`m_ord`.o_srl,
					`m_ord`.ord_dt,
					`m_ord`.prof_amt,
					`mfgr`.mfg_name,
					`m_cust`.custormer_name
					FROM 
					`sw_item`
					LEFT OUTER JOIN 
					`m_ord` ON `sw_item`.order_id=`m_ord`.order_id
					LEFT OUTER JOIN
					`mfgr` ON `sw_item`.mfgr_id=`mfgr`.mfgr_id
					LEFT OUTER JOIN
					`m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
					WHERE		
					`sw_item`.deleted_id=0
				  "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

function view_work_order_pagination($start_from,$num_rec_page)
	{
	         $query="SELECT 
					`sw_item`.*,
					`m_ord`.o_srl,
					`m_ord`.ord_dt,
					`m_ord`.prof_amt,
					`mfgr`.mfg_name,
					`m_cust`.custormer_name
					FROM 
					`sw_item`
					LEFT OUTER JOIN 
					`m_ord` ON `sw_item`.order_id=`m_ord`.order_id
					LEFT OUTER JOIN
					`mfgr` ON `sw_item`.mfgr_id=`mfgr`.mfgr_id
					LEFT OUTER JOIN
					`m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
					WHERE		
					`sw_item`.deleted_id=0
					LIMIT
					 $start_from,$num_rec_page
				  "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

function view_master_chalan()
	{
	        $query="SELECT 
					`m_chl`.ch_no,
					`m_chl`.chalan_date,
					`m_chl_item`.received_quantity,
					`m_chl`.m_chl_id,
                    `sw_item`.word_no,
                    `sw_item`.sw_itm_id,
					`sw_item`.word_date,
					`m_ord`.o_srl,
					`m_ord`.ord_dt
					FROM 
					`m_chl`
					LEFT OUTER JOIN 
					`sw_item` ON `m_chl`.sw_itm_id=`sw_item`.sw_itm_id
					LEFT OUTER JOIN
					`m_ord` ON `sw_item`.order_id=`m_ord`.order_id
					LEFT OUTER JOIN
					`m_chl_item` ON `m_chl`.m_chl_id=`m_chl_item`.m_chl_id
					WHERE		
					`m_chl`.deleted_id=0
				  "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}
function view_master_chalan_pagination($start_from,$num_rec_page)
	{
	        $query="SELECT 
					`m_chl`.ch_no,
					`m_chl`.chalan_date,
					`m_chl`.m_chl_id,
					`m_chl_item`.m_chl_item_id,
					`m_chl_item`.received_quantity,
                    `sw_item`.word_no,
					`sw_item`.word_date,
					`sw_item`.sw_itm_id,
					`sw_item`.order_id,
					`sw_item`.item_id,
					`sw_item`.mfgr_id,
					`m_ord`.o_srl,
					`m_ord`.ord_dt
					FROM 
					`m_chl`
					LEFT OUTER JOIN 
					`sw_item` ON `m_chl`.sw_itm_id=`sw_item`.sw_itm_id
					LEFT OUTER JOIN
					`m_ord` ON `sw_item`.order_id=`m_ord`.order_id
					LEFT OUTER JOIN
					`m_chl_item` ON `m_chl`.m_chl_id=`m_chl_item`.m_chl_id
					WHERE		
					`m_chl`.deleted_id=0
				  LIMIT
					 $start_from,$num_rec_page
                   "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

function chalan_item_assign($job_order_id,$vendor_id)
{
			  $query="SELECT 
					`ord_item_assign`.order_id,
					`ord_item_assign`.prd_item_id,
					`ord_item_assign`.quantity,
					`sor_item`.assigned_quantity,
					`sor_item`.mfgr_id,
					`prd_item`.prod_code,
					`prd_item`.cms_code
					FROM 
					`sor_item`
					LEFT OUTER JOIN 
					`ord_item_assign` ON `sor_item`.ord_item_assign_id=`ord_item_assign`.ord_item_assign_id
					LEFT OUTER JOIN
					`prd_item` ON `ord_item_assign`.prd_item_id=`prd_item`.prd_item_id
					WHERE		
					`ord_item_assign`.deleted_id=0
					AND
					`sor_item`.deleted_id=0
					AND
					`ord_item_assign`.order_id=$job_order_id
					AND
					`sor_item`.mfgr_id=$vendor_id
           "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
}



function work_order_details_chalan($work_order_id)
	{
	        $query="SELECT 
					`sw_item`.*,
					`m_ord`.o_srl,
					`m_ord`.ord_dt,
					`m_ord`.prof_amt,
					`mfgr`.mfg_name,
					`m_cust`.custormer_name
					FROM 
					`sw_item`
					LEFT OUTER JOIN 
					`m_ord` ON `sw_item`.order_id=`m_ord`.order_id
					LEFT OUTER JOIN
					`mfgr` ON `sw_item`.mfgr_id=`mfgr`.mfgr_id
					LEFT OUTER JOIN
					`m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
					WHERE		
					`sw_item`.deleted_id=0
					AND
					`sw_item`.sw_itm_id=$work_order_id
				  "; 
                      
		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}


 function previous_chalan_information($chalan_id,$work_order_no)
  {
			  $query="SELECT
								`m_chl_item`.received_quantity,
								`m_chl_item`.m_chl_item_id,
								`m_chl_item`.order_id,
								`m_chl_item`.mfgr_id,
								`m_chl_item`.prd_item_id,
								`m_chl`.ch_no,
								`m_chl`.chalan_date,
								`sw_item`.word_no,
								`sw_item`.sw_itm_id
						 	FROM 
							    `sw_item`
								LEFT OUTER JOIN `m_chl` ON `sw_item`.sw_itm_id=`m_chl`.sw_itm_id
								LEFT OUTER JOIN `m_chl_item` ON `m_chl_item`.m_chl_id =`m_chl`.m_chl_id 
							WHERE		
								`m_chl_item`.deleted_id=0
								AND `m_chl`.deleted_id=0
								AND	`m_chl_item`.work_order_id=$work_order_no"; 
           
			$result = $this->DBH->prepare($query);
			$result->execute();
			$data=$result->fetchAll();
			return $data;



}

function chalan_received_qty($job_order_id,$item_id,$vendor_id)
	{
	        $query="SELECT 
					`sw_item`.*,
					`m_chl_item`.received_quantity
					FROM 
					`sw_item`
					LEFT OUTER JOIN 
					`m_chl_item` ON `sw_item`.sw_itm_id	=`m_chl_item`.work_order_id
					WHERE		
					`sw_item`.deleted_id=0
					AND
					 `sw_item`.order_id=$job_order_id
					AND
					 `sw_item`.mfgr_id=$vendor_id 

				  "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

 function get_sale_bill_details($chalan_id)
	{
	        $query="SELECT 
					`m_chl`.ch_no,
					`m_chl`.chalan_date,
                    `sw_item`.word_no,
                    `sw_item`.word_date,
					`m_ord`.o_srl,
					`m_ord`.ord_dt,
					`m_ord`.prof_amt,
					`m_cust`.custormer_name
					FROM 
					`m_chl`
					LEFT OUTER JOIN 
					`sw_item` ON `m_chl`.sw_itm_id=`sw_item`.sw_itm_id
					LEFT OUTER JOIN 
					`m_ord` ON `sw_item`.order_id=`m_ord`.order_id
					LEFT OUTER JOIN 
					`m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
					WHERE		
					`m_chl`.deleted_id=0
					AND
					`m_chl`.m_chl_id=$chalan_id
				 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}  

function view_sale_bill_details()
	{
	        $query="SELECT 
				`msale_bl`.*,
				`m_chl`.ch_no,
				`m_chl`.chalan_date,
                `sw_item`.word_no,
                `sw_item`.word_date,
				`m_ord`.o_srl,
				`m_ord`.ord_dt,
				`m_ord`.prof_amt,
				`m_cust`.custormer_name
				FROM 
				`msale_bl`
				LEFT OUTER JOIN 
				`m_chl` ON `msale_bl`.m_chl_id=`m_chl`.m_chl_id
				LEFT OUTER JOIN 
				`sw_item` ON `m_chl`.sw_itm_id=`sw_item`.sw_itm_id
				LEFT OUTER JOIN 
				`m_ord` ON `sw_item`.order_id=`m_ord`.order_id
				LEFT OUTER JOIN 
				`m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
				WHERE		
				`msale_bl`.deleted_id=0
				"; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}  

  function view_sale_bill_details_pagination($start_from,$num_rec_page)
	{
	        $query="SELECT 
					`msale_bl`.*,
					`m_chl`.ch_no,
					`m_chl`.chalan_date,
                    `sw_item`.word_no,
                    `sw_item`.word_date,
					`m_ord`.o_srl,
					`m_ord`.ord_dt,
					`m_ord`.prof_amt,
					`m_cust`.custormer_name
					FROM 
					`msale_bl`
					LEFT OUTER JOIN 
					`m_chl` ON `msale_bl`.m_chl_id=`m_chl`.m_chl_id
					LEFT OUTER JOIN 
					`sw_item` ON `m_chl`.sw_itm_id=`sw_item`.sw_itm_id
					LEFT OUTER JOIN 
					`m_ord` ON `sw_item`.order_id=`m_ord`.order_id
					LEFT OUTER JOIN 
					`m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
					WHERE		
					`msale_bl`.deleted_id=0
					LIMIT
					 $start_from,$num_rec_page
				"; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	} 


function master_item_chalan_join($work_order_id)
	{
	        $query="SELECT 
							`m_chl_item`.work_order_id,
							`m_chl_item`.order_id,
							`m_chl_item`.mfgr_id,
							`m_chl`.ch_no,
							`m_chl`.m_chl_id
							FROM 
							`m_chl`
							LEFT OUTER JOIN 
							`m_chl_item` ON `m_chl`.m_chl_id=`m_chl_item`.m_chl_id

							WHERE		
							`m_chl`.deleted_id=0
							AND
							`m_chl_item`.deleted_id=0
							AND
							`m_chl`.sw_itm_id=$work_order_id
							AND
							`m_chl_item`.work_order_id=$work_order_id

				  "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

    function view_chalan_details()
	{
	        $query="SELECT 
							`m_chl`.ch_no,
							`m_chl`.chalan_date,
							`m_chl`.m_chl_id,
							`sw_item`.word_no,
							`m_ord`.o_srl
							FROM 
							`m_chl`
							LEFT OUTER JOIN 
							`sw_item` ON `m_chl`.sw_itm_id=`sw_item`.sw_itm_id
                            LEFT OUTER JOIN 
							`m_ord` ON `sw_item`.order_id=`m_ord`.order_id
							WHERE		
							`m_chl`.deleted_id=0
					 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}
    
     function view_chalan_details_pagination($start_from,$num_rec_per_page)
	{
	        $query="SELECT 
							`m_chl`.ch_no,
							`m_chl`.chalan_date,
							`m_chl`.m_chl_id,
							`sw_item`.word_no,
							`m_ord`.o_srl
							FROM 
							`m_chl`
							LEFT OUTER JOIN 
							`sw_item` ON `m_chl`.sw_itm_id=`sw_item`.sw_itm_id
                            LEFT OUTER JOIN 
							`m_ord` ON `sw_item`.order_id=`m_ord`.order_id
							WHERE		
							`m_chl`.deleted_id=0
							LIMIT $start_from,$num_rec_per_page
					 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

    function chalan_item_product_join($id)
	{
	        $query="SELECT 
							`m_chl_item`.received_quantity,
							`prd_item`.prod_code
							FROM 
							`m_chl_item`
							LEFT OUTER JOIN 
							`prd_item` ON `m_chl_item`.prd_item_id=`prd_item`.prd_item_id
                            WHERE		
							`m_chl_item`.deleted_id=0
							AND
							`m_chl_item`.m_chl_id=$id
					 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

   
   
    function print_work_order_report($id)
	{
	      $query="SELECT 
						    `m_ord`.*,
							`m_cust`.custormer_name,
							`m_cust`.address_one,
							`m_cust`.address_two,
							`m_cust`.address_three
                         FROM 
							`m_ord`
							INNER JOIN 
							`m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
                        WHERE		
							`m_ord`.order_id=$id
					 "; 
          
		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

   function print_chalan_report($id)
	{
	      $query="SELECT 
						    `m_chl`.m_chl_id,
						    `m_chl`.ch_no,
						    `m_chl`.chalan_date,
						    `m_chl`.m_chl_id,
						    `sw_item`.word_no,
						    `sw_item`.word_date,
                            `m_ord`.o_srl,
                            `m_ord`.ord_dt,
                            `mfgr`.mfg_name,
							`m_cust`.custormer_name,
							`m_cust`.address_one,
							`m_cust`.address_two,
							`m_cust`.address_three
                         FROM 
							`m_chl`
							LEFT OUTER JOIN 
							`sw_item` ON `m_chl`.sw_itm_id=`sw_item`.sw_itm_id
							LEFT OUTER JOIN 
							`m_ord` ON `sw_item`.order_id=`m_ord`.order_id
							LEFT OUTER JOIN 
							`mfgr` ON `sw_item`.mfgr_id=`mfgr`.mfgr_id
							LEFT OUTER JOIN 
							`m_cust` ON `m_ord`.c_code=`m_cust`.cust_id
                        WHERE		
							`m_chl`.m_chl_id=$id
					 "; 
          
		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

     function cms_menu_join()
	{
	        $query="SELECT 
							`td_menu_details`.*,
							`td_menu`.menu
							FROM 
							`td_menu_details`
							LEFT OUTER JOIN 
							`td_menu` ON `td_menu_details`.menu_id=`td_menu`.menu_id
                           WHERE		
							`td_menu_details`.deleted_id=0
					 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}
	function cms_gallery_join()
	{
	        $query="SELECT 
						`td_gallery`.*,
						`td_menu`.menu
						FROM 
						`td_gallery`
						LEFT OUTER JOIN 
						`td_menu` ON `td_gallery`.menu_id=`td_menu`.menu_id
						WHERE		
						`td_gallery`.deleted_id=0
					 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}
	function cms_page_join()
	{
	        $query="SELECT 
						`td_page_content`.*,
						`td_page`.page_name
						FROM 
						`td_page_content`
						LEFT OUTER JOIN 
						`td_page` ON `td_page_content`.page_id=`td_page`.page_id
						WHERE		
						`td_page_content`.deleted_id=0
					 "; 

		$result = $this->DBH->prepare($query);
		$result->execute();
		$data=$result->fetchAll();
		return $data;
	}

}
?>
 