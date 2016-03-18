<?php
include_once 'take-question.php';
$a =  $_POST['key'];
$a=$a-1;
    

$oquery = mysql_query("SELECT *FROM option1 where optionId=$oId[$a]");
    $orow = mysql_fetch_assoc($oquery);

    if($image[$a]!=NULL){
    echo "<img class='sjfade' id='qimage' src=\"../../assets/".$image[$a]."\" width='750px' height='450px'>";
      //  echo "<div id='qimage'></div>";
       echo " <div class='roundedOne' id='OptionA' value='1' onclick='fun1()'>
	<input type='radio' value='1' id='option1' name='options' />
    <label for='option1'><div id='optionDetailN'>".$orow['OA'].
"</div></label>
</div>".
           " <div class='roundedOne' id='OptionC' onclick='fun2()'>
	<input type='radio' value='3' id='option2' name='options' />
    <label for='option2'><div id='optionDetailN'>".$orow['OB'].
"</div></label>
</div>".
           " <div class='roundedOne' id='OptionB' onclick='fun3()'>
	<input type='radio' value='2' id='option3' name='options' />
    <label for='option3'><div id='optionDetailN'>".$orow['OC'].
"</div></label>
</div>".
           " <div class='roundedOne' id='OptionD' onclick='fun4()'>
	<input type='radio' value='4' id='option4' name='options' />
    <label for='option4'><div id='optionDetailN'>".$orow['OD'].
"</div></label>
</div>";
       
    }
    else{
      echo "<form name='myform' class='fade'>
        <div class='roundedOne' >
	<input type='radio' value='1' id='option1' name='options' onclick='fun1()' />
    <label for='option1'><div id='optionDetail'>".$orow['OA'].
"</div></label>
</div>
      "
     ."
        <div class='roundedOne'  >
	<input type='radio' value='2' id='option2' name='options' onclick='fun2()' />
	<label for='option2'><div id='optionDetail'>".$orow['OB'].
"</div></label>
</div>
      ".
        
        "<div id='sec-box'>
        <div class='roundedOne' id='third-button' >
	<input type='radio' value='3' id='option3' name='options' onclick='fun3()' />
	<label for='option3'><div id='optionDetail'>".$orow['OC'].
"</div></label>
</div>
      ".
        
         "
        <div class='roundedOne' id='fourth-button'  onclick='fun(this)'>
	<input type='radio' value='4' id='option4' name='options' onclick='fun4()'/>
	<label for='option4'><div id='optionDetail'>".$orow['OD'].
"</div></label>
</div></div></form>
      ";
    }

    
   /*
    echo "<button id='button'>".$orow['OA']."</button>";
    echo "<button id='button'>".$orow['OB']."</button>";
    echo "<button id='button'>".$orow['OA']."</button>";
    echo "<button id='button'>".$orow['OD']."</button>";
     */



?>
