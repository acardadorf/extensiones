<?php

require_once('conexion.php');//Solicito una conexion
mysql_select_db($database_fran, $fran);// Selecciono la base dedatos a usar
if ($_GET) {
    $consulta = "SELECT * FROM listadobase where departamento =" . $_GET['departamento'] . " AND edificio=" . $_GET['edificio'];
    $Recordset2 = mysql_query($consulta, $fran) or die(mysql_error());
    $row_recordset2 = mysql_fetch_assoc($Recordset2);
}
mysql_close();//Cerramos la conexion.
?>
