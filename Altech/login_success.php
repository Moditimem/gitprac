<?php
$timein = date("H:i:s");
 	 
	 
session_start();
$_SESSION['time_in']=$timein;

header("location:capture.php");


?>

<html>
<body>

</body>
</html>