<?php

// server info
$servername = "192.168.0.244";
$username = "Web_User";
$password = "m]D/F[:228c9 >K";
$dbname = "Telesave";



// connect to the database
$mysqli = new mysqli($servername, $username, $password, $dbname);

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);



/*$dbhost = '192.168.0.244';
$dbuser = 'Web_User';
$dbpass = 'm]D/F[:228c9 >K';
$dbnamep = 'Telesave';

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbnamep);
mysqli_report(MYSQLI_REPORT_ERROR);*/
?>