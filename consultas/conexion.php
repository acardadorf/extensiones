<?php
error_reporting(5);
$hostname_fran = "127.0.0.1:3306";
$database_fran = "telefonos";
$username_fran = "root";
$password_fran = "miroot";
$fran = mysql_pconnect($hostname_fran, $username_fran, $password_fran) or trigger_error(mysql_error(), E_USER_ERROR);
?>
