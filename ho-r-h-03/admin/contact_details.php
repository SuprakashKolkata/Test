
<?php
include ('header.php');
$current_date=date('d-m-Y');
if(isset($_GET['contact_id']))
{
  $contact_id=$_REQUEST['contact_id']; 
  $data_facillities=$obj_user->basic_fetch_by_two_id("td_contact",'deleted_id','0','contact_id',$contact_id);
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
	    
		$email_id =stripslashes ( $_POST ['email'] ) ;
	    $phone=addslashes ( $_POST ['phone'] ) ;
	    $address=addslashes ( trim($_POST ['address']) ) ;
	    $iframe=addslashes ( $_POST ['iframe'] ) ;
        $facebook =stripslashes ( $_POST ['facebook'] ) ;
	    $twitter=addslashes ( $_POST ['twitter'] ) ;
	    $linked_in=addslashes ( $_POST ['linked_in'] ) ;
	    $pinterest=addslashes ( $_POST ['pinterest'] ) ;
	    $google=addslashes ( $_POST ['google'] ) ;

	    $day_from=addslashes ( $_POST ['day_from'] ) ;
	    $day_to=addslashes ( $_POST ['day_to'] ) ;
	    $time_from=addslashes ( $_POST ['time_from'] ) ;
	    $time_to=addslashes ( $_POST ['time_to'] ) ;

	    $data=array
		(
		   'email_id'=>$email_id,
		   'phone'=>$phone,
		   'address'=>$address,
		   'iframe'=>$iframe,
		   'facebook'=>$facebook,
		   'twitter'=>$twitter,
		   'linked_in'=>$linked_in,
		   'pinterest'=>$pinterest,
		   'google'=>$google,
		   'day_from'=>$day_from,
		   'day_to'=>$day_to,
		   'time_from'=>$time_from,
		   'time_to'=>$time_to,

		);
		
		if(isset($_GET['contact_id']))
		{
            $result=$obj_user->update_by_id("td_contact",$data,"contact_id",$contact_id);
		}
		else
		{
		  $result=$obj_user->basic_insert("td_contact",$data);
		  //print_r($result); exit;
		}
		
		if($result)
		{
			echo "<script language='javascript' type='text/javascript'>
			//alert('Successfully Inserted');
			window.location = 'view_contact_details';
			</script>";
		}
		else
		{
			echo "<script language='javascript' type='text/javascript'>
			//alert('Not Inserted');
			window.location = 'view_contact_details';
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
               
				<li><a href="#">Contact Details</a></li>
            </ul>
        </div><!--breadcrumbs-->
        

         <form class="stdform stdform2" enctype="multipart/form-data" method="post">
        <div class="maincontent">
        	<div class="contentinner content-bootstrap">
			
 
          
			<div class="row-fluid">
			 <span class="span12 no_margin_padding">
			   <h4 class="widgettitle ctitle" width="100%">Contact Details
			    <a  style="color:#fff;float:right" href="view_contact_details" >View Contact Details</a>
			   </h4>
				  <div class="widgetcontent">
                        <div class="bordered shadowed nopadding">
                   
			<table class="table table-bordered mailview_employee">
                    <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Phone<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
									<input type="text"  name="phone" id="subject" class="input-xlarge span12" placeholder="Enter Phone No." required style="height:38px;width:387px;"  <?php if(isset($_GET['contact_id'])){?> value="<?php echo $data_facillities[0]['phone'] ; ?>" <?php } ?>  />
								</span>
								</th>
								
                          </tr>
				    </thead>
                   
				 <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Address<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <textarea  required name="address" id="subject" class="input-xlarge span12" placeholder="Enter Address"  style="height:96px;width:390px;"   /><?php if(isset($_GET['contact_id'])){ echo $data_facillities[0]['address'] ;   } ?>
                                         </textarea>								
                                 </span>
								</th>
								
                          </tr>
				    </thead>
				     <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Email Id<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <input type="email"  name="email" id="subject" class="input-xlarge span12" placeholder="Enter Email Id" required style="height:38px;width:387px;"  <?php if(isset($_GET['contact_id'])){?> value="<?php echo $data_facillities[0]['email_id'] ; ?>" <?php } ?>  />								</span>
								</th>
								
                          </tr>
				    </thead>
				     <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Iframe<span style="color:red">*</span>&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <input type="text"  name="iframe" id="subject" class="input-xlarge span12" placeholder="Enter Iframe" required style="height:38px;width:387px;"  <?php if(isset($_GET['contact_id'])){?> value="<?php echo $data_facillities[0]['iframe'] ; ?>" <?php } ?>  />								
                                  </span>
								</th>
								
                          </tr>
				    </thead>
				    <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Facebook&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <input type="text"  name="facebook" id="subject" class="input-xlarge span12" placeholder="Enter Facebook Link"  style="height:38px;width:387px;"  <?php if(isset($_GET['contact_id'])){?> value="<?php echo $data_facillities[0]['facebook'] ; ?>" <?php } ?>  />								
                                  </span>
								</th>
								
                          </tr>
				    </thead>
				     <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Twitter&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <input type="text"  name="twitter" id="subject" class="input-xlarge span12" placeholder="Enter Twitter Link"  style="height:38px;width:387px;"  <?php if(isset($_GET['contact_id'])){?> value="<?php echo $data_facillities[0]['twitter'] ; ?>" <?php } ?>  />								
                                  </span>
								</th>
								
                          </tr>
				    </thead>
				 <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Pinterest&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <input type="text"  name="pinterest" id="subject" class="input-xlarge span12" placeholder="Enter Pinterest Link"  style="height:38px;width:387px;"  <?php if(isset($_GET['contact_id'])){?> value="<?php echo $data_facillities[0]['pinterest'] ; ?>" <?php } ?>  />								
                                  </span>
								</th>
								
                          </tr>
				    </thead>
				     <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Linked In&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <input type="text"  name="pinterest" id="subject" class="input-xlarge span12" placeholder="Enter Pinterest Link"  style="height:38px;width:387px;"  <?php if(isset($_GET['contact_id'])){?> value="<?php echo $data_facillities[0]['linked_in'] ; ?>" <?php } ?>  />								
                                  </span>
								</th>
								
                          </tr>
				    </thead>
				   
				   <thead>
                            <tr>
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">Google+&nbsp;:</th>
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <input type="text"  name="google" id="subject" class="input-xlarge span12" placeholder="Enter Google+ Link"  style="height:38px;width:387px;"  <?php if(isset($_GET['contact_id'])){?> value="<?php echo $data_facillities[0]['google_plus'] ; ?>" <?php } ?>  />								
                                  </span>
								</th>
								
                          </tr>
				    </thead>
				     <thead>
                            <tr><th colspan="2" style=" text-align: center;font-size:26px;">Working Hours</th></tr>
                                 
                            <tr>
                                
                                <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">From&nbsp;:</th>
                                 
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <select  name="day_from" id="subject" class="input-xlarge span12"  style="height:38px;width:150px;">
                                                 <option value="">Select</option>
                                                 <option value="Monday" <?php if(isset($_GET['contact_id']) && $data_facillities[0]['day_from']=='Monday' ){?> selected <?php } ?>>Monday</option>
                                                 <option value="Tuesday" <?php if(isset($_GET['contact_id']) && $data_facillities[0]['day_from']=='Tuesday' ){?> selected <?php } ?>>Tuesday</option>
                                                 <option value="Wednesday" <?php if(isset($_GET['contact_id']) && $data_facillities[0]['day_from']=='Wednesday' ){?> selected <?php } ?>>Wednesday</option>
                                                 <option value="Thursday" <?php if(isset($_GET['contact_id']) && $data_facillities[0]['day_from']=='Thursday' ){?> selected <?php } ?>>Thursday</option>
                                                 <option value="Friday" <?php if(isset($_GET['contact_id']) && $data_facillities[0]['day_from']=='Friday' ){?> selected <?php } ?>>Friday</option>
                                                 <option value="Saturday" <?php if(isset($_GET['contact_id']) && $data_facillities[0]['day_from']=='Saturday' ){?> selected <?php } ?>>Saturday</option>
                                                 <option value="Sunday"  <?php if(isset($_GET['contact_id']) && $data_facillities[0]['day_from']=='Sunday' ){?> selected <?php } ?>>Sunday</option>
                                         </select>								
                                  </span>
								
								 <span class="formwrapper">
								 <input type="text"  name="time_from" id="subject" class="input-xlarge span12"  style="height:38px;width:150px;" placeholder="Enter Start Time" <?php if(isset($_GET['contact_id'])){?> value="<?php echo $data_facillities[0]['time_from'] ; ?>" <?php } ?>  />							
                                  </span>
								</th>
								
                            </tr>
                            <tr>
                                     <th class="head1 " style="width:15%;vertical-align:middle;text-align:right">To&nbsp;:</th>
                                 
								<th class="head1 attachement" style="width:35%">
								 <span class="formwrapper">
                                         <select  name="day_to" id="subject" class="input-xlarge span12"  style="height:38px;width:150px;">
                                                 <option value="">Select</option>
                                                 <option value="Monday" <?php if(isset($_GET['contact_id']) && $data_facillities[0]['day_to']=='Monday' ){?> selected <?php } ?>>Monday</option>
                                                 <option value="Tuesday" <?php if(isset($_GET['contact_id']) && $data_facillities[0]['day_to']=='Tuesday' ){?> selected <?php } ?>>Tuesday</option>
                                                 <option value="Wednesday" <?php if(isset($_GET['contact_id']) && $data_facillities[0]['day_to']=='Wednesday' ){?> selected <?php } ?>>Wednesday</option>
                                                 <option value="Thursday" <?php if(isset($_GET['contact_id']) && $data_facillities[0]['day_to']=='Thursday' ){?> selected <?php } ?>>Thursday</option>
                                                 <option value="Friday" <?php if(isset($_GET['contact_id']) && $data_facillities[0]['day_to']=='Friday' ){?> selected <?php } ?>>Friday</option>
                                                 <option value="Saturday" <?php if(isset($_GET['contact_id']) && $data_facillities[0]['day_to']=='Saturday' ){?> selected <?php } ?>>Saturday</option>
                                                 <option value="Sunday"  <?php if(isset($_GET['contact_id']) && $data_facillities[0]['day_to']=='Sunday' ){?> selected <?php } ?>>Sunday</option>
                                         </select>								
                                  </span>
								
								 <span class="formwrapper">
								 <input type="text"  name="time_to" id="subject" class="input-xlarge span12"  style="height:38px;width:150px;" placeholder="Enter End Time" <?php if(isset($_GET['contact_id'])){?> value="<?php echo $data_facillities[0]['time_to'] ; ?>" <?php } ?>  />							
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
  
 


	
