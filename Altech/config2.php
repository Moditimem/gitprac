<?php
	
	$dbhost = '192.168.0.244';
	$dbuser = 'Web_User';
	$dbpass = 'm]D/F[:228c9 >K';
	$dbname = 'Telesave';

	@mysql_connect($dbhost,$dbuser,$dbpass) or die("Server is not available, please try again later");
	@mysql_select_db($dbname) or die("Database not available, please try again later");
?>