<?php

    
    if(!empty($_GET['q']))
    {
      echo "<h2 id='qhead'>Quizes</h2>";
      $conn = mysqli_connect('localhost','root','','testdb');
      $q=$_GET['q'];
      $query="select *from google where quesion like '%$q%'";
      $result = mysqli_query($conn,$query); 
      $count=0;
      while($output=mysqli_fetch_assoc($result))
      {
      $count = $count+1;
        if($count<6)
       echo '<div id="box" class="slideDownsjWork"><a>'.$output['qId'].'</a></div>';
      } 
    }else
    {
      echo "<div id='aa'> Move On to our search . Start Typing!!</div>
      <div id='bb'>PlaceMe Optimised Search Engine 1.1v</div>";
    }
 ?>