<?php
include ('header.php');
if(isset($_REQUEST['delete_id']))
  {
		$delete_id=$_REQUEST['delete_id']; 
		$data_delete=$obj_user->delete_by_id("td_menu",'menu_id',$delete_id);
		if($data_delete)
		{               
			echo "<script language='javascript' type='text/javascript'>
			alert('Deleted Successfully');
			window.location ='view_menu';
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
			$result=$obj_user->update_by_id("td_menu",$data,'menu_id',$status_id);
			//print_r($result); exit;
		}
		else
		{
			$data=array('active_status'=>'1');
			$result=$obj_user->update_by_id("td_menu",$data,'menu_id',$status_id);
		}
		if($result)
		{               
			echo "<script language='javascript' type='text/javascript'>
			alert('Status Changed Successfully');
			window.location='view_menu';
			</script>";
       }
  }	
$data_menu=$obj_user->basic_fetch_by_id("td_menu",'deleted_id','0');
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
                      <th class="head1">Menu</th>          
                      <th class="head1">Status</th>
                      <th class="head0">Action</th>
                               
                            </tr>

                            </thead>
                            <tbody>
                                <?php
                                $icount=1;
                                foreach($data_menu as $value_menu)
                                {
                                ?>
                                 <tr class="unread">
                                 <td><?php echo  $icount; ?></td>
                             
                                  <td><?php echo $value_menu['menu']; ?></td>
                                  <td><a <?php if($value_menu['active_status']!=1){ ?> class="btn btn-danger btn-circle" <?php }else { ?> class="btn btn-info btn-circle" <?php } ?> href="view_menu?status_id=<?php echo $value_menu['menu_id'];?>&status=<?php echo $value_menu['active_status']; ?>" ><?php if($value_menu['active_status']==1){echo 'Active';}else{echo 'Inactive';}?></a></td>
                                  
                                  <td>
                                  <input type="button"   style="background-color:green;color:white;width:55px; margin-bottom:2px;"  value="Edit"  onclick="edit_data(<?php echo $value_menu['menu_id'];?>)">
                                 <input type="button"   style="background-color:red;color:white;"  value="Delete"  onclick="delete_data(<?php echo $value_menu['menu_id'];?>,<?php echo $icount;?>)"> 

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
	function edit_data(menu_id)
	{
      window.location.href='menu.php?menu_id='+menu_id;
	}
	function delete_data(menu_id,icount)
  {
		var a=confirm('Are you sure?'); 
		if(a==true)
		{
		window.location.href='view_menu?delete_id='+menu_id;
		}
		else
		{
		return false;
		}
  }

</script>