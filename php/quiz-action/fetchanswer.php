<?php
include_once 'take-question.php';
$a =  $_POST['key'];
$a=$a-1;
$lquery = mysql_query("SELECT value FROM option1 where optionId=$oId[$a]");
$lrow = mysql_fetch_assoc($lquery);
$value = $lrow['value'];
echo $value;

?>

