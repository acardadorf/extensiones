<?php

require_once('conexion.php');
mysql_select_db($database_fran, $fran);
if ($_GET) {
$consulta = "SELECT * FROM externos WHERE departamento =" . $_GET['departamento'] . " AND centro=" . $_GET['centro']; // El texto de la consulta
$Recordset2 = mysql_query($consulta, $fran) or die(mysql_error()); //Consulta a la base de datos
$row_recordset2 = mysql_fetch_assoc($Recordset2);
}
mysql_close(); //Cerramos la conexion.
?>
