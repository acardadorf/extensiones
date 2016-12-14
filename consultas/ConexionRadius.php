<?php
/**
 * Created by PhpStorm.
 * User: ANTONIO
 * Date: 09/09/2015
 * Time: 11:46
 * Nueva conexión a base de datos Radius.
 */

error_reporting(5);
$hostname_Radius = "192.168.10.22:3306";
$database_Radius = "telefonos";
$username_Radius = "radius";
$password_Radius = "radius123";
$conexion_Radius = mysql_pconnect($hostname_Radius, $username_Radius, $password_Radius) or trigger_error(mysql_error(), E_USER_ERROR);
?>