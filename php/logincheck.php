<?php
    session_start();
    
	$username=$_POST['username'];
	$password = $_POST['password'];


	$user ='root';
	$pass = '';
	$db = 'practice quiz';
	$conn = mysql_connect('localhost',$user,$pass);
	mysql_select_db($db);
	$query = mysql_query("SELECT * FROM signinfo where username = '$username' AND password = '$password'") or die(mysql_error()); 

	$row = mysql_fetch_array($query) or die(mysql_error());
		
		if(!empty($row['username']) AND !empty($row['password']))
{
          $_SESSION['username']=$username;
		echo 1;
}

else {
		echo 0;
}

?>