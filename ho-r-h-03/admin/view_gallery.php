<?php
include ('header.php');
if(isset($_REQUEST['delete_id']))
  {
		$delete_id=$_REQUEST['delete_id']; 
		$data_delete=$obj_user->delete_by_id("td_gallery",'gallery_id',$delete_id);
		if($data_delete)
		{               
			echo "<script language='javascript' type='text/javascript'>
			alert('Deleted Successfully');
			window.location = 'view_gallery';
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
			$result=$obj_user->update_by_id("td_gallery",$data,'gallery_id',$status_id);
			//print_r($result); exit;
		}
		else
		{
			$data=array('active_status'=>'1');
			$result=$obj_user->update_by_id("td_gallery",$data,'gallery_id',$status_id);
		}
		if($result)
		{               
			echo "<script language='javascript' type='text/javascript'>
			alert('Status Changed Successfully');
			window.location = 'view_gallery';
			</script>";
       }
  }	
//$data_gallery=$obj_user->basic_fetch_by_id("td_gallery",'deleted_id','0');
$data_gallery=$obj_user->cms_gallery_join()
?>
        <div class="breadcrumbwidget">
        	<ul class="breadcrumb">
                <li><a href="dashboard">Home</a> <span class="divider">/</span></li>
                <li><a href="#">View Gallery</a></li>
            </ul>
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>View Gallery</h1>
        	
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
                      <th class="head1">Menu</th>          
                      <th class="head0">Title</th>
                      <th class="head1">Sub Title</th>
                       <th class="head0">Status</th>
                      <th class="head0">Action</th>
                               
                            </tr>

                            </thead>
                            <tbody>
                                <?php
                                $icount=1;
                                foreach($data_gallery as $value_gallery)
                                {
                                ?>
                                 <tr class="unread">
                                 <td><?php echo  $icount; ?></td>
                                 <td><img src="../img/gallery/<?php echo $value_gallery['image']; ?>" style="height:84px;width:100px;" ></td>
                                 <td><?php echo $value_gallery['menu']; ?></td>
                                  <td><?php echo $value_gallery['name']; ?></td>
                                  <td><?php echo $value_gallery['sub_title']; ?></td>
                                  <td><a <?php if($value_gallery['active_status']!=1){ ?> class="btn btn-danger btn-circle" <?php }else { ?> class="btn btn-info btn-circle" <?php } ?> href="view_gallery?status_id=<?php echo $value_gallery['gallery_id'];?>&status=<?php echo $value_gallery['active_status']; ?>" ><?php if($value_gallery['active_status']==1){echo 'Active';}else{echo 'Inactive';}?></a></td>
                                  <td>
                                  <input type="button"   style="background-color:green;color:white;width:55px; margin-bottom:2px;"  value="Edit"  onclick="edit_data(<?php echo $value_gallery['gallery_id'];?>)">
                                  <input type="button"   style="background-color:red;color:white;"  value="Delete"  onclick="delete_data(<?php echo $value_gallery['gallery_id'];?>,<?php echo $icount;?>)">

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
	function edit_data(gallery_id)
	{
      window.location.href='gallery.php?gallery_id='+gallery_id;
	}
	function delete_data(gallery_id,icount)
  {
		var a=confirm('Are you sure?'); 
		if(a==true)
		{
		window.location.href='view_gallery?delete_id='+gallery_id;
		}
		else
		{
		return false;
		}
  }

</script>