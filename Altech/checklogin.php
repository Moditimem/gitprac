<?php 
/*$host="127.0.0.1"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="essf"; // Database name 
$tbl_name="login";*/ // Table name 

$dbhost = '192.168.0.244';
$dbuser = 'Web_User';
$dbpass = 'm]D/F[:228c9 >K';
$d_bname = 'Telesave';

$_SESSION["loginTime"] = time();
$todays_date = date("Y-m-d H:i:s");




?>
<html>
<link rel="stylesheet" href="border.css" />
<body>
<br><br><br><br><br><br><br><br>
<div id = "form" style="width:340px;background:white" onmouseover="this.style.background='SteelBlue';" onmouseout="this.style.background='white';">

<div id = "form1">
<p align="left"><img src="wrongpass.png" alt="Mountain View" style="width:100px;height:90px"></p>

<hr width="50%" color="FireBrick" size="1" >
<br>
<?php
session_start();


$todays_date2 = date("Y-m-d H:i:s");

$_SESSION['today'] = $todays_date2;
// Connect to server and select databse.
mysql_connect("$dbhost", "$dbuser", "$dbpass")or die("cannot connect"); 
mysql_select_db("$d_bname")or die("cannot select Database");

$myusername=$_POST['username1']; 
$mypassword=$_POST['password']; 
$_SESSION['time'] = $todays_date;

$_SESSION['SecLevel'];
$_SESSION['Status'];





if (!$_POST["username1"] || !$_POST["password"])
        {
        die("You need to provide a username and password.");
        }

$lastfive = substr($myusername, -5);
$salt = '$2a$07$R.gJb2U2N.FmZ4hPp1y2CN$';
	$hashed_password =crypt($mypassword, $salt);

if ($lastfive == "admin") {          
    $sql="SELECT * FROM Users WHERE AccessUserName='$myusername' and Hash='$hashed_password'";
	
	$result=mysql_query($sql);
	while ($row = mysql_fetch_array($result)){
	session_start();
	$_SESSION['name'] =$row['FullName'];
	$_SESSION['time'] = $todays_date;
	
}
if($result)
{
$count=mysql_num_rows($result);

}
else
{
	die("Something wrong when reading database content");
}

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("username1");
//session_register("password"); 
/*session_start();
$_SESSION['username1'] = 'username1';
$_SESSION['password'] = 'password';*/

header("location:adminuser.php");

}
else {
echo "<strong>( Altech ) Wrong Username or Password!</strong>";
}
   
}
else
{

























// username and password sent from form 


session_start();
	// Set session variables
	$_SESSION['username1'] = $myusername;
	$_SESSION['time'] = $todays_date;
	
	
	//echo "Session variables are set.";
	
// Making selection based on User type
	//$answer = $_POST['ans'];  
	
	$salt = '$2a$07$R.gJb2U2N.FmZ4hPp1y2CN$';
	$hashed_password =crypt($mypassword, $salt);
          
    $sql="SELECT * FROM Users WHERE AccessUserName='$myusername' IN(Hash='$hashed_password',SecLevel='15')";
	
	$result=mysql_query($sql);
	while ($row = mysql_fetch_array($result)){
	session_start();
	$_SESSION['name'] =$row['FullName'];
	
}
if($result)
{
$count2=mysql_num_rows($result);

}
else
{
	die("Something wrong when reading database content");
}

// If result matched $myusername and $mypassword, table row must be 1 row
if($count2==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("username1");
//session_register("password"); 
/*session_start();
$_SESSION['username1'] = 'username1';
$_SESSION['password'] = 'password';*/

header("location:login_success.php");

}
else {
echo "<strong>( Altech ) Wrong Username or Password!</strong>";
}
   
}
   

?>

<br><br>
<a href="index.php" >Back</a>
</div>
</div>

</body>
</html>
