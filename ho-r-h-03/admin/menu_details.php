<?php
include ('header.php');
$data_menu=$obj_user->basic_fetch_by_id("td_menu",'active_status','1');
if(isset($_GET['menu_details_id']))
{
  $menu_details_id=$_REQUEST['menu_details_id']; 
  $data_menu_details=$obj_user->basic_fetch_by_two_id("td_menu_details",'deleted_id','0','menu_details_id',$menu_details_id);
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
	    
		if($_FILES['txt_attachment']['name']!='')
		{
			$code=rand(00,99);
			$extension=end(explode(".",$_FILES['txt_attachment']['name']));
			if($extension=='jpg' || $extension=='jpeg' || $extension=='png' || $extension=='gif')
			{
				$file_name=$code.md5($code).$_FILES['txt_attachment']['name'];
				move_uploaded_file($_FILES['txt_attachment']['tmp_name'], "../img/menu/".$file_name);
			}

		}
		else
		{
			if(isset($_GET['menu_details_id']))
			{
			  $file_name=stripslashes ( $_POST ['hidden_image'] ) ;
			}
		}
        $title =stripslashes ( $_POST ['title'] ) ;
	    $sub_title=addslashes ( $_POST ['sub_title'] ) ;
	    $menu_id=addslashes ( $_POST ['menu_id'] ) ;
	    if($date!='')
	    {
	      $date=date('Y-m-d',strtotime($date)) ;
	    }
        
	    $data=array
		(
		   'image'=>$file_name,
		   'title'=>$title,
		   'sub_title'=>$sub_title,
		   'menu_id'=>$menu_id
		);
		
		if(isset($_GET['menu_details_id']))
		{
            $result=$obj_user->update_by_id("td_menu_details",$data,"menu_details_id",$menu_details_id);
		}
		else
		{
		  $result=$obj_user->basic_insert("td_menu_details",$data);
		  //print_r($result); exit;
		}
		
		if($result)
		{
			echo "<script language='javascript' type='text/javascript'>
			//alert('Successfully Inserted');
			window.location = 'view_menu_details';
			</script>";
		}
		else
		{
			echo "<script language='javascript' type='text/javascript'>
			//alert('Not Inserted');
			window.location = 'view_menu_details';
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
               
				<li><a href="#">Menu Details</a></li>
            </ul>
        </div><!--breadcrumbs-->
        

         <form class="stdform stdform2" enctype="multipart/form-data" method="post">
        <div class="maincontent">
        	<div class="contentinner content-bootstrap">
			
 
          
			<div class="row-fluid">
			 <span class="span12 no_margin_padding">
			   <h4 class="widgettitle ctitle" width="100%">Menu Details
			    <a  style="color:#fff;float:right" href="view_menu_details" >View Menu Details</a>
			   </h4>
				  <div class="widgetcontent">
                        <div class="bordered shadowed nopadding">
                   
			<table class="table table-bordered mailview_employee">
                    
                     <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Menu<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
									<select  name="menu_id" id="subject" class="input-xlarge span12" required style="height:38px;width:387px;">
									<option value="">Select</option>
									<?php
									    foreach($data_menu as $value_menu)
									    {
									    // if(isset($_GET['menu_details_id']) && $data_menu_details[0]['menu_id']==$data_menu['menu_id'] )
									    //     {


									?>
									<option value="<?php echo $value_menu['menu_id']; ?>"  <?php if($data_menu_details[0]['menu_id']==$value_menu['menu_id']){ ?> selected <?php } ?>><?php echo $value_menu['menu']; ?></option>     
									<?php
									      // }
									       // else
									       // {
									?>
                                   <!-- <option value="<?php echo $value_menu['menu_id']; ?>" ><?php echo $value_menu['menu']; ?></option> --> 
									<?php
									      // }  

									}
									?>
								</span>
								</th>
								
                          </tr>
				    </thead>




                    <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Title<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
									<input type="text"  name="title" id="subject" class="input-xlarge span12" placeholder="Enter Title" required style="height:38px;width:387px;"  <?php if(isset($_GET['menu_details_id'])){?> value="<?php echo $data_menu_details[0]['title'] ; ?>" <?php } ?>  />
								</span>
								</th>
								
                          </tr>
				    </thead>
                   
				 <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Sub Title&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <textarea  name="sub_title" id="subject" class="input-xlarge span12" placeholder="Enter Sub Title"  style="height:96px;width:390px;"   /><?php if(isset($_GET['menu_details_id'])){ echo $data_menu_details[0]['sub_title'] ;   } ?></textarea>								</span>
								</th>
								
                          </tr>
				    </thead>
				   
				
				  <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Image<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
									<input type="file"  name="txt_attachment" id="subject"  />
                                           
                                    <?php
                                           if(isset($_GET['menu_details_id']))
                                           {
                                   ?>
                                    <input type="hidden"  name="hidden_image" id="subject" class="input-xlarge span12" value="<?php echo $data_menu_details[0]['image'] ; ?>" />
                                    <img src="../img/menu/<?php echo $data_menu_details[0]['image'] ; ?>" style="height:84px;width:190px;">
                                   <?php        	
                                           }
                                    ?>

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
  
 <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#datepicker').datepicker({
                   
      				format: "dd-mm-yyyy"
                });  
          });

		
			
</script>


	
