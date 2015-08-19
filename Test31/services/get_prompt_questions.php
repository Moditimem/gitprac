<?php
include 'config2.php';

$id=$_GET['cat_id'];

$sql = "SELECT `ID`, `Text`, `Type`, `Options` FROM Prompt_Questions WHERE  fk_Actions_OptionsID=$id";

try 
{
	$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $dbh->query($sql);  
	$questions = $stmt->fetchAll(PDO::FETCH_OBJ);
	$dbh = null;
	echo '{"items":'. json_encode($questions) .'}'; 
} catch(PDOException $e) {
	echo '{"error":{"text":'. $e->getMessage() .'}}'; 
}


?>
