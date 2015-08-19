<?php session_start();  ?>
<html>
<link rel="stylesheet" href="border.css" />
<body>
<br><br><br><br><br><br><br><br>
<div id = "form" style="width:340px;background:white" onmouseover="this.style.background='white';" onmouseout="this.style.background='white';">

<div id = "form1">
<p align="left"><img src="update4.png" alt="Mountain View" style="width:70px;height:80px"></p>
<?php

include 'config2.php';

$memberno=$_POST['member_no2'];
$scheme=$_POST['scheme1']; 
$first_name=$_POST['first_name1'];
$surname=$_POST['surname1'];
$email=$_POST['email1'];

$id = $_POST['id'];
$todays_date = date("Y-m-d H:i:s");

$clubbefore=$_SESSION['club'];
$datebefore=$_SESSION['date'];
$summarybefore=$_SESSION['summary'];




try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			
	 
	 $sql = "UPDATE Telesave.Members SET Member_No='$memberno',Scheme='$scheme',First_Name='$first_name',Surname='$surname',EmailAddress='$email'   WHERE id='$id'";
	 
	 
						
	
						
	 /*$conn2 = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);				
	$link = mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name", $link);
	$sql4 = mysql_query("INSERT INTO detail(modified_ids,before,after,date)
						VALUES ('$id','$before','$before','$todays_date')", $link);*/
					
  

    // Prepare statement
    $stmt = $conn->prepare($sql);
	
	
    // execute the query
    $stmt->execute();
	

    // echo a message to say the UPDATE succeeded
    echo "<p>( ESA )</p><p align='center' style='color:black ; font-family:Tahoma'>" . $stmt->rowCount() . " Record  Updated Successfully </p>";
	
	//header("Location: view.php");
    }
catch(PDOException $e)
    {
    echo $sql4 . "<br>" . $e->getMessage();
    }

$conn = null;
?>
<h4 style='color:black ; font-family:Tahoma'> <a href="viewing1.php">Back</a></h4>

</div>
</div>
</body>

</html>
