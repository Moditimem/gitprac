<?php
include 'config.php';
$data=$_GET['xkils'];
$nuData=explode(';',$data);

$username = "sddsd";
$action_option = 16;
$question_id = 123;
$answer = "hols";
$transaction_id = 1234;
$req_date = date("Y-m-d");

/*
$username = $nuData[0];
$action_option = $nuData[1];
$question_id = $nuData[2];
$answer = $nuData[3];
$transaction_id = $nuData[4];
$req_date = date("Y-m-d");
*/

//Insert Request	
mysql_query("INSERT INTO requests (username, action_option, question_id, answer, transaction_id, req_date)
VALUES ('$username', '$action_option', '$question_id', '$answer', '$transaction_id', '$req_date')");

$reply = "all good";
echo '{"items":'. json_encode($reply) .'}'; 


?>