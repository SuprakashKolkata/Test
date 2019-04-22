<?php
include ('header.php');
if(isset($_GET['event_id']))
{
  $event_id=$_REQUEST['event_id']; 
  $data_event=$obj_user->basic_fetch_by_two_id("td_event",'deleted_id','0','event_id',$event_id);
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
				move_uploaded_file($_FILES['txt_attachment']['tmp_name'], "../img/event/".$file_name);
			}

		}
		else
		{
			if(isset($_GET['event_id']))
			{
			  $file_name=stripslashes ( $_POST ['hidden_image'] ) ;
			}
		}
        $title =stripslashes ( $_POST ['title'] ) ;
	    $sub_title=addslashes ( $_POST ['sub_title'] ) ;
	    $content=addslashes ( $_POST ['content'] ) ;

	    $data=array
		(
		   'image'=>$file_name,
		   'name'=>$title,
		   'post'=>$sub_title
		);
		
		if(isset($_GET['event_id']))
		{
            $result=$obj_user->update_by_id("td_event",$data,"event_id",$event_id);
		}
		else
		{
		  $result=$obj_user->basic_insert("td_event",$data);
		  //print_r($result); exit;
		}
		
		if($result)
		{
			echo "<script language='javascript' type='text/javascript'>
			//alert('Successfully Inserted');
			window.location = 'view_event';
			</script>";
		}
		else
		{
			echo "<script language='javascript' type='text/javascript'>
			//alert('Not Inserted');
			window.location = 'view_event';
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
               
				<li><a href="#">Event</a></li>
            </ul>
        </div><!--breadcrumbs-->
        

         <form class="stdform stdform2" enctype="multipart/form-data" method="post">
        <div class="maincontent">
        	<div class="contentinner content-bootstrap">
			
 
          
			<div class="row-fluid">
			 <span class="span12 no_margin_padding">
			   <h4 class="widgettitle ctitle" width="100%">Event
			    <a  style="color:#fff;float:right" href="view_event" >View Event</a>
			   </h4>
				  <div class="widgetcontent">
                        <div class="bordered shadowed nopadding">
                   
			<table class="table table-bordered mailview_employee">
                    <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Name<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
									<input type="text"  required name="title" id="subject" class="input-xlarge span12" placeholder="Enter Name" style="height:38px;width:387px;"  <?php if(isset($_GET['event_id'])){?> value="<?php echo $data_event[0]['name'] ; ?>" <?php } ?>  />
								</span>
								</th>
								
                          </tr>
				    </thead>
                   
				 <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Post&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <textarea  name="sub_title" id="subject" class="input-xlarge span12" placeholder="Enter Post"  style="height:40px;width:390px;"   /><?php if(isset($_GET['event_id'])){ echo $data_event[0]['post'] ;   } ?></textarea>								</span>
								</th>
								
                          </tr>
				    </thead>
				     <!-- <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Content<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <textarea  name="content" id="subject" required class="input-xlarge span12" placeholder="Enter Content"  style="height:96px;width:390px;"   /><?php if(isset($_GET['event_id'])){ echo $data_event[0]['content'] ;   } ?></textarea>								</span>
								</th>
								
                          </tr>
				    </thead> -->
				
				  <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Image<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
									<input type="file"  name="txt_attachment" id="subject" <?php if(!isset($_GET['event_id'])){ ?>  required <?php } ?> />
                                           
                                    <?php
                                           if(isset($_GET['event_id']))
                                           {
                                   ?>
                                    <input type="hidden"  name="hidden_image" id="subject" class="input-xlarge span12" value="<?php echo $data_event[0]['image'] ; ?>" />
                                    <img src="../img/event/<?php echo $data_event[0]['image'] ; ?>" style="height:84px;width:190px;">
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
  
 


	
