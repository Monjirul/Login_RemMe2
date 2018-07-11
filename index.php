<?php

$pass="";
$id="";
$stat="";

if(!isset($_COOKIE['pass'])) {
$pass="";
} else {
      $pass=$_COOKIE['pass'];
}

if(!isset($_COOKIE['id'])) {
  $id="";
} else {
      $id=$_COOKIE['id'];
}

if(!isset($_COOKIE['stat'])) {
  $stat="";
} else {
      $stat=$_COOKIE['stat'];
}

if($stat=="LogOut")
{
	
	setcookie("pass", $pass, time() - 360,'/');
	setcookie("id", $id, time() - 360,'/');
}

//echo $stat;
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Login form</title>
	</head>
	
	<body>
	
	<?php 

$x=array();
for($i=0;$i<2;$i++)
{
	//$x[$i]=$_SESSION['IDP'][$i];
	
		 if(isset($_SESSION['IDP'][$i])){
        $x[$i]=$_SESSION['IDP'][$i];
		echo $x[$i]."<br>";
	}
	else
	{

$x[$i]="";
	}
}
	//echo $_COOKIE['$Login_Stat'];
	//$x[$i]=$_SESSION['IDP'][$i];
	
		 if(isset($_SESSION['l_stat'])){
        $l_stat=$_SESSION['l_stat'];
		
	}
	else
	{

$l_stat=100;
	}
//echo $l_stat;

?>


		
		<form  method="get" action="MatchPass.php">
		
			<table>
			  <tr>
				<td colspan="2" align="center"><h2>LogIn</h2></td>
			  </tr>
			  <tr>
				<td>Username/Email :</td><td> <input type="text" name="un" value="<?php echo  $id; ?>"></td>				  
			  </tr>
			  <tr>
				<td>Password :</td><td><input type="password" name="pass" value="<?php echo  $pass; ?>"></td>
			  </tr>
			  
			  <tr><td> <input type="checkbox" name="RemMe" value="RM"> Remember Me<br></td></tr>
			  <tr>
				  <td align="center"><input type="reset" value="Cancel"></td>
				  <td align="center"><input type="submit" value="Submit"></td>
			  </tr>			
              			  
			  
		  </table>
		  
		</form> 
		
		<?php
if ($stat == "PDM"):
    echo "Password/Username Do not Match";
  
	
elseif ($stat == "LogOut"):
       echo "Sucsessfully Logged Out";
else:
 
	
endif;
?>
		
	</body>
</html>