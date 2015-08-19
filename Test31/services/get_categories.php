<?php
include 'config2.php';
$id=$_GET['cat_id'];
$fk_ActionsID=1;
$Available=1;
$sql = "SELECT ID, Category FROM Remote_Server_Actions_Category WHERE  (fk_ClubID=$id OR fk_ClubID=0) AND fk_ActionsID=$fk_ActionsID ORDER BY Category ASC";

try 
{
	$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $dbh->query($sql);  
	$categories = $stmt->fetchAll(PDO::FETCH_OBJ);
	$dbh = null;
	echo '{"items":'. json_encode($categories) .'}'; 
} catch(PDOException $e) {
	echo '{"error":{"text":'. $e->getMessage() .'}}'; 
}


?>