<?php
include ('header.php');
// if(isset($_REQUEST['delete_id']))
//   {
// 		$delete_id=$_REQUEST['delete_id']; 
// 		$data_delete=$obj_user->delete_by_id("td_about_us",'about_us_id',$delete_id);
// 		if($data_delete)
// 		{               
// 			echo "<script language='javascript' type='text/javascript'>
// 			alert('Deleted Successfully');
// 			window.location = 'view_about_us';
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
			$result=$obj_user->update_by_id("td_about_us",$data,'about_us_id',$status_id);
			//print_r($result); exit;
		}
		else
		{
			$data=array('active_status'=>'1');
			$result=$obj_user->update_by_id("td_about_us",$data,'about_us_id',$status_id);
		}
		if($result)
		{               
			echo "<script language='javascript' type='text/javascript'>
			alert('Status Changed Successfully');
			window.location = 'view_about_us';
			</script>";
       }
  }	
$data_about_us=$obj_user->basic_fetch_by_id("td_about_us",'deleted_id','0');
?>
        <div class="breadcrumbwidget">
        	<ul class="breadcrumb">
                <li><a href="dashboard">Home</a> <span class="divider">/</span></li>
                <li><a href="#">View About Us</a></li>
            </ul>
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>View About Us</h1>
        	
        </div><!--pagetitle-->
        
        <div class="maincontent">
        	<div class="contentinner">
                  <div id="mail">
                    	 <br />
                        <table class="table table-bordered mailview_employee">
                           <thead>
                            <tr>
                      <th class="head1">Sl. No</th>             
                      <th class="head1">Image</th>          
                      <th class="head0">Title</th>
                      <th class="head1">Sub Title</th>
                      <th class="head1">Content</th>
                      <th class="head0">Action</th>
                               
                            </tr>

                            </thead>
                            <tbody>
                                <?php
                                $icount=1;
                                foreach($data_about_us as $value_about_us)
                                {
                                ?>
                                 <tr class="unread">
                                 <td><?php echo  $icount; ?></td>
                                 <td><img src="../img/about_us/<?php echo $value_about_us['image']; ?>" style="height:84px;width:100px;" ></td>
                                  <td><?php echo $value_about_us['title']; ?></td>
                                  <td><?php echo $value_about_us['sub_title']; ?></td>
                                  <td><?php echo $value_about_us['content']; ?></td>
                                  <td><a <?php if($value_about_us['active_status']!=1){ ?> class="btn btn-danger btn-circle" <?php }else { ?> class="btn btn-info btn-circle" <?php } ?> href="view_about_us?status_id=<?php echo $value_about_us['about_us_id'];?>&status=<?php echo $value_about_us['active_status']; ?>" ><?php if($value_about_us['active_status']==1){echo 'Active';}else{echo 'Inactive';}?></a></td>
                                  <td>
                                  <input type="button"   style="background-color:green;color:white;width:55px; margin-bottom:2px;"  value="Edit"  onclick="edit_data(<?php echo $value_about_us['about_us_id'];?>)">
                                 <!--  <input type="button"   style="background-color:red;color:white;"  value="Delete"  onclick="delete_data(<?php echo $value_about_us['about_us_id'];?>,<?php echo $icount;?>)"> -->

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
	function edit_data(about_us_id)
	{
      window.location.href='about_us.php?about_us_id='+about_us_id;
	}
	// function delete_data(about_us_id,icount)
 //  {
	// 	var a=confirm('Are you sure?'); 
	// 	if(a==true)
	// 	{
	// 	window.location.href='view_about_us?delete_id='+about_us_id;
	// 	}
	// 	else
	// 	{
	// 	return false;
	// 	}
 //  }

</script>