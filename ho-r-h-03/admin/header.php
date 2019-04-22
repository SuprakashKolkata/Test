<?php
  $timezone = new DateTimeZone("Asia/Kolkata" );
  $dt = new DateTime();
  $dt->setTimezone($timezone );
  $dt->format( 'H:i:s A  /  D, M jS, Y' );
  $cv_date = $dt->format('Y-m-d');
  $cv_time = $dt->format('h:i:s A');
  $cur_date=$cv_date." ".$cv_time;
  
  include('class/user_class.php');
  
  $obj_user=new user();
  $page=end(explode("/",$_SERVER['PHP_SELF']));
	
	if(empty($_SESSION['admin_id']))
	{
                 echo "<script language='javascript' type='text/javascript'>
					window.location = 'index';</script>";
			     exit;
	}
	$admin_details=$obj_user->basic_fetch_by_id('td_admin','active_status','1','admin_id',$_SESSION['admin_id']);
    $admin_name=$admin_details[0]['first_name'].' '.$admin_details[0]['middle_name'].' '.$admin_details[0]['last_name'];
    $data_company_report=$obj_user->basic_fetch_by_id('td_logo','deleted_id','0');
?>
	<!DOCTYPE html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Hotel 2</title>
	
	    <link rel="stylesheet" href="css/style.default.css" type="text/css" />
		<link rel="stylesheet" href="prettify/prettify.css" type="text/css" />
		<link rel="stylesheet" href="css/datepicker.css">
	    <link rel="stylesheet" href="css/bootstrap.css">
		<script type="text/javascript" src="prettify/prettify.js"></script>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<!--<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.flot.min.js"></script>-->
		<script type="text/javascript" src="js/jquery.flot.resize.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/modernizr.min.js"></script>
		<script type="text/javascript" src="js/detectizr.min.js"></script>
		<script type="text/javascript" src="js/jquery.cookie.js"></script>
		<!--<script type="text/javascript" src="js/custom.js"></script>-->
		<script type="text/javascript" src="js/bootstrap-fileupload.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
		<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/jquery.tagsinput.min.js"></script>
		<script type="text/javascript" src="js/jquery.autogrow-textarea.js"></script>
		<script type="text/javascript" src="js/charCount.js"></script>
		<script type="text/javascript" src="js/ui.spinner.min.js"></script>
		<script type="text/javascript" src="js/chosen.jquery.min.js"></script>
		<!--<script type="text/javascript" src="js/forms.js"></script>-->
		<script src="js/bootstrap-datepicker.js"></script>
	    <link rel="stylesheet" href="css/style.default.css" type="text/css" />
		<link rel="stylesheet" href="prettify/prettify.css" type="text/css" />
		<script type="text/javascript" src="prettify/prettify.js"></script>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
		<!--<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>-->
		<script type="text/javascript" src="js/jquery.flot.min.js"></script>
		<script type="text/javascript" src="js/jquery.flot.resize.min.js"></script>
		<!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
		<script type="text/javascript" src="js/jquery.cookie.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<script type="text/javascript" src="js/tinymce/jquery.tinymce.js"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
		<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
  

	</head>

	<body>
	

	<div class="mainwrapper">
		<div class="leftpanel">
			
			<div class="logopanel">
				<h1><a href="dashboard"><img src="../img/logo/<?php echo $data_company_report[0]['image'];?>" style="height:45px;width:250px;"></a></h1>
			</div>
			  <div class="datewidget">Today is <?php echo date("l") ?>, <?php echo date("d-M-Y")?></div>
			
			<div class="leftmenu">        
				<ul class="nav nav-tabs nav-stacked">
					<li><a href="dashboard"><span class="icon-align-justify"></span> Dashboard</a></li>
					

					<li class="dropdown"><a href=""><span class="iconsweets-users"></span>Logo</a>
						<ul>
								
                               <li><a href="view_company_report">View Logo</a></li>
						</ul>
					</li> 
				   
				   <li class="dropdown"><a href=""><span class="icon-plus"></span>Slider</a>
						<ul>
								<li class="active" ><a href="index_slider">Add Slider</a></li>
								<li class="active"><a href="view_slider">View Slider</a></li>

						</ul>
				  </li> 
				   <li class="dropdown"><a href=""><span class="icon-plus"></span>Page</a>
						<ul>
								<li class="active" ><a href="page">Add Page </a></li>
								<li class="active"><a href="view_page">View Page Content</a></li>
								<li class="active" ><a href="page_content">Add Page Content</a></li>
								<li class="active"><a href="view_page_content">View Page Content</a></li>

						</ul>
				  </li>
				
                  <li class="dropdown"><a href=""><span class="iconfa-wrench"></span>Event</a>
						<ul>
								<li><a href="event">Add Event</a></li>
								<li class="active"><a href="view_event">View Event</a></li>

						</ul>
				 </li> 
				
                  <li class="dropdown"><a href=""><span class="icon-plus-sign"></span> Menu</a>
						<ul>
								<li><a href="menu">Add Menu</a></li>
								<li><a href="view_menu">View Menu</a></li>
								<!-- <li><a href="menu_details">Add Menu Details</a></li>
								<li><a href="view_menu_details">View Menu Details</a></li> -->

						</ul>
				</li> 

				<li class="dropdown"><a href=""><span class="icon-th-large"></span>Gallery</a>
						<ul>
								<li><a href="gallery">Add Gallery</a></li>
								<li><a href="view_gallery">View Gallery</a></li>

						</ul>
				</li> 
				
				
				 
              <li class="dropdown"><a href=""><span class="icon-plus-sign"></span> Feedback</a>
						<ul>
								<li><a href="feedback">Add Feedback</a></li>
								<li><a href="view_feedback">View Feedback</a></li>

						</ul>
				</li>  
				
                <li class="dropdown"><a href=""><span class="icon-plus-sign"></span> Facilities</a>
						<ul>
								<li><a href="facilities">Add Faiclities</a></li>
								<li><a href="view_facilities">View Faiclities</a></li>
								<li><a href="facilities_details">Add Faiclities Details</a></li>
								<li><a href="view_facilities_details">View Faiclities Details</a></li>

						</ul>
				</li>  
                
                 <li class="dropdown"><a href=""><span class="icon-plus-sign"></span> Contact Details </a>
						<ul>
								
								<li><a href="view_contact_details">View Contact Details</a></li>

						</ul>
				</li>  
                 <li class="dropdown"><a href=""><span class="icon-plus-sign"></span> Enquery </a>
						<ul>
								
								<li><a href="view_enquery">View Enquery</a></li>

						</ul>
				</li>  
                <li class="dropdown"><a href=""><span class="icon-plus-sign"></span> Subscriber </a>
						<ul>
								
								<li><a href="subscriber">View Subscriber</a></li>

						</ul>
				</li>  
                
				

				
				
				</ul>
			</div>
			
		</div>
		<div class="rightpanel">
			<div class="headerpanel">
				<a href="#" class="showmenu"></a>
				
				<div class="headerright">
					<div class="dropdown notification">
						<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
							<span class="iconsweets-globe iconsweets-white"></span>
						</a>
						<ul class="dropdown-menu">
							<!-- <li class="nav-header">Notifications</li>
							
							<?php
							foreach($data_latest_job as $value_job_order)
							{
							?>
							<li><a href="#"><span class="iconfa-barcode"></span> 
							<?php 
							$date=explode(' ',$value_job_order['inserted_date']);
							$date1=date_create($date[0]);
							$date2=date_create(date('Y-m-d'));
							$diff=date_diff($date1,$date2);
							echo $value_job_order['job_order_number'];?> 
							<small class="muted"> - <?php  echo $diff->format("%a days").' '.'ago';?></small></a></li>
							<?php
							}
							?> -->
							<!--<li><a href="#"><span class="icon-envelope"></span> New message from <strong>Daniel</strong> <small class="muted"> - 2 days ago</small></a></li>
							<li><a href="#"><span class="icon-user"></span> <strong>Bruce</strong> is now following you <small class="muted"> - 2 days ago</small></a></li>
							-->
							<li class="viewmore"><a href="view_job_order">View Job Order</a></li>
						</ul>
					</div><!--dropdown-->
					
					<div class="dropdown userinfo">
						<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">Hi,&nbsp;&nbsp;<?php echo $admin_name; ?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="edit_employee"><span class="icon-edit"></span>Profile</a></li>
							<li><a href="logout"><span class="icon-off"></span> Sign Out</a></li>
						</ul>
					</div><!--dropdown-->
				
				</div><!--headerright-->
				
			</div><!--headerpanel-->
		