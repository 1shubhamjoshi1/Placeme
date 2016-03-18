<?php

	$username=$_POST['username'];
	$password=$_POST['password'];
	$name=$_POST['name'];
	$lastname=$_POST['lastname'];
	$batch=$_POST['batch'];



	$user ='root';
	$pass = '';
	$db = 'practice quiz';
	$conn = mysql_connect('localhost',$user,$pass);
	mysql_select_db($db);
	$query="INSERT INTO signinfo(username,password,name,lastname,batch) VALUES('$username','$password','$name','$lastname','$batch')";
					$result = mysql_query($query);
if (false == $result) {
    			echo mysql_error();
		}
			echo 1;


?>