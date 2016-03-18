

<?php
    require '../php/connection/connection.php';
  

   /* $sql = 'SELECT *
            FROM options
            INNER JOIN question
            ON options.optionId=question.optionId AND question.questionId=1;';
    */
    
//$sql = 'Select * from question';
/*
$sql = 'select *
from
    question a
        inner join
    options b
        on a.optionId = b.optionId
        inner join 
    image c
        on a.imageId = c.imageId';
    
    $retval = mysql_query($sql);
*/
if($retval){

   while($row = mysql_fetch_assoc($retval))
   {
      //echo "<pre class=\"prettyprint\">{$row['Question']}  <br> </pre>";
       if($row['image'])
       echo "<img src=\"../assets/".$row['image']."\">";
   }
}
?>

<!Doctype Html>


<html>

    <head>
            <link rel="stylesheet" href="../css/prettify.css">
    </head>
    
    <body>
      
        <form action="temp.php" method="post">
            <input type="submit" value="NeXT"/>
        </form>
            <script type="text/javascript" src="../js/libs/prettify.js"></script>
           <script type="text/javascript" src="../js/libs/run_prettify.js"></script>
    </body>
</html>