<?php
//include_once '../connection/connection.php';
 $c=$_POST['nameContent'];
 $d=$_POST['a'];
 $k=$_POST['k'];
 $dbhost = 'localhost';
   $dbuser = 'root';
    $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   mysql_select_db('testdb');
$oquery = mysql_query("SELECT flag FROM option1 where optionId='$k'");
    $orow = mysql_fetch_assoc($oquery);
$value=$orow['flag'];
$squery = mysql_query("SELECT flag,value FROM option1 ");
    //$orow = mysql_fetch_assoc($oquery);
  $i=0;
  $attempt_count=0;
$wrong=0;
$success=0;
   while($row = mysql_fetch_assoc($squery))
   {
      //echo "<pre class=\"prettyprint\">{$row['Question']}  <br> </pre>";
       //$question[$i]=$row['quesion'];
       //$oId[$i] =$row['optionId'];
       $answer[$i]=$row['value'];
       $attempts[$i]=$row['flag'];
       if($attempts[$i]!=0)
           $attempt_count++;
       if($attempts[$i]-$answer[$i]!=0)
       {$wrong++;
       }
       else{
       $success++;
       }
         $i++;  
   }



//echo 'value';
//echo $value;
if($value != 0){
     
//echo 'ATTEMPTS:';
//echo $attempt_count;
echo '........   ';
echo 'CORRECT ATTEMPTS:';
echo $success;
echo ' ........   ';
 echo "YOU HAVE BEEN EVALUATED";
    
}
else
{$sql = "UPDATE option1 SET flag='$c' WHERE optionId='$k'";
       
      
   

   $retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not enter data: ' . mysql_error());
   }
   
   //echo "Entered data successfully\n";
   
   mysql_close($conn); 
/*if( $c != $d )
    {
    echo "your answer is incorrect $c ,correct answer is $d";
    
       // echo "your answer is incorrect $c ,correct answer is $d";
    }
    else
    {
         echo "your answer is correct";
    
    }*/
//$query="INSERT INTO option1(flag) VALUE('$c') WHERE optionId=$k";
				 //$result=mysql_query($query);

$e=$c-$d;
//echo $e;
if($e!=0)
{ //echo $result;
  //  echo 'ATTEMPTS:';
//echo $attempt_count;
//echo '........    ';
echo 'CORRECT ATTEMPTS:';
echo $success;
echo '........    ';
echo "YOUR ANSWER IS INCORRECT,CORRECT ANSWER IS $d";
    
}
else
    {
    $success++;
    //echo 'ATTEMPTS:';
//echo $attempt_count;
echo '    ';
echo 'CORRECT ATTEMPTS:';
echo $success;
echo '    ';
echo "YOUR ANSWER IS CORRECT";
	//$query="INSERT INTO mcq1(flag) VALUES('1')";
				// mysql_query($query);
}
   
}
?>