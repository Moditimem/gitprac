<?php

include 'config.php';

$fk_Members_ID = $_POST[nu_fk_TelesaveID];
$action_option = $_POST[nu_action_option];
$town = $_POST[nu_town];

town
mysql_query("UPDATE requests SET fk_Members_ID = '$fk_Members_ID', fk_Actions_OptionsID = '$action_option', fk_ShoppingArea = '$town' WHERE id = 1");

?>
