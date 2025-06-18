<?php  
 $logout = $mainfunc->logout();
 if($logout == '1'){
    echo "<script>window.location.reload();</script>";
    header("location:login.php");

 }
 ?>