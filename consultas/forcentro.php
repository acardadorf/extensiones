<?php

//hacemos la consulta por Centro
require_once('conexion.php');
mysql_select_db($database_fran, $fran);
if (isset($_POST['edificio'])) {
    $consulta = "SELECT * FROM listadobase WHERE edificio=" . "'" . $_POST['edificio'] . "'" . "AND departamento != ''". "ORDER BY departamento, extension";
    $Recordset3 = mysql_query($consulta, $fran) or die('Consulta vacía'); // or die(mysql_error());
    $row_recordset3 = mysql_fetch_assoc($Recordset3);
}
mysql_close();//Cerramos la conexion.
?>