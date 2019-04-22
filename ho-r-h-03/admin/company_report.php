<?php
include ('header.php');
if(isset($_GET['logo_id']))
{
  $logo_id=$_REQUEST['logo_id']; 
  $data_company=$obj_user->basic_fetch_by_two_id("td_logo",'deleted_id','0','logo_id',$logo_id);
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
				move_uploaded_file($_FILES['txt_attachment']['tmp_name'], "../img/logo/".$file_name);
			}

		}
		else
		{
			if(isset($_GET['logo_id']))
			{
			  $file_name=stripslashes ( $_POST ['hidden_image'] ) ;
			}
		}
        $name =stripslashes ( $_POST ['txt_name'] ) ;
	    $address=addslashes ( $_POST ['txt_address'] ) ;
	    $phone=stripslashes ( $_POST ['txt_phone'] ) ;
	    
	    $comapny=stripslashes ( $_POST ['company'] ) ;
	    $comapny_icon =addslashes(trim($_POST ['company_icon'])) ; 

	    $awards=stripslashes ( $_POST ['awards'] ) ;
	    $awards_icon =addslashes(trim($_POST ['awards_icon'])) ; 

	    $clients=stripslashes ( $_POST ['clients'] ) ;
	    $clients_icon =addslashes(trim($_POST ['clients_icon'])) ; 

	    $rating=stripslashes ( $_POST ['rating'] ) ;
	    $rating_icon =addslashes(trim($_POST ['rating_icon'])) ; 
	    

	    $data=array
		(
		   'image'=>$file_name,
		   'company_name'=>$name,
		   'company_address'=>$address,
		   'phone'=>$phone,
		   'company'=>$comapny,
		   'company_icon'=>$comapny_icon,
		   'awards'=>$awards,
		   'awards_icon'=>$awards_icon,
		   'clients'=>$clients,
		   'clients_icon'=>$clients_icon,
		   'rating'=>$rating,
		   'rating_icon'=>$rating_icon
		);
		
		if(isset($_GET['logo_id']))
		{
            $result=$obj_user->update_by_id("td_logo",$data,"logo_id",$logo_id);
		}
		else
		{
		  $result=$obj_user->basic_insert("td_logo",$data);
		  //print_r($result); exit;
		}
		
		if($result)
		{
			echo "<script language='javascript' type='text/javascript'>
			//alert('Successfully Inserted');
			window.location = 'view_company_report';
			</script>";
		}
		else
		{
			echo "<script language='javascript' type='text/javascript'>
			//alert('Not Inserted');
			window.location = 'view_company_report';
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
               
				<li><a href="#">Logo</a></li>
            </ul>
        </div><!--breadcrumbs-->
        

         <form class="stdform stdform2" enctype="multipart/form-data" method="post">
        <div class="maincontent">
        	<div class="contentinner content-bootstrap">
			
 
          
			<div class="row-fluid">
			 <span class="span12 no_margin_padding">
			   <h4 class="widgettitle ctitle" width="100%">Logo
			    <a  style="color:#fff;float:right" href="view_company_report" >View Logo</a>
			   </h4>
				  <div class="widgetcontent">
                        <div class="bordered shadowed nopadding">
                   
			<table class="table table-bordered mailview_employee">
                    <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Company Name<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
									<input type="text" required name="txt_name" id="subject" class="input-xlarge span12" placeholder="Enter Company  Name" style="height:38px;width:387px;"  <?php if(isset($_GET['logo_id'])){?> value="<?php echo $data_company[0]['company_name'] ; ?>" <?php } ?>  />
								</span>
								</th>
								
                          </tr>
				    </thead>
                   
				  <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Company Logo<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
									<input type="file"  name="txt_attachment" id="subject"   />
                                    <?php
                                           if(isset($_GET['logo_id']))
                                           {
                                   ?>
                                    <input type="hidden"  name="hidden_image" id="subject" class="input-xlarge span12" value="<?php echo $data_company[0]['image'] ; ?>" />
                                    <img src="../img/logo/<?php echo $data_company[0]['image'] ; ?>" style="height:84px;width:190px;">
                                   <?php        	
                                           }
                                    ?>

								</span>
								</th>
								
                          </tr>
				    </thead>



				  <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Company Address<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <textarea  name="txt_address" id="subject" class="input-xlarge span12" placeholder="Enter Address"  style="height:96px;width:390px;"   /><?php if(isset($_GET['logo_id'])){ echo $data_company[0]['company_address'] ;   } ?></textarea>								</span>
								</th>
								
                          </tr>
				    </thead>
                    
                     <thead>
                        <tr>
                            <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Phone<span style="color:red">*</span>&nbsp;:</th>
							<th class="head1 attachement" style="width:35%">
							 <span class="formwrapper">
                                     <input type="text"  name="txt_phone"  class="input-xlarge span12" placeholder="Enter Phone No."  style="height:38px;width:390px;" <?php if(isset($_GET['logo_id'])){?> value="<?php echo $data_company[0]['phone'] ; ?>" <?php } ?> /></span>
							</th>
							
                       </tr>
				    </thead>
                      <thead>
                        <tr>
                            <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Comapny<span style="color:red">*</span>&nbsp;:</th>
							<th class="head1 attachement" style="width:35%">
							 <span class="formwrapper">
                                     <input type="number"  name="company"  class="input-xlarge span12"   style="height:30px;width:150px;" <?php if(isset($_GET['logo_id'])){?> value="<?php echo $data_company[0]['company'] ; ?>" <?php } ?> /></span>
							</th>
							
                       </tr>
				    </thead>
                   <thead>
                        <tr>
                            <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Comapny Icon <span style="color:red">*</span>&nbsp;:</th>
							<th class="head1 attachement" style="width:35%">
							 <span class="formwrapper">
                                     <input type="text"  name="company_icon"  class="input-xlarge span12"   style="height:30px;width:150px;" <?php if(isset($_GET['logo_id'])){?> value="<?php echo $data_company[0]['company_icon'] ; ?>" <?php } ?> /></span>
							</th>
							
                       </tr>
				    </thead>
				    <thead>
                        <tr>
                            <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Awards<span style="color:red">*</span>&nbsp;:</th>
							<th class="head1 attachement" style="width:35%">
							 <span class="formwrapper">
                                     <input type="number"  name="awards"  class="input-xlarge span12"   style="height:30px;width:150px;" <?php if(isset($_GET['logo_id'])){?> value="<?php echo $data_company[0]['awards'] ; ?>" <?php } ?> /></span>
							</th>
							
                       </tr>
				    </thead>
                   <thead>
                        <tr>
                            <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Awards Icon <span style="color:red">*</span>&nbsp;:</th>
							<th class="head1 attachement" style="width:35%">
							 <span class="formwrapper">
                                     <input type="text"  name="awards_icon"  class="input-xlarge span12"   style="height:30px;width:150px;" <?php if(isset($_GET['logo_id'])){?> value="<?php echo $data_company[0]['awards_icon'] ; ?>" <?php } ?> /></span>
							</th>
							
                       </tr>
				    </thead>
				     <thead>
                        <tr>
                            <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Clients<span style="color:red">*</span>&nbsp;:</th>
							<th class="head1 attachement" style="width:35%">
							 <span class="formwrapper">
                                     <input type="number"  name="clients"  class="input-xlarge span12"   style="height:30px;width:150px;" <?php if(isset($_GET['logo_id'])){?> value="<?php echo $data_company[0]['clients'] ; ?>" <?php } ?> /></span>
							</th>
							
                       </tr>
				    </thead>
                   <thead>
                        <tr>
                            <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Clients Icon <span style="color:red">*</span>&nbsp;:</th>
							<th class="head1 attachement" style="width:35%">
							 <span class="formwrapper">
                                     <input type="text"  name="clients_icon"  class="input-xlarge span12"   style="height:30px;width:150px;" <?php if(isset($_GET['logo_id'])){?> value="<?php echo $data_company[0]['clients_icon'] ; ?>" <?php } ?> /></span>
							</th>
							
                       </tr>
				    </thead>
				     <thead>
                        <tr>
                            <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Rating<span style="color:red">*</span>&nbsp;:</th>
							<th class="head1 attachement" style="width:35%">
							 <span class="formwrapper">
                                     <input type="number"  name="rating"  class="input-xlarge span12"   style="height:30px;width:150px;" <?php if(isset($_GET['logo_id'])){?> value="<?php echo $data_company[0]['rating'] ; ?>" <?php } ?> /></span>
							</th>
							
                       </tr>
				    </thead>
                   <thead>
                        <tr>
                            <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Rating Icon <span style="color:red">*</span>&nbsp;:</th>
							<th class="head1 attachement" style="width:35%">
							 <span class="formwrapper">
                                     <input type="text"  name="rating_icon"  class="input-xlarge span12"   style="height:30px;width:150px;" <?php if(isset($_GET['logo_id'])){?> value="<?php echo $data_company[0]['rating_icon'] ; ?>" <?php } ?> /></span>
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
  
 


	
