<?php
include ('header.php');
$current_date=date('d-m-Y');
if(isset($_GET['facillities_id']))
{
  $facillities_id=$_REQUEST['facillities_id']; 
  $data_facillities=$obj_user->basic_fetch_by_two_id("td_facillities",'deleted_id','0','facillities_id',$facillities_id);
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
	    
		// if($_FILES['txt_attachment']['name']!='')
		// {
		// 	$code=rand(00,99);
		// 	$extension=end(explode(".",$_FILES['txt_attachment']['name']));
		// 	if($extension=='jpg' || $extension=='jpeg' || $extension=='png' || $extension=='gif')
		// 	{
		// 		$file_name=$code.md5($code).$_FILES['txt_attachment']['name'];
		// 		move_uploaded_file($_FILES['txt_attachment']['tmp_name'], "../img/feedback/".$file_name);
		// 	}

		// }
		// else
		// {
		// 	if(isset($_GET['facillities_id']))
		// 	{
		// 	  $file_name=stripslashes ( $_POST ['hidden_image'] ) ;
		// 	}
		// }


        $title =stripslashes ( $_POST ['title'] ) ;
	    $content=addslashes ( $_POST ['content'] ) ;
	    $icon=addslashes ( $_POST ['icon'] ) ;
	    $price=addslashes ( $_POST ['price'] ) ;
        
	    $data=array
		(
		   'title'=>$title,
		   'content'=>$content,
		   'icon'=>$icon,
		   'price'=>$price
		);
		
		if(isset($_GET['facillities_id']))
		{
            $result=$obj_user->update_by_id("td_facillities",$data,"facillities_id",$facillities_id);
		}
		else
		{
		  $result=$obj_user->basic_insert("td_facillities",$data);
		  //print_r($result); exit;
		}
		
		if($result)
		{
			echo "<script language='javascript' type='text/javascript'>
			//alert('Successfully Inserted');
			window.location = 'view_facilities';
			</script>";
		}
		else
		{
			echo "<script language='javascript' type='text/javascript'>
			//alert('Not Inserted');
			window.location = 'view_facilities';
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
               
				<li><a href="#">FACILITIES</a></li>
            </ul>
        </div><!--breadcrumbs-->
        

         <form class="stdform stdform2" enctype="multipart/form-data" method="post">
        <div class="maincontent">
        	<div class="contentinner content-bootstrap">
			
 
          
			<div class="row-fluid">
			 <span class="span12 no_margin_padding">
			   <h4 class="widgettitle ctitle" width="100%">FACILITIES
			    <a  style="color:#fff;float:right" href="view_facilities" >VIEW FACILITIES</a>
			   </h4>
				  <div class="widgetcontent">
                        <div class="bordered shadowed nopadding">
                   
			<table class="table table-bordered mailview_employee">
                    <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Title<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
									<input type="text"  name="title" id="subject" class="input-xlarge span12" placeholder="Enter Title" required style="height:38px;width:387px;"  <?php if(isset($_GET['facillities_id'])){?> value="<?php echo $data_facillities[0]['title'] ; ?>" <?php } ?>  />
								</span>
								</th>
								
                          </tr>
				    </thead>
                   
				 <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Content<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <textarea  required name="content" id="subject" class="input-xlarge span12" placeholder="Enter Content"  style="height:96px;width:390px;"   /><?php if(isset($_GET['facillities_id'])){ echo $data_facillities[0]['content'] ;   } ?></textarea>								</span>
								</th>
								
                          </tr>
				    </thead>
				     <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Fa Icon<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <input type="text"  name="icon" id="subject" class="input-xlarge span12" placeholder="Enter Icon Name" required style="height:38px;width:387px;"  <?php if(isset($_GET['facillities_id'])){?> value="<?php echo $data_facillities[0]['icon'] ; ?>" <?php } ?>  />								</span>
								</th>
								
                          </tr>
				    </thead>
				     <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Price<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <input type="text"  name="price" id="subject" class="input-xlarge span12" placeholder="Enter Price"  style="height:38px;width:387px;"  <?php if(isset($_GET['facillities_id'])){?> value="<?php echo $data_facillities[0]['price'] ; ?>" <?php } ?>  />								</span>
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
  
 


	
