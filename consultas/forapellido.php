<?php

//hacemos la consulta por apellido
require_once('conexion.php');
mysql_select_db($database_fran, $fran);
if (isset($_POST['elapellido'])&& ($_POST['elapellido'] != "")) {
    $consulta = "SELECT * FROM listadobase where apellido1 LIKE " . "'" . $_POST['elapellido'] . "%'" . " ORDER BY edificio, departamento, extension";
    $Recordset3 = mysql_query($consulta, $fran) or die('Consulta vacía'); // or die(mysql_error());
    $row_recordset3 = mysql_fetch_assoc($Recordset3);
}
mysql_close();//Cerramos la conexion.
?>