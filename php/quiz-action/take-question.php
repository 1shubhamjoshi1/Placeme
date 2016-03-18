<?php
    include_once '../connection/connection.php';
    
    
    $query = mysql_query(' SELECT * FROM mcq1 LIMIT 25');
      $i=0;
   while($row = mysql_fetch_assoc($query))
   {
      //echo "<pre class=\"prettyprint\">{$row['Question']}  <br> </pre>";
       $question[$i]=$row['quesion'];
       $oId[$i] =$row['optionId'];
       $image[$i]=$row['image'];
         $i++;  
   }

 
   // echo $orow['OA'];
?>