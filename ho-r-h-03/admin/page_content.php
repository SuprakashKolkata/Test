<?php
include ('header.php');
$data_page=$obj_user->basic_fetch_by_two_id("td_page",'deleted_id','0','active_status','1');

if(isset($_GET['page_content_id']))
{
  $page_content_id=$_REQUEST['page_content_id']; 
  $data_page_content=$obj_user->basic_fetch_by_two_id("td_page_content",'deleted_id','0','page_content_id',$page_content_id);
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
				move_uploaded_file($_FILES['txt_attachment']['tmp_name'], "../img/page/".$file_name);
			}

		}
		else
		{
			if(isset($_GET['page_content_id']))
			{
			  $file_name=stripslashes ( $_POST ['hidden_image'] ) ;
			}
		}
        $page_id =stripslashes ( $_POST ['page_id'] ) ;
        $title =stripslashes ( $_POST ['title'] ) ;
	    $sub_title=addslashes ( $_POST ['sub_title'] ) ;
	    
	    $content=addslashes ( $_POST ['content'] ) ;
	    
	    $data=array
		(  'page_id'=>$page_id,
		   'image'=>$file_name,
		   'title'=>$title,
		   'sub_title'=>$sub_title,
		   'content'=>$content
		   
		);
		
		if(isset($_GET['page_content_id']))
		{
            $result=$obj_user->update_by_id("td_page_content",$data,"page_content_id",$page_content_id);
            //print_r($result); exit;
		}
		else
		{
		  $result=$obj_user->basic_insert("td_page_content",$data);
		  
		}
		
		if($result)
		{
			echo "<script language='javascript' type='text/javascript'>
			//alert('Successfully Inserted');
			window.location = 'view_page_content';
			</script>";
		}
		else
		{
			echo "<script language='javascript' type='text/javascript'>
			//alert('Not Inserted');
			window.location = 'view_page_content';
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
               
				<li><a href="#">Page Content</a></li>
            </ul>
        </div><!--breadcrumbs-->
        

         <form class="stdform stdform2" enctype="multipart/form-data" method="post">
        <div class="maincontent">
        	<div class="contentinner content-bootstrap">
			
 
          
			<div class="row-fluid">
			 <span class="span12 no_margin_padding">
			   <h4 class="widgettitle ctitle" width="100%">Page Content
			    <a  style="color:#fff;float:right" href="view_page_content" >View Page Content</a>
			   </h4>
				  <div class="widgetcontent">
                        <div class="bordered shadowed nopadding">
                   
			<table class="table table-bordered mailview_employee">
                    
                     <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Page <span style="color:red;">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
									<select  name="page_id" required id="subject" class="input-xlarge span12" style="height:38px;width:150px;"    >
									         <option value="">Select</option>
									         <?php
									              foreach($data_page as $value_page)
									              {
									         ?>
									              <option value="<?php echo $value_page['page_id'];?>"  <?php if(isset($_GET['page_content_id']) && $data_page_content[0]['page_id']==$value_page['page_id'] ){?> selected  <?php } ?>><?php echo $value_page['page_name'];?></option>
									         <?php
									              }
									         ?>
									</select>
								</span>
								</th>
								
                          </tr>
				    </thead>




                    <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Title&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
									<input type="text"  name="title" id="subject" class="input-xlarge span12" placeholder="Enter Title" style="height:38px;width:387px;"  <?php if(isset($_GET['page_content_id'])){?> value="<?php echo $data_page_content[0]['title'] ; ?>" <?php } ?>  />
								</span>
								</th>
								
                          </tr>
				    </thead>
                   
				 <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Sub Title&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <textarea  name="sub_title" id="subject" class="input-xlarge span12" placeholder="Enter Sub Title"  style="height:50px;width:390px;"   /><?php if(isset($_GET['page_content_id'])){ echo $data_page_content[0]['sub_title'] ;   } ?></textarea>								</span>
								</th>
								
                          </tr>
				    </thead>
				     <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Content&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <textarea  name="content" id="subject" class="input-xlarge span12" placeholder="Enter Content"  style="height:96px;width:390px;"   /><?php if(isset($_GET['page_content_id'])){ echo $data_page_content[0]['content'] ;   } ?></textarea>								</span>
								</th>
								
                          </tr>
				    </thead>
				
				  <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Image &nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
									<input type="file"  name="txt_attachment" id="subject"  />
                                           
                                    <?php
                                           if(isset($_GET['page_content_id']))
                                           {
                                   ?>
                                    <input type="hidden"  name="hidden_image" id="subject" class="input-xlarge span12" value="<?php echo $data_page_content[0]['image'] ; ?>" />
                                    <?php
                                              if($data_page_content[0]['image']!='')
                                               {
                                    ?>
                                    <img src="../img/page/<?php echo $data_page_content[0]['image'] ; ?>" style="height:84px;width:190px;">
                                   <?php        	
                                               }
                                           }
                                    ?>

								</span>
								</th>
								
                          </tr>
				    </thead>
				   <!--  <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Date&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
									<input type="text"  name="date_fac" id="datepicker" class="input-xlarge span12"  style="height:38px;width:150px;"  <?php if(isset($_GET['page_content_id'])){?> value="<?php echo $data_page_content[0]['date'] ; ?>" <?php }else{?> value="<?php echo date('d-m-Y') ; ?>" <?php } ?>  />
								</span>
								</th>
								
                          </tr>
				    </thead> -->
                   
                    
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


	
