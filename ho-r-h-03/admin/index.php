	<?php
	    session_start();
		include('class/user_class.php');
		$obj_user= new user();
		
	
	if(isset($_POST['submit']))
	{
		 $username=stripslashes(trim($_POST['email_id']));
		 if($username=='')
		 {
                $mode='No_User_Name';
				echo "<script language='javascript' type='text/javascript'>
				window.location.href ='index?mode=$mode';
				</script>";
				    exit;
		 }
		 
		 $password=stripslashes(trim($_POST['password'])); 
		 if($password=='')
		 {
                $mode='No_Password';
				echo "<script language='javascript' type='text/javascript'>
				window.location.href ='index?mode=$mode';
				</script>";
				    exit;
		 }

		 $data_emp_details=$obj_user->basic_fetch_by_id("td_admin","email_id",$username);
         
		if(count($data_emp_details)==1) 
		{
			  if($data_emp_details[0]['active_status']!=1)
			    {
			    	    $mode='Inactive';
				     	echo "<script language='javascript' type='text/javascript'>
				               window.location.href ='index?mode=$mode';
				               </script>";
				    exit;
				}
				else
				{
					
                    if($data_emp_details[0]['password']==$password)
                    {
	                    
	                    $_SESSION['admin_id']=$data_emp_details[0]['admin_id'];
	                    $admin_id=$_SESSION['admin_id'];
	                    setcookie('admin_id',$admin_id, time()+(60*60*24*1),"/");   
						
                        echo "<script language='javascript' type='text/javascript'>
						window.location = 'dashboard';</script>";
					 }
				     else
				     {
				     	$mode='Wrong Password';
						echo "<script language='javascript' type='text/javascript'>
						window.location.href ='index?mode=$mode';
						</script>";
				     }
                 }
		}
		else
		{
			$mode='Wrong User Name';
			echo "<script language='javascript' type='text/javascript'>
			window.location = 'index?mode=$mode';</script>";
		}
	}
	
	if ($_SESSION['admin_id']!='' && $_SESSION ['logged_in']=='yes' )
	{
		 echo "<script language='javascript' type='text/javascript'>
		 window.location = 'dashboard';</script>";
	}
	elseif(isset($_COOKIE['admin_id']))
	{
           
            $_SESSION['admin_id']=$_COOKIE['admin_id'];
            $_SESSION ['logged_in']='yes';

			echo "<script language='javascript' type='text/javascript'>
			window.location = 'dashboard';</script>"; 
	}
	else
	{
    ?>
	<!DOCTYPE html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Hotel-1</title>
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
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
	</head>
       <body>
<div class="loginwrapper">
		<div class="loginwrap zindex100 animate2 bounceInDown">
			        <?php
			        if(isset($_GET['mode']) && $_GET['mode']=='Wrong Password')
			        {
			        ?>
			        <div class="alert alert-info">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Sorry!</strong>&nbsp;&nbsp;&nbsp;&nbsp;Wrong Password
					</div>
		           <?php
		           }
		          
			       if(isset($_GET['mode']) && $_GET['mode']=='Wrong User Name')
			        {
			        ?>
			        <div class="alert alert-info">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Sorry!</strong>&nbsp;&nbsp;&nbsp;&nbsp;Wrong User Name
					</div>
		           <?php
		           }
		           
                   if(isset($_GET['mode']) && $_GET['mode']=='Inactive')
			        {
			        ?>
			        <div class="alert alert-info">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Sorry!</strong>&nbsp;&nbsp;&nbsp;&nbsp;Your Id is temporarily Set Inactive.
					</div>
		           <?php
		           }
                   if(isset($_GET['mode']) && $_GET['mode']=='No_User_Name')
			        {
		           ?>
					<div class="alert alert-info">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Sorry!</strong>&nbsp;&nbsp;&nbsp;&nbsp;Please Enter Your User Name.
					</div>
					<?php
				    }
				    if(isset($_GET['mode']) && $_GET['mode']=='No_Password')
			        {
				    ?>
                     <div class="alert alert-info">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Sorry!</strong>&nbsp;&nbsp;&nbsp;&nbsp;Please Enter Your Password.
					</div>
					<?php
					 }
					 if(isset($_GET['mode']) && $_GET['mode']=='User_Name_Invalid')
			         {
					?>
					<div class="alert alert-info">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Sorry!</strong>&nbsp;&nbsp;&nbsp;&nbsp; Invalid User Name.
					</div>
					<?php
					}
					?>

		<h1 class="logintitle"><span class="iconfa-lock"></span>Employee- Sign In <span class="subtitle">Hello! Sign in to get you started!</span></h1>
			<div class="loginwrapperinner">
				<form  action="#" id="loginform" method="post" autocomplete="off" enctype="multipart/form-data">
					<p class="animate4 bounceIn"><input type="text" required id="email_id" name="email_id" title="Please Enter Your registered Email Id" placeholder="Enter Your Email..." /></p>
                    <span id="user_name_required" style="color:red;font-size:20px;"></span>
					<p class="animate5 bounceIn"><input type="password" required id="password" name="password" placeholder="Password"     /></p>
					<p class="animate6 bounceIn"><button type="submit" class="btn btn-default btn-block" name="submit" >Submit</button></p>
					<p class="animate7 fadeIn"><a href="#" onclick="forgot_password()"><span class="icon-question-sign icon-white"></span> Forgot Password?</a></p>
				</form>
			</div><!--loginwrapperinner-->
		</div>
		<div class="loginshadow animate3 fadeInUp"></div>
	</div><!--loginwrapper-->

<script>
function forgot_password()
{
	var email_id=document.getElementById('email_id').value;
	if(email_id=='')
	{
        document.getElementById('user_name_required').innerHTML='Please Enter Your User Name and You will get your OTP soon in your specific Email Id.';
		return false;
	}
	else
	{
		window.location.href='get_otp.php?user_name='+email_id;
	}
}
</script>
<?php 
  // }
  }
?>