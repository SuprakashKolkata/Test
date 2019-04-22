	<?php
	include ('header.php');
	$data_employee=$obj_user->basic_fetch_by_id('td_admin','admin_id',$_SESSION['admin_id']);

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
					if($_FILES['txt_image']['name']!="")
					{
							$file_type= $_FILES['txt_image']['type']; 
							 if($file_type=="image/png" || $file_type=="image/jpg" || $file_type=="image/jpeg" || $file_type=="image/gif" )
							{
								$code=rand();
								$image= $code.md5( $code).$_FILES['txt_image']['name']; 

								if(move_uploaded_file($_FILES['txt_image']['tmp_name'],'../img/emp_profile/'.$image))
								{
								   unlink('../img/emp_profile/'.$_POST ['hidden_image']);
								   $fileImage=$image;
								}
						     }

							else
							{
                                   echo "<script language='javascript' type='text/javascript'>
									alert('Image Type is not acceptable. Please! Upload jpg,jpeg,png or gif type file...!');
									window.location = 'edit_employee?admin_id=$get_admin_id&key=$key';
									</script>";
									exit;
							}
			       }  
			  
			       else
				   {
					  $fileImage= stripslashes ( $_POST ['hidden_image'] ) ; 
				   }
        
        $first_name = stripslashes ( $_POST ['txt_first_name'] ) ;
        $middle_name = stripslashes ( $_POST ['txt_middle_name'] ) ;
        $last_name = stripslashes ( $_POST ['txt_last_name'] ) ;
        $address=stripslashes ( $_POST ['txt_address'] ) ;
		$phone= stripslashes ( $_POST ['txt_mobile'] ) ;
		$email_id = stripslashes ( $_POST ['txt_email'] ) ;
		$password = stripslashes ( $_POST ['txt_password'] ) ;
		//$confirm_password= stripslashes ( $_POST ['txt_con_password'] ) ;
		$active_status=1;
	    $data_email=$obj_user->basic_fetch_two_edit_id("td_admin","email_id",$email_id,"admin_id",$_SESSION['admin_id']);
        $icount=count($data_email);

       if($icount>0)
        {
            
			echo "<script language='javascript' type='text/javascript'>
			alert('Email id Already  Exist');
			window.location = 'dashboard';
			</script>";
			exit;
        }
         
         $data=array
			(
           'image' =>$fileImage,
           'first_name' => $first_name,
           'middle_name' => $middle_name,
           'last_name' => $last_name,
           'email_id' => $email_id,
		   'address'=>$address,
		   'phone'=>$phone,
           'password'=>$password,
		   'updated_id' =>$_SESSION['admin_id'],
           'updated_id' =>$cur_date
            );
          $result=$obj_user->update_by_id("td_admin",$data,"admin_id",$_SESSION['admin_id']);
          //print_r($result); exit;
         
         if($result)
         {
             
              
				echo "<script language='javascript' type='text/javascript'>
				alert('Successfully Upadted');
				window.location = 'dashboard';
				</script>";
		}			  
        else
        {
				echo "<script language='javascript' type='text/javascript'>
				alert('Not Upadated');
				window.location = 'dashboard';
				</script>";
        }

         
    }
?>

<script src="js/jquery.min.js" type="text/javascript"></script>
 
        <div class="breadcrumbwidget">
        	<ul class="breadcrumb">
                <li><a href="dashboard">Home</a> <span class="divider">/</span></li>
                <li><a href="edit_employee">Edit Profile</a></li>
            </ul>
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>Edit Profile</h1>
        </div><!--pagetitle-->
         <form class="stdform stdform2" enctype="multipart/form-data" method="post" onsubmit="return valid()">
        <div class="maincontent">
        	<div class="contentinner content-bootstrap">
            <?php //include("header_menu.php");?>
			<div class="row-fluid">
			 <span class="span12 no_margin_padding">
			   <h4 class="widgettitle ctitle" width="100%">Edit Profile
			   <!--  <a  style="color:#fff;float:right" href="view_employee" >View Profile</a></h4> -->
				  <div class="widgetcontent">
                        <div class="bordered shadowed nopadding">
                   
				   <table>   
					 <tr>
							 <td align="center" >
								 <p>
									<label>First Name <span style="color:red">*</span>: </label>
									<span class="field"><input type="text" required name="txt_first_name" id="subject" class="input-xlarge span12" placeholder="Enter First Name"  style="width:200px;"  value="<?php echo $data_employee[0]['first_name']; ?>" /></span>
							    </p>
						    
							</td>
						
						  <td>
								 <p>
									<label> Middle Name : </label>
									<span class="field"><input type="text" name="txt_middle_name" id="subject" class="input-xlarge span12" placeholder="Enter Middle Name"  style="width:200px;" value="<?php echo $data_employee[0]['middle_name']; ?>" /></span>
							    </p>
						  </td>
						
						   <td>
								 <p>
									<label> Last Name <span style="color:red">*</span> : </label>
									<span class="field"><input type="text" name="txt_last_name" required id="subject" class="input-xlarge span12" placeholder="Enter Last Name" style="width:200px;" value="<?php echo $data_employee[0]['last_name']; ?>" /></span>
							    </p>
						  </td>
						
					</tr>
					</table>
                        
							   <p>
								<label>Image : </label>
								  <input type="file" name="txt_image" id="txt_image"   />
								  <input type="hidden" name="hidden_image" id="hidden_image"   value="<?php echo $data_employee[0]['image']; ?>" />

								</p>
						    
							
							<?php if($data_employee[0]['image']!=''){  ?>
							<img id="blah" src="../img/emp_profile/<?php echo $data_employee[0]['image']; ?>"   style="height:100px;width:100px;"/>
							<?php } ?>
						<p>
                            <label>Address<span style="color:red">*</span>  : </label>
                            <span class="field"><textarea  required name="txt_address" id="message" class="span12"><?php echo $data_employee[0]['address']; ?></textarea></span>
                        </p>
                       
                         <table>   
				  <tr>
								 <td align="center" >
									 <p>
										<label>Mobile No.<span style="color:red">*</span> : </label>
										<span class="field"><input type="text" name="txt_mobile" required id="subject" class="input-xlarge span12" placeholder="Enter Mobile No."  style="width:200px;" pattern="[0-9]{10}" title="Please Enter 10 digit Mobile No." value="<?php echo $data_employee[0]['phone']; ?>" /></span>
									</p>
								 </td>
							
							

							 <td>
									 <p>
										<label> Email Id<span style="color:red">*</span>: </label>
										<span class="field"><input type="email" required name="txt_email" id="subject" class="input-xlarge span12" placeholder="Enter Email Id"  style="width:300px;" value="<?php echo $data_employee[0]['email_id']; ?>" /></span>
									</p>
							  </td>
					</tr>		
							   
							
						
			<tr>		
					   
				<td>	   
					   
					   <p>
                        	<label>Password <span style="color:red">*</span>:</label>
                            <span class="field"><input type="text" required name="txt_password" id="txt_password" class="input-xlarge span12" placeholder="Password" value="<?php echo $data_employee[0]['password']; ?>"  /></span>
                      </p>
			   </td>	   
			</tr>
			           
			</table>			   
					   
			<!--<p>
		<label>Active Status:</label><span class="field"><input type="checkbox" checked name="txt_status" id="subject" value="1" /></span>
		
            </p>	-->	   
					   
					   </div>
                    </div>
                </span>
               
                   
                </div><!--row-fluid-->
                
          <!--contentinner-->

             <p class="stdformbutton">
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Update</button>
                <button type="reset" class="btn">Reset</button>
            </p>
           </form>
        </div>
		
		</div><!--maincontent--> 
        
<script>
function readURL(input) {
	  
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					
					
					
					$('#blah')
						.attr('src', e.target.result)
						.width(100)
						.height(100);
				};

				reader.readAsDataURL(input.files[0]);
			}
		}
</script>
   <?php
include ('footer.php');?>