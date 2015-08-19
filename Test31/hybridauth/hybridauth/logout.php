<?php
confirm('Do you really want to logout of this Application');

	//alert('Hope to see you again soon');

session_start();
session_destroy();
header("Location: index.html");

?>