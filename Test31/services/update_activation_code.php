<?php

include 'config.php';

$act_code = $_POST[basevalue];
$Date_Redeemed = date("Y-m-d H:i:s");


mysql_query("UPDATE codes_ws SET Date_Redeemed = '$Date_Redeemed'
WHERE ActivationCode = '$act_code'");

?>
