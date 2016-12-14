<?php

require_once('conexion.php');
mysql_select_db($database_fran, $fran);//Selecciono la base de datos
if ($_GET) {
    $consulta = "SELECT * FROM listadobase";
    $Recordset2 = mysql_query($consulta, $fran) or die(mysql_error());
    $row_recordset2 = mysql_fetch_assoc($Recordset2);
}
mysql_close(); //Cerramos la conexion.
?>
