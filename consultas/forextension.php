<?php

//hacemos la consulta por extension
require_once('conexion.php');
mysql_select_db($database_fran, $fran);
if (isset($_POST['extension']) && ($_POST['extension'] != "") && ($_POST['extension'] < 1800) && ($_POST['extension'] > 999)) {
    $consulta = "SELECT * FROM listadobase where extension =" . $_POST['extension'];
    $Recordset2 = mysql_query($consulta, $fran) or die(mysql_error());//Hacemos la consulta y la guardamos en el recordset
    $row_recordset2 = mysql_fetch_assoc($Recordset2);//Devuelve el array asociativo correspondiente a la consulta.
}
mysql_close();//Cerramos la conexion.
?>