<?php session_start();

$navigation="Edit Interface";







 ?>
<html>

<head>

<title>Edit Summaries</title>
<!--<link rel="stylesheet" href="adminborder.css" />-->
<link rel="stylesheet" href="border.css" />
<link href="http://code.jquery.com/mobile/git/jquery.mobile-git.css" rel="stylesheet" type="text/css"><br>
</head>
<p id="error"></p>

<br><br><br><br><br>
<div><h3 align="center" style="color:#0B2161; font-family:Tahoma" ><strong>User:</strong><?php echo "<strong> " . $_SESSION['name']. " is logged in.</strong></br><br>";echo "Login Date and Time :<strong> " . $_SESSION['time']. "</strong><br><br>";echo "Navigation :<strong> " .$navigation ."</strong><br>"  ?></h3></div>
<body>
<div id = "form" style="width:900px;background:white" onmouseover="this.style.background='white';" onmouseout="this.style.background='white';">
<!--<div id = "form1">-->
<h2 align="center" style="color:#0B2161; font-family:Tahoma">Edit the Members data</h2>
<br>
<hr width="70%" color="#0B2161" size="1" >
<?php

include 'config2.php';

mysql_connect("$dbhost", "$dbuser", "$dbpass")or die("cannot connect to Server");
mysql_select_db("$dbname")or die("cannot select DB");

//$id = $_GET['id'];
$id = $_GET['id'];


$order = "SELECT * FROM Telesave.Members where id='$id'";

$result = mysql_query($order);
$row = mysql_fetch_array($result);




?>

<form method="post" action="editdata.php" onsubmit='return  displayError()'>
<table align="center">

<tr>

<td>
<input type="hidden" name="id"  value="<?php echo $id ?>" >
</td>
</tr>
<tr>


</tr>
</br>
<tr>
<td style="color:black; font-family:Tahoma"><strong>Member no</strong></td>
<td style="color:FireBrick; font-family:Tahoma" >
<input type="text" name="member_no2" id="member_no2"  size="17" value="<?php echo $row['Member_No'] ?>"  autofocus style="color:black; font-family:Tahoma" >
   
</td>
</tr>
<tr>
<td style="color:black; font-family:Tahoma"><strong>Current Scheme</strong></td>
<td style="color:FireBrick; font-family:Tahoma">
<input type="text" name="scheme1" id="scheme1" size="17" value="<?php echo  $row['Scheme'] ?>" style="color:black; font-family:Tahoma">

</td>
</tr>
<tr>
<td style="color:black; font-family:Tahoma"><strong>Change to Scheme</strong></td>
<td style="color:FireBrick; font-family:Tahoma">
<input type="text" name="scheme1" id="scheme1" size="17" value="<?php echo  $row['Scheme'] ?>" style="color:black; font-family:Tahoma">

</td>
</tr>
</br>
<tr>
<td style="color:black; font-family:Tahoma"><strong>First Name</strong></td>
<td>
<input type="text" name="first_name1" id="first_name1" size="17" value="<?php echo  $row['First_Name'] ?>" style="color:black; font-family:Tahoma" >
</td>

</tr>
<tr>
<td style="color:black; font-family:Tahoma"><strong>Surname</strong></td>
<td>
<input type="text" name="surname1" id="surname1" size="17" value="<?php echo  $row['Surname'] ?>" style="color:black; font-family:Tahoma" >
</td>

</tr>

<tr>
<td style="color:black; font-family:Tahoma"><strong>Email</strong></td>
<td>
<input type="text" name="email1" id="email1" size="17" value="<?php echo  $row['EmailAddress'] ?>" style="color:black; font-family:Tahoma" >
</td>

</tr>

<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td></td>

<td align="center">
<input type="submit" name="submit value" align="center" style="color:#0B2161; font-family:Tahoma" value="Edit the Summary">
</td>
<td style="color:black; font-family:Tahoma"><a href="viewing1.php">Back</a></td>
</tr>


</table>
<br>

</form>



</div>

<script>

function displayError(){
	if (title == '' || initials == '')
				{
						document.getElementById('error').innerText = "* Please fill up all the fields *";
						return false;
				}
				else
				{
					return true;
				}

}

</script>



<!--</div>-->
</body>
</html>
