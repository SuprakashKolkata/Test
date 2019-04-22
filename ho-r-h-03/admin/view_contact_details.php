<?php
include ('header.php');
//$current_page=end(explode('/',$_SERVER['PHP_SELF']));
// if(isset($_REQUEST['delete_id']))
//   {
// 		$delete_id=$_REQUEST['delete_id']; 
// 		$data_delete=$obj_user->delete_by_id("td_contact",'contact_id',$delete_id);
// 		if($data_delete)
// 		{               
// 			echo "<script language='javascript' type='text/javascript'>
// 			alert('Deleted Successfully');
// 			window.location ='view_contact_details';
// 			</script>";
//        }
//   }	
if(isset($_REQUEST['status_id'])&& isset($_REQUEST['status']) )
  {
		$status_id=$_REQUEST['status_id']; 
		$status=$_REQUEST['status']; 

		if($status==1)
		{
			$data=array('active_status'=>'0');
			$result=$obj_user->update_by_id("td_contact",$data,'contact_id',$status_id);
			//print_r($result); exit;
		}
		else
		{
			$data=array('active_status'=>'1');
			$result=$obj_user->update_by_id("td_contact",$data,'contact_id',$status_id);
		}
		if($result)
		{               
			echo "<script language='javascript' type='text/javascript'>
			alert('Status Changed Successfully');
			window.location='view_contact_details';
			</script>";
       }
  }	
$data_contact=$obj_user->basic_fetch_by_id("td_contact",'deleted_id','0');
?>
        <div class="breadcrumbwidget">
        	<ul class="breadcrumb">
                <li><a href="dashboard">Home</a> <span class="divider">/</span></li>
                <li><a href="#">View Contact Details</a></li>
            </ul>
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>View Contact Details</h1>
        	
        </div><!--pagetitle-->
        
        <div class="maincontent">
        	<div class="contentinner">
                  <div id="mail">
                    	 <br />
                        <table class="table table-bordered mailview_employee">
                           <thead>
                            <tr>
                      <th class="head1">Sl. No</th>             
                      <th class="head1">Address</th>          
                      <th class="head0">Email</th>
                      <th class="head1">Phone</th>
                      <th class="head1">Social Media Link</th>
                      <th class="head1">Status</th>
                      <th class="head0">Action</th>
                               
                            </tr>

                            </thead>
                            <tbody>
                                <?php
                                $icount=1;
                                foreach($data_contact as $value_contact)
                                {
                                ?>
                                 <tr class="unread">
                                 <td><?php echo  $icount; ?></td>
                             
                                  <td><?php echo $value_contact['address']; ?></td>
                                  <td><?php echo $value_contact['email_id']; ?></td>
                                  <td><?php echo $value_contact['phone']; ?></td>
                                  <td>
                                       Facebook:<?php echo $value_contact['facebook']; ?><br>
                                       Twitter:<?php echo $value_contact['twitter']; ?><br>
                                       Linked In:<?php echo $value_contact['linkedin']; ?><br>
                                       Pinterest:<?php echo $value_contact['pinterest']; ?><br>
                                       Google+:<?php echo $value_contact['google']; ?><br>
                                 </td> 
                                  <td><a <?php if($value_contact['active_status']!=1){ ?> class="btn btn-danger btn-circle" <?php }else { ?> class="btn btn-info btn-circle" <?php } ?> href="view_contact_details?status_id=<?php echo $value_contact['contact_id'];?>&status=<?php echo $value_contact['active_status']; ?>" ><?php if($value_contact['active_status']==1){echo 'Active';}else{echo 'Inactive';}?></a></td>
                                  
                                  <td>
                                  <input type="button"   style="background-color:green;color:white;width:55px; margin-bottom:2px;"  value="Edit"  onclick="edit_data(<?php echo $value_contact['contact_id'];?>)">
                                 <!--  <input type="button"   style="background-color:red;color:white;"  value="Delete"  onclick="delete_data(<?php echo $value_contact['contact_id'];?>,<?php echo $icount;?>)"> -->

                                  </td>
                                </tr>
                                <?php
                                $icount++;
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
include ('footer.php');
?>
<script>
	function edit_data(contact_id)
	{
      window.location.href='contact_details.php?contact_id='+contact_id;
	}
	// function delete_data(contact_id,icount)
 //  {
	// 	var a=confirm('Are you sure?'); 
	// 	if(a==true)
	// 	{
	// 	window.location.href='view_facilities?delete_id='+contact_id;
	// 	}
	// 	else
	// 	{
	// 	return false;
	// 	}
 //  }

</script>