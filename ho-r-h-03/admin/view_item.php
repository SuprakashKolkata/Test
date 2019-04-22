<?php
include ('header.php');
if(isset($_REQUEST['delete_id']))
	{
			$delete_id=$_REQUEST['delete_id']; 
			$data_delete=$obj_user->delete_by_id("prd_item",'prd_item_id',$delete_id);
            if($data_delete)
				{               
						echo "<script language='javascript' type='text/javascript'>
							  alert('Deleted Successfully');
							  window.location = 'view_item';
							  </script>";
					
				}
	}	
	
  
    $num_rec_per_page=10;
    if (isset($_GET["page"])) { $page  = urldecode(base64_decode($_GET["page"])); } else { $page=1; }; 
    $start_from = ($page-1) * $num_rec_per_page;
    
    $data_item=$obj_user->basic_fetch_by_id_pagination("prd_item","deleted_id",'0',$start_from,$num_rec_per_page);
    //$data_item=$obj_user->basic_fetch_by_id("prd_item","deleted_id",'0');
    $data_all_item=$obj_user->basic_fetch_by_id("prd_item","deleted_id",'0');
    
	$total_records=count($data_all_item);
    $total_pages = ceil($total_records / $num_rec_per_page); 
 ?>
        <div class="breadcrumbwidget">
        	<ul class="breadcrumb">
                <li><a href="dashboard">Home</a> <span class="divider">/</span></li>
                <li><a href="view_item">Item List</a></li>
            </ul>
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>Item List</h1>
        </div><!--pagetitle-->
        
        <div class="maincontent">
        	<div class="contentinner">
            <?php //include("header_menu.php");?>
            	
                <h4 class="widgettitle ctitle">Item List
				  <a  style="color:#fff;float:right" href="add_item" >Add Item</a>
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
									$pre_page="view_item?page=".$r_page;
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
									$next_page="view_item?page=".$n_page;
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
						  <li class="right"><span class="pageinfo">Current Page:<?php echo $page; ?>and Total Page:<?php echo $total_pages ; ?> </span></li>
                           

						  </ul>
			       <?php
			      }
			       ?>			
                <span class="clearall"></span>
                        </div> 
                        
                        <br />
                        
                      <table class="table table-bordered mailview_employee">
                          <thead>
	                            <tr>
	                                <th class="head1 ">Sl No.</th>
									<th class="head1 attachement">Product Code</th>
									<th class="head0">CMS Code</th>
									<th class="head1">Date</th>
	                                <th class="head0">Price</th>
	                                <th class="head0">Action</th>
	                            </tr>
                         </thead>
                            <tbody>
                                <?php
                                    $icount=1;
                               foreach($data_item as $value_item)
                                {
                                ?>
                                <tr class="unread">
								    <td><?php echo $icount;?></td> 
                                    <td><?php echo $value_item['prod_code']; ?></td>
                                    <td><?php echo $value_item['cms_code'];?></td>
                                    <td class="date">
                                       Sale Effc. Dt:<?php echo date('d-M-Y',strtotime($value_item['sl_efcdt']));?><br>
                                       Product Effc. Dt:<?php echo date('d-M-Y',strtotime($value_item['pr_efcdt ']));?>
                                    </td>
									<td class="date">
                                       Sale Price:<?php echo $value_item['sale_prc'];?><br>
                                       Product Price:<?php echo $value_item['proc_prc'];?>
                                    </td>
                                    

                                    <td>
								       <input type="button"   style="background-color:green;color:white;width:55px; margin-bottom:2px;"  value="Edit"  onclick="edit_data(<?php echo $value_item['prd_item_id'];?>)">
						               <input type="button"   style="background-color:red;color:white;"  value="Delete"  onclick="delete_data(<?php echo $value_item['prd_item_id'];?>,<?php echo $icount;?>)">
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
			function delete_data(prd_item_id,icount)
			{
			  var a=confirm('Are you sure?'); 
				if(a==true)
				{
				window.location.href='view_item.php?delete_id='+prd_item_id;
				}
				else
				{
				return false;
				}
			}

			  
		  function edit_data(prd_item_id)
		  {
			  
		     window.location.href='add_item.php?prd_item_id='+prd_item_id;
		  
		  }
</script>