
<?php
include ('header.php');
$current_date=date('d-m-Y');
if(isset($_GET['page_id']))
{
  $page_id=$_REQUEST['page_id']; 
  $data_page=$obj_user->basic_fetch_by_two_id("td_page",'deleted_id','0','page_id',$page_id);
}
?>
<style type="text/css">
#upload-file-container {
   background: url(img/attachment.png) no-repeat;
}

#upload-file-container input {
   filter: alpha(opacity=0);
   opacity: 0;
   height: 0;
   }
</style>

<?php

	if(isset($_POST['submit']))
	{ 
	    
		$page =stripslashes ( $_POST ['page'] ) ;
	   
        $data=array
		(
		   'page_name'=>$page
		   
		);
		
		if(isset($_GET['page_id']))
		{
            $result=$obj_user->update_by_id("td_page",$data,"page_id",$page_id);
		}
		else
		{
		  $result=$obj_user->basic_insert("td_page",$data);
		  //print_r($result); exit;
		}
		
		if($result)
		{
			echo "<script language='javascript' type='text/javascript'>
			//alert('Successfully Inserted');
			window.location = 'view_page';
			</script>";
		}
		else
		{
			echo "<script language='javascript' type='text/javascript'>
			//alert('Not Inserted');
			window.location = 'view_page';
			</script>";
		}
 } 
			
	
?>

 
 <style type="text/css" media="all">
	@import "css1/info.css";
	@import "css1/main.css";
	@import "css1/widgEditor.css";
</style>

<script type="text/javascript" src="scripts1/widgEditor.js"></script>

 
        <div class="breadcrumbwidget">
        	<ul class="breadcrumb">
                <li><a href="dashboard">Home</a> <span class="divider">/</span></li>
               
				<li><a href="#">Page</a></li>
            </ul>
        </div><!--breadcrumbs-->
        

         <form class="stdform stdform2" enctype="multipart/form-data" method="post">
        <div class="maincontent">
        	<div class="contentinner content-bootstrap">
			
 
          
			<div class="row-fluid">
			 <span class="span12 no_margin_padding">
			   <h4 class="widgettitle ctitle" width="100%">Page
			    <a  style="color:#fff;float:right" href="view_page" >View Page</a>
			   </h4>
				  <div class="widgetcontent">
                        <div class="bordered shadowed nopadding">
                   
			<table class="table table-bordered mailview_employee">
                    <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Page<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
									<input type="text"  name="page" id="subject" class="input-xlarge span12" placeholder="Enter Page" required style="height:38px;width:387px;"  <?php if(isset($_GET['page_id'])){?> value="<?php echo $data_page[0]['page_name'] ; ?>" <?php } ?>  />
								</span>
								</th>
								
                          </tr>
				    </thead>
                   
				
				
				    
                    
             </table>
				 </div>
                    </div>
                </span>
               
                   
                </div><!--row-fluid-->
                <p class="stdformbutton">
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn">Cancel</button>
            </p>
           </form>
        </div>
		
		</div><!--maincontent--> 
<?php
include ('footer.php');
?>  
  
 


	
