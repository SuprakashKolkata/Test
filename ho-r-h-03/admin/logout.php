<?php 
session_start();
session_destroy();
setcookie('admin_id','', time()-(60*60*24*1),"/");   
echo "<script>
alert('Log Out');
window.location = 'index';</script>";
?>
