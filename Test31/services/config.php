<?php
	@mysql_connect("192.168.9.206","Zipho","Monty32") or die("Server is not available, please try again later");
	@mysql_select_db("web_telesave") or die("Database not available, please try again later");
	
	$dbhost = '192.168.9.206';
	$dbuser = 'Zipho';
	$dbpass = 'Monty32';
	$dbname = 'web_telesave';

  define('DB_HOST', '192.168.9.206');
  define('DB_USER', 'Zipho');
  define('DB_PASSWORD', 'Monty32');
  define('DB_NAME', 'web_telesave');

?>