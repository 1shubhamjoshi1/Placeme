<?php
    
	$username=$_POST['username'];



  if(!empty($username)){
	$user ='root';
	$pass = '';
	$db = 'practice quiz';
	$conn = mysql_connect('localhost',$user,$pass);
	mysql_select_db($db);
	$query = "SELECT * FROM signinfo WHERE username= '$username'";

	$result = mysql_query($query);
		if (false === $result) {
    			echo mysql_error();
		}

	  if (mysql_num_rows($result)>0){
		 		echo 1;

		}

else {
	echo 0;
}
}
?>