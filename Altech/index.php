<?php
session_start();
 $_SESSION["loginTime"] = time();
?>


<html>
	<head>
	
	
		
		<link rel="stylesheet" href="border.css" />
		<title>Altech Netstar Partner Plus(ANPP)</title>
		<link href="http://code.jquery.com/mobile/git/jquery.mobile-git.css" rel="stylesheet" type="text/css"><br>
			<!--</br><h4 align="center">Standard Lesotho Bank Membership Capture</h4></br>-->
			<!--<h2 align="center"><strong>Standard Lesotho Bank Membership Capture Form</strong></h2></br>-->
	</head>
	</br></br></br></br>
	<body >
	 <div id = "form" style="width:610px;background:white" onmouseover="this.style.background='#FFFFFF';" onmouseout="this.style.background='#FFFFFF';">
	
	</br>
<p align="justify"><img src="PartnerPlusLogo.jpg" alt="Mountain View" style="width:450px;height:100px"></p>
		<form name="form1" action="checklogin.php" method="post" onsubmit='return formValidation()'>
		<hr width="70%" color="FireBrick" size="1" >
		<br><br>
		
		<label style="color:black ; font-family:Tahoma"><strong>User name:</strong></label>
		<input type='text' id='username3'  name="username1"  placeholder="              Username"/><br />
		
		
		<label style="color:black ; font-family:Tahoma"><strong>Password:</strong></label>
		<input type='password' id='password1' name="password" placeholder="              Password"/><br />
		
		<p>&nbsp;&nbsp;&nbsp;&nbsp;<button class="ui-btn ui-btn-inline ui-icon-action ui-btn-icon-left" style="color:#0B2161; font-family:Tahoma">Login</button><button class="ui-btn ui-btn-inline ui-icon-refresh ui-btn-icon-left" type="reset" value="Reset" style="color:#0B2161; font-family:Tahoma">Reset</button></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		
	
			</form>
			</br>
			<!--<hr width="50%" color="#4c4c4c" size="5" >-->
			</div>
		</body>
			<br><br>
		


</html>
<?php 

session_start();

	
 include('config.php');
 include('config2.php');

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
	
	$link = mysql_connect("$dbhost", "$dbuser", "$dbpass");
	mysql_select_db("$dbname", $link);
	$result = mysql_query("SELECT * FROM Telesave.Members  where Load_By='Melissa Pillay'", $link);
	$num_rows = mysql_num_rows($result);
	$_SESSION['count'] =$num_rows;
	$_SESSION['count2']=$num_rows;


	
	
	

	

 
	
	
	



?>

