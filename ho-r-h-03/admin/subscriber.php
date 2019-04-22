<?php
include ('header.php');
if(isset($_REQUEST['delete_id']))
  {
    $delete_id=$_REQUEST['delete_id']; 
    $data_delete=$obj_user->delete_by_id("td_subscribe",'subscribe_id',$delete_id);
    if($data_delete)
    {               
      echo "<script language='javascript' type='text/javascript'>
      alert('Deleted Successfully');
      window.location=subscriber;
      </script>";
    }
  } 

$data_msg=$obj_user->basic_fetch_by_id("td_subscribe",'deleted_id','0');
?>
        <div class="breadcrumbwidget">
        	<ul class="breadcrumb">
                <li><a href="dashboard">Home</a> <span class="divider">/</span></li>
                <li><a href="#">View Subscriber</a></li>
            </ul>
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>View Subscriber</h1>
        </div><!--pagetitle-->
        
        <div class="maincontent">
        	<div class="contentinner">
                  <div id="mail">
                    	 <br />
                        <table class="table table-bordered mailview_employee">
                           <thead>
                            <tr>
                                <th class="head1">Sl. No</th>           
                                    
                                <th class="head0">Email</th>
                                
                                <th class="head1">Date</th>
                                <th class="head0">Action</th>
                            </tr>

                            </thead>
                            <tbody>
                                <?php
                                $icount=1;
                                foreach($data_msg as $value_msg)
                                {
                                ?>
                                 <tr class="unread">
                                  <td><?php echo $icount; ?></td>
                                  <td><?php echo $value_msg['email']; ?></td>
                                  <td><?php echo date('d-M-Y h:i:s A',strtotime($value_msg['date']));?></td>
                                  <td>
                                 
                                    <input type="button"   style="background-color:red;color:white;"  value="Delete"  onclick="delete_data(<?php echo $value_msg['subscribe_id'];?>,<?php echo $icount;?>)">
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
	// function edit_data(logo_id)
	// {
 //      window.location.href='company_report.php?logo_id='+logo_id;
	// }
  function delete_data(subscribe_id,icount)
  {
    var a=confirm('Are you sure?'); 
    if(a==true)
    {
       window.location.href='subscriber?delete_id='+subscribe_id;
    }
    else
    {
    return false;
    }
  }
</script>