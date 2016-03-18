<?php
include_once 'take-question.php';
$a =  $_POST['key'];
$a=$a-1;

    


     $oquery = mysql_query("SELECT *FROM option1 where optionId=$oId[$a]");
    $orow = mysql_fetch_assoc($oquery);
$value=$orow['value'];
   /*
    echo "<button id='button'>".$orow['OA']."</button>";
    echo "<button id='button'>".$orow['OB']."</button>";
    echo "<button id='button'>".$orow['OA']."</button>";
    echo "<button id='button'>".$orow['OD']."</button>";
     */
         if($image[$a]!=NULL){
            echo "<div id='smallContent'></div>";
         }else{
                echo " <div class=\"sjfade\">".$question[$a]."</div>";
         }

?>

