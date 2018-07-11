<?php
   
   if($_COOKIE["RemName"]=="RM")
   {
	     setcookie("pass", $pass, time() - 360,'/');
	setcookie("id", $id, time() - 360,'/');
   }else{
  	setcookie("stat","LogOut",  time() + (86400 * 30), "/");

   }
 header("location:index.php");

?>