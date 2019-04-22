<?php
include ('header.php');
if(isset($_REQUEST['delete_id']))
  {
		$delete_id=$_REQUEST['delete_id']; 
		$data_delete=$obj_user->delete_by_id("td_slider",'slider_id',$delete_id);
		if($data_delete)
		{               
			echo "<script language='javascript' type='text/javascript'>
			alert('Deleted Successfully');
			window.location = 'view_slider';
			</script>";
       }
  }	
if(isset($_REQUEST['status_id'])&& isset($_REQUEST['status']) )
  {
		$status_id=$_REQUEST['status_id']; 
		$status=$_REQUEST['status']; 

		if($status==1)
		{
			$data=array('active_status'=>'0');
			$result=$obj_user->update_by_id("td_slider",$data,'slider_id',$status_id);
			//print_r($result); exit;
		}
		else
		{
			$data=array('active_status'=>'1');
			$result=$obj_user->update_by_id("td_slider",$data,'slider_id',$status_id);
		}
		if($result)
		{               
			echo "<script language='javascript' type='text/javascript'>
			alert('Status Changed Successfully');
			window.location = 'view_slider';
			</script>";
       }
  }	
$data_slider=$obj_user->basic_fetch_by_id("td_slider",'deleted_id','0');
?>
        <div class="breadcrumbwidget">
        	<ul class="breadcrumb">
                <li><a href="dashboard">Home</a> <span class="divider">/</span></li>
                <li><a href="#">View Slider</a></li>
            </ul>
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>View Slider</h1>
        	
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
                      <th class="head0">Action</th>
                               
                            </tr>

                            </thead>
                            <tbody>
                                <?php
                                $icount=1;
                                foreach($data_slider as $value_slider)
                                {
                                ?>
                                 <tr class="unread">
                                 <td><?php echo  $icount; ?></td>
                                 <td><img src="../img/slider/<?php echo $value_slider['image']; ?>" style="height:84px;width:100px;" ></td>
                                  <td><?php echo $value_slider['title']; ?></td>
                                  <td><?php echo $value_slider['sub_title']; ?></td>
                                  <td><a <?php if($value_slider['active_status']!=1){ ?> class="btn btn-danger btn-circle" <?php }else { ?> class="btn btn-info btn-circle" <?php } ?> href="view_slider?status_id=<?php echo $value_slider['slider_id'];?>&status=<?php echo $value_slider['active_status']; ?>" ><?php if($value_slider['active_status']==1){echo 'Active';}else{echo 'Inactive';}?></a></td>
                                  <td>
                                  <input type="button"   style="background-color:green;color:white;width:55px; margin-bottom:2px;"  value="Edit"  onclick="edit_data(<?php echo $value_slider['slider_id'];?>)">
                                  <input type="button"   style="background-color:red;color:white;"  value="Delete"  onclick="delete_data(<?php echo $value_slider['slider_id'];?>,<?php echo $icount;?>)">

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
	function edit_data(slider_id)
	{
      window.location.href='index_slider.php?slider_id='+slider_id;
	}
	function delete_data(slider_id,icount)
  {
		var a=confirm('Are you sure?'); 
		if(a==true)
		{
		window.location.href='view_slider?delete_id='+slider_id;
		}
		else
		{
		return false;
		}
  }

</script>