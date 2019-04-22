<?php
include ('header.php');

  
        
  if(isset($_REQUEST['delete_id']))
			 {
			$delete_id=$_REQUEST['delete_id']; 
		/*	$key=$_REQUEST['key'];
			$security='';
		   $security=urlencode(md5($delete_id."Weather"));
				if($security!=$key)
				{
				  echo "<script>window.location='dashboard'; </script>";
				}*/
		$data_delete=$obj_user->delete_by_id("td_admin",'admin_id',$delete_id);

     
		 if($data_delete)
				{               
						echo "<script language='javascript' type='text/javascript'>
							  alert('Deleted Successfully');
							  window.location = 'view_employee';
							  </script>";
					
				}
			}	





		if(isset($_REQUEST['status_id']))
			 {
			$status_id=$_REQUEST['status_id']; 
			/*$key=$_REQUEST['key'];
			$security='';
		    $security=urlencode(md5($status_id."Weather"));
				if($security!=$key)
				{
				  echo "<script>window.location='dashboard'; </script>";
				}*/
		$mode=$_REQUEST['mode']; 	
		
		   
       if($mode=="Active")
	   {
                 $chk_status=0;
	   }
	      else
		  {
			 $chk_status=1; 
		  }			  
			
			
			$data=array(
			 'active_status'=>$chk_status
             );
		
           $data_status=$obj_user->update_by_id("td_admin",$data,"admin_id",$status_id);

     
     if($data_status)
            {               
                    echo "<script language='javascript' type='text/javascript'>
                          //alert('Deleted Successfully');
                          window.location = 'view_employee';
                          </script>";
                
            }
	}	
  
 
    $num_rec_per_page=10;
    if (isset($_GET["page"])) { $page  = urldecode(base64_decode($_GET["page"])); } else { $page=1; }; 
    $start_from = ($page-1) * $num_rec_per_page;
    
    $data_emp_details=$obj_user->pagination_item("td_admin","user_role","Employee",$start_from,$num_rec_per_page);
    $data_all_emp_details=$obj_user->basic_fetch_by_id("td_admin","user_role","Employee");
    
	$total_records=count($data_all_emp_details);
    $total_pages = ceil($total_records / $num_rec_per_page); 




 
 // $data_emp_details=$obj_user->basic_fetch_by_two_id("td_admin","deleted_id",'0',"user_role","Employee");

?>
        <div class="breadcrumbwidget">
        	<ul class="breadcrumb">
                <li><a href="dashboard">Home</a> <span class="divider">/</span></li>
                <li><a href="#">Employee List</a></li>
            </ul>
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>Employee List</h1>
        </div><!--pagetitle-->
        
        <div class="maincontent">
        	<div class="contentinner">
            <?php //include("header_menu.php");?>
            	
                <h4 class="widgettitle ctitle">Employee List
				  <a  style="color:#fff;float:right" href="add_employee" >Add Employee</a>
                </h4>
                	<div id="mail">
                    	<div class="msghead">
                            <?php 
							if($total_records>$num_rec_per_page)
							{
							?>
							<ul class="msghead_menu">
                               
                                <li class="right btn-group">
								
								<?php
		     $r_page=base64_encode(urlencode($page-1));
			 $pre_page="view_employee?page=".$r_page;
			if(urldecode(base64_decode($r_page))==0)
			{
			?>
			<a  href="#" class="btn prev prev_disabled"><span class="icon-chevron-left"></span></a>

			<?php
			}
			else
			{
				    ?>
			<a  href="<?php echo $pre_page ;?>" class="btn prev prev_disabled"><span class="icon-chevron-left"></span></a>
			<?php
			}
			 
			$n_page=base64_encode(urlencode($page+1));
			$next_page="view_employee?page=".$n_page;
			if($total_pages<urldecode(base64_decode($n_page)))
			{
			?>
		<a href="#"class="btn next"><span class="icon-chevron-right"></span></a>

		  <?php
            }
			else
			{
			?>
		<a href="<?php echo $next_page ;?>"class="btn next"><span class="icon-chevron-right"></span></a>
           
		   <?php
			}
		   ?>
			</li>
               	<li class="right"><span class="pageinfo">Current Page:<?php echo $page; ?> and Total Page:<?php echo $total_pages ;?></span></li>
                          </ul>
                           <?php
                          }
                           ?>
                            <span class="clearall"></span>
                        </div><!--msghead-->
                        
                        <br />
                        
                        <table class="table table-bordered mailview_employee">
                           <!--  <colgroup>
                                <col class="con1 width4" />
                                <col class="con0 width4" />
                                <col class="con1 width15" />
                                <col class="con0 width63" />
                                <col class="con1 width4" />
                                <col class="con1 width10" />
                            </colgroup> -->
                            <thead>
                            <tr>
                                <!--<th class="head1 aligncenter"><input type="checkbox" name="checkall" class="checkall" /></th>
                                -->
                                <th class="head1 ">Sl No.</th>
								<th class="head1 attachement">Image</th>
								<th class="head1">Name</th>
                                <th class="head0">Address</th>
								<th class="head0">Phone No.</th>
                                <th class="head0">Email</th>
                               <!--  <th class="head0">Status</th> -->
								<th class="head0">Action</th>
                               
                            </tr>

                            </thead>
                           


                            <tbody>
                                <?php
                                    $icount=1;
                               if(count($data_emp_details)>0)
                               {
	                               foreach($data_emp_details as $value_emp_details)
	                                {
                                ?>
                                <tr class="unread">
								<td><?php echo $icount;?></td> 
                                   <?php
									if($value_emp_details['image']!="" )
									{ 
								    ?>
								<td><img src="img/emp_profile/<?php echo $value_emp_details['image']; ?>" style="height:70px;width:100px;"></td>	
									<?php
										}
										 else
										   {
									?>
										   <td><img src="img/mail/no_file.jpg" style="height:70px;width:100px;"></td>	
									<?php
										   }
									  ?>



									<td><?php echo $value_emp_details['first_name']." ".$value_emp_details['middle_name']." ".$value_emp_details['last_name'];?></td> 
                                    <td><a href="#" class="title"><?php echo $value_emp_details['address']; ?></a></td>
                                    <td><a href="#" class="title"><?php echo $value_emp_details['phone']; ?></a></td>
									<td class="date"><?php echo $value_emp_details['email_id'];?></td>
                                    
									<?php
									if($value_emp_details['active_status']==1)
									{
									?>
										<input type="hidden"  id="button_mode<?php echo $icount; ?>"  value="<?php echo 'Active';?>">
										<td  class="date">
										   <input type="button"   style="background-color:green;color:white;"  value="Active"  onclick="change_status(<?php echo $value_emp_details['admin_id'];?>,<?php echo $icount;?>)" >
										</td>						
									<?php
									}
									else
									{
									?>
										<input type="hidden"  id="button_mode<?php echo $icount; ?>"  value="<?php echo 'Inactive';?>">
										<td  class="date">
										  <input type="button"   style="background-color:red;color:white;"  value="Inactive"  onclick="change_status(<?php echo $value_emp_details['admin_id'];?>,<?php echo $icount;?>)">									
										</td>						
									<?php
									}
									?>
	                                <td   class="date">
										 <input type="hidden"  id="button_role<?php echo $icount; ?>"  value="<?php echo 'Employee';?> ">
										 <input type="button"   style="background-color:green;color:white;width:55px; margin-bottom:2px;"  value="Edit"  onclick="edit_data(<?php echo $value_emp_details['admin_id'];?>,<?php echo $icount;?>)">
										 <input type="button"   style="background-color:red;color:white;"  value="Delete"  onclick="delete_data(<?php echo $value_emp_details['admin_id'];?>,<?php echo $icount;?>)">
								     </td>						
								</tr>
                                <?php
                                $icount++;
                                   }
                                 }
                                 else
                                 {
                                 ?>
                                 <td  class="date" colspan="7"><h2 style="text-align:center;color:red;"> <br>Sorry! No data Available<br> </h2></td>
                                 <?php
                                 }
                                ?>

                                <input type="hidden" name="txt_count" id="txt_count" value="<?php echo $icount; ?>">
                           </tbody>
                        </table>             
                    </div>
                <!--#tabs-->
            </div><!--contentinner-->
        </div><!--maincontent-->
        
   <?php
include ('footer.php');?>

<script>
          function change_status(employee_id,icount)
  {
	  
     var mode=document.getElementById('button_mode'+icount).value;  //alert(mode); return false;
     window.location.href='view_employee?status_id='+employee_id+'&mode='+mode;
  
  }

  function delete_data(employee_id,icount)
  {
		var a=confirm('Are you sure?'); 
		if(a==true)
		{
		window.location.href='view_employee?delete_id='+employee_id;
		}
		else
		{
		return false;
		}
  }

  
  function edit_data(employee_id,icount)
  {
	 
	 var user_role=document.getElementById('button_role'+icount).value;  
	// alert(user_role); return false;
     window.location.href='edit_employee?admin_id='+employee_id+'&user_role='+user_role;
  
  }
		</script>