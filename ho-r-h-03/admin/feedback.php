<?php
include ('header.php');
$current_date=date('d-m-Y');
if(isset($_GET['feedback_id']))
{
  $feedback_id=$_REQUEST['feedback_id']; 
  $data_feedback=$obj_user->basic_fetch_by_two_id("td_feedback",'deleted_id','0','feedback_id',$feedback_id);
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
				move_uploaded_file($_FILES['txt_attachment']['tmp_name'], "../img/feedback/".$file_name);
			}

		}
		else
		{
			if(isset($_GET['feedback_id']))
			{
			  $file_name=stripslashes ( $_POST ['hidden_image'] ) ;
			}
		}
        $name =stripslashes ( $_POST ['name'] ) ;
	    $feedback=addslashes ( $_POST ['feedback'] ) ;
	    $date=addslashes ( $_POST ['date'] ) ;
	    if($date!='')
	    {
	      $date=date('Y-m-d',strtotime($date)) ;
	    }
        
	    $data=array
		(
		   'image'=>$file_name,
		   'name'=>$name,
		   'feedback'=>$feedback,
		   'date'=>$date
		);
		
		if(isset($_GET['feedback_id']))
		{
            $result=$obj_user->update_by_id("td_feedback",$data,"feedback_id",$feedback_id);
		}
		else
		{
		  $result=$obj_user->basic_insert("td_feedback",$data);
		  //print_r($result); exit;
		}
		
		if($result)
		{
			echo "<script language='javascript' type='text/javascript'>
			//alert('Successfully Inserted');
			window.location = 'view_feedback';
			</script>";
		}
		else
		{
			echo "<script language='javascript' type='text/javascript'>
			//alert('Not Inserted');
			window.location = 'view_feedback';
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
               
				<li><a href="#">Feedback</a></li>
            </ul>
        </div><!--breadcrumbs-->
        

         <form class="stdform stdform2" enctype="multipart/form-data" method="post">
        <div class="maincontent">
        	<div class="contentinner content-bootstrap">
			
 
          
			<div class="row-fluid">
			 <span class="span12 no_margin_padding">
			   <h4 class="widgettitle ctitle" width="100%">Feedback
			    <a  style="color:#fff;float:right" href="view_feedback" >View Feedback</a>
			   </h4>
				  <div class="widgetcontent">
                        <div class="bordered shadowed nopadding">
                   
			<table class="table table-bordered mailview_employee">
                    <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Name<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
									<input type="text"  name="name" id="subject" class="input-xlarge span12" placeholder="Enter Name" required style="height:38px;width:387px;"  <?php if(isset($_GET['feedback_id'])){?> value="<?php echo $data_feedback[0]['name'] ; ?>" <?php } ?>  />
								</span>
								</th>
								
                          </tr>
				    </thead>
                   
				 <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Feedback&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <textarea  name="feedback" id="subject" class="input-xlarge span12" placeholder="Enter Feedback"  style="height:96px;width:390px;"   /><?php if(isset($_GET['feedback_id'])){ echo $data_feedback[0]['feedback'] ;   } ?></textarea>								</span>
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
                                           if(isset($_GET['feedback_id']))
                                           {
                                   ?>
                                    <input type="hidden"  name="hidden_image" id="subject" class="input-xlarge span12" value="<?php echo $data_feedback[0]['image'] ; ?>" />
                                    <img src="../img/feedback/<?php echo $data_feedback[0]['image'] ; ?>" style="height:84px;width:190px;">
                                   <?php        	
                                           }
                                    ?>

								</span>
								</th>
								
                          </tr>
				    </thead>
				     <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Date&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <input type="text" name="date" id="datepicker" value="<?php if(isset($_GET['feedback_id'])){echo date('d-m-Y',strtotime($data_feedback[0]['date']));}else{ echo date('d-m-Y');} ?>"/>							</span>
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


	
