<?php
session_start();
 $_SESSION["loginTime"] = time();
 $navigation="Capture Interface";

 
?>


<html>
	<head>


		<meta name="robots" content="noindex, nofollow" />
	<link rel="stylesheet" href="formvalid.css" />
	<script src="formvalid.js"></script>
		
		<link rel="stylesheet" href="border.css" />
		<title>Altech Netstar Partner Plus</title>
		<link href="http://code.jquery.com/mobile/git/jquery.mobile-git.css" rel="stylesheet" type="text/css"><br>
			<!--</br><h4 align="center">Standard Lesotho Bank Membership Capture</h4></br>-->
			<!--<h2 align="center"><strong>Standard Lesotho Bank Membership Capture Form</strong></h2></br>-->
		
			
			
			
	</head>
	
	</br></br></br></br>
	<div><h3 align="center" style="color:#0B2161; font-family:Tahoma" ><strong>User:</strong><?php echo "<strong> " . $_SESSION['name']. " is logged in.</strong></br><br>";echo "Login Date and Time :<strong> " . $_SESSION['time']. "</strong><br><br>";echo "Navigation :<strong> " .$navigation ."</strong><br>"  ?></h3></div>
	<body >
	 <div id = "form" style="width:900px;background:white" onmouseover="this.style.background='white';" onmouseout="this.style.background='white';">
	<p align="justify"><img src="PartnerPlusLogo.jpg" alt="Mountain View" style="width:650px;height:100px"></p>
	
	</br>
		 <hr width="90%" color="#0B2161" size="1" >
		 <br>
		 <p id="head" align="center"></p>
		<form name="myForm"   method="post" onsubmit='return formValidation()' action="update.php" align="justify">
			
			<label>Member Number:</label>
		<input type='text' id='memberno2' name="memberno2" /><br />
		<p id="p6"></p>
		
		
		
		
			<label>Scheme:</label>
			
		<select name="scheme" id="scheme" >
				<option value=""></option>
			<option value="Independent">Independent</option>
			<option value="CMH">CMH</option>
			
			</select><br />
		
			<label>First Name:</label>
		<input type='text' id='first_name' name="first_name"/><br />
		<p id="p1"></p>	
		
			<label>Surname:</label>
		<input type='text' id='surname' name="surname"/><br />
			<label>Cell number:</label>
			<input type='text' id='cell' name="cell"/><br /> 
			
				<label>Start date and Time:</label>
		<input type='text' id='capdate' name="capdate" value="<?php echo $_SESSION['time'] ?>" readonly /><br />
		<p id="p1"></p>	
		
			<label>Captured By:</label>
		<input type='text' id='capby' name="capby" value="<?php echo $_SESSION['name'] ?>" readonly /><br />
		<p id="p1"></p>	
		
			<label>E mail:</label>
		<input type='text' id='email' name="email"/><br />
		<p id="p3"></p>	
		
		<!--<select name="club" id='club' multiple>
	<option value="ABB Lifestyle Centre">ABB Lifestyle Centre</option>
	<option value="Absa Piggy Bank">Absa Piggy Bank</option>
	<option value="1Call Ghana">1Call Ghana</option>
		<option value="@ Your Leisure">@ Your Leisure</option>
		<option value="4 Sho!">4 Sho!</option>
		
	</select>-->
		
		
			<!--<hr width="50%" color="#4c4c4c" size="5" >--></br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="ui-btn ui-btn-inline ui-icon-arrow-r ui-btn-icon-right" style="color:#0B2161; font-family:Tahoma" >Capture Member</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="ui-btn ui-btn-inline ui-icon-refresh ui-btn-icon-left " type="reset" value="Reset" style="color:#0B2161; font-family:Tahoma" >Reset fields</button><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="viewing1.php" style=" font-family:Tahoma"><strong>Check Previously Captured</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php" style=" font-family:Tahoma"><strong>Logout</strong></a><br><br>
			<hr width="90%" color="#0B2161" size="1" >
			</div>
			 
			</form>
		</body>
			<br><br>
		


</html>
<?php 

session_start();


 include('config2.php');

	$user=$_SESSION['name'];
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
	
	$link = mysql_connect("$dbhost", "$dbuser", "$dbpass");
	mysql_select_db("$db_name", $link);
	$result = mysql_query("SELECT * FROM Reporting_Exec_Summary where summary_by='$user'", $link);
	$num_rows = mysql_num_rows($result);
	$_SESSION['count'] =$num_rows;
	
	while ($row = mysql_fetch_array($result)){

	$_SESSION['clubid']=$row['fk_Club'];
		
}

	
	

	
	
	

	
	
	



?>

