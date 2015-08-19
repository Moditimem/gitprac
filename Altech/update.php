<html>
<link rel="stylesheet" href="border.css" />
<body>

<br><br><br><br><br><br><br><br>
<div id = "form" style="width:340px;background:white" onmouseover="this.style.background='SteelBlue';" onmouseout="this.style.background='white';">

<div id = "form1">


<br>
<?php


session_start();


 include('config2.php');

$todays_date = date("Y-m-d H:i:s ");


$memberno=$_POST['memberno2'];
$sheme=$_POST['scheme'];
$first_name=$_POST['first_name'];
$surname=$_POST['surname'];
$cell=$_POST['cell'];
$email=$_POST['email'];
$loaddate=$todays_date;
$loadby=$_SESSION['name'];

	




$timein=$_SESSION['time_in'];
$timenow = date("H:i:s");

if($sheme=='Independent')
{
	$schemeno='169';
}
if($sheme=='CMH')
{
	$schemeno='170';
}






try {
  
	

	
   
//---------------------------------------------------------------------------------------------------------- Telesave --------------------------------------------------------------------------------------------------
	
	$conn2= new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    // set the PDO error mode to exception

	$conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql2 = "INSERT INTO Telesave.Members (Club,Member_No,Scheme,First_Name,Surname,Status,Load_By,Load_Date,Start_Date,EmailAddress)
    VALUES ('203','$memberno','$schemeno','$first_name','$surname','LIVE ','$loadby','$loaddate','$loaddate','$email')";
	
	$conn2->exec($sql2);
//---------------------------------------------------------------------------------------- Getting Last Inserted ID ------------------------------------------------------------------------------------------------------------------------

	
	$sql="SELECT * FROM Telesave.Members WHERE Member_No='$memberno'";
	
	$result=mysql_query($sql);
	while ($row = mysql_fetch_array($result)){
	session_start();
	
	$Last_insert_ID=$row['ID'];
	
}

$sql3 = "INSERT INTO Telesave.Members_Attributes (fk_Members_ID,Attribute_Type,Attribute_Value)
    VALUES ('$Last_insert_ID','1','$email')";
	
$sql4= "INSERT INTO Telesave.Members_Numbers(fk_Members_ID,Number_Type,Number)
    VALUES ('$Last_insert_ID','3','$cell')";	

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 

	
	 
	$conn2->exec($sql3);
	$conn2->exec($sql4);	
	


	echo '<p align="left"><img src="tick.png" alt="Mountain View" style="width:70px;height:70px"></p>';
	echo '<hr width="50%" color="FireBrick" size="1" >';
    echo "<p style='color:black ; font-family:tahoma'>New member record uploaded successfully to Telesave</p>";
	
    }
catch(PDOException $e)
    {
	echo '<p align="left"><img src="wrong.png" alt="Mountain View" style="width:70px;height:70px"></p>';
	
	echo '<hr width="50%" color="FireBrick" size="1" >';
     echo "<p style='color:black ; font-family:tahoma'>Error Encountered,Re-enter and if the problem persist, Consult your Developer</p>";
	echo $sql2 . "<br>" . $e->getMessage();
	/*echo "Fields Data not Passed Correctly,Click back and re-enter Correctly,ensure no duplicates are made";*/
	echo $sql3 . "<br>" . $e->getMessage();
	echo $sql4 . "<br>" . $e->getMessage();
    }

$conn = null;

?>
<br><br>
<a href="capture.php" >Back</a>

</div>
</div>

</body>
</html>