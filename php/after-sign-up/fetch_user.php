<?php

    
    if(!empty($_GET['q']))
    {
      echo "<h2 id='uhead'>Users</h2>";       
      $conn = mysqli_connect('localhost','root','','practice quiz');
      $q=$_GET['q'];
      $query="select *from signinfo where username like '%$q%'";
      $result = mysqli_query($conn,$query);
      $kcount=0;
      while($output=mysqli_fetch_assoc($result))
      {
         $kcount = $kcount+1;
        if($kcount<7)
       echo '<div id="box2" class="slideDownsjWork "><a>'.$output['username'].'</a></div>';
            
      }
      if($kcount>7){
      $kcount= $kcount-7;
         echo "$kcount more results";
      }
    }
 ?>