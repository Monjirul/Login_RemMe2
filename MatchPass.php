<?php
$n=$_GET['un'];
$p = $_GET['pass'];
$RemMe=$_GET['RemMe'];
setcookie("pass",$p,  time() + (86400 * 30), "/");
setcookie("id",$n, time() + (86400 * 30), "/");
setcookie("RemMe",$RemMe, time() + (86400 * 30), "/");
//echo $_COOKIE["id"];
?>


<?php
//session_start();
$user=array("A","B","C","D","E","pili");
$pass=array("111","222","333","444","555","123");
$flag=0;




for($i=0;$i<5;$i++)
{
	if($user[$i]==$n)
	{		
	if($pass[$i]==$p)
	{
		$flag=1;
	
		break;
	}		
	}
}
if($flag==0)
{	
  $stat = "PDM";
setcookie("stat",$stat,  time() + (86400 * 30), "/");
header("Location: index.php");

}
else
{  

 $stat = "PM";
setcookie("stat",$stat,  time() + (86400 * 30), "/");
	header("Location:login_handeler.php");
}

?>