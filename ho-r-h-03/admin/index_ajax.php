<?php
   if(isset($_POST['mode']))
   {
   	  $mode=$_POST['mode'];
   	   if($mode=='Submit_Enquiry')
   	   {
   	   	    $name=$_POST['name']; $phone=$_POST['phone']; 
   	   	    $email=$_POST['email']; $subject=$_POST['subject']; 
   	   	    echo $name=$_POST['message']; 
   	   }    
   }
?>