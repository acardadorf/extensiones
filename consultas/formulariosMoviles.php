<?php

function formulario1() {
    echo '<p>&nbsp;</p>';
    echo '<p>&nbsp;</p>';
    echo '<p><h3>Introduzca el número corto:</h3></p>';
    echo'<form action="muestrabusmcorto.php" method="post" name="formcorto">';
    echo'<p>Extension: <input name="extension" type="text" size="4"></p>';
    echo'<input type="submit" value="Consultar" name="enviar">';
    echo'</form>';
    echo '<p>&nbsp;</p>';
}

function formulario5() {
    echo '<p>&nbsp;</p>';
    echo '<p>&nbsp;</p>';
    echo '<p><h3>Introduzca el número largo:</h3></p>';
    echo'<form action="muestrabusmlargo.php" method="post" name="formlargo">';
    echo'<p>Extension: <input name="extension" type="text" size="4"></p>';
    echo'<input type="submit" value="Consultar" name="enviar">';
    echo'</form>';
    echo '<p>&nbsp;</p>';
}

function formulario2() {
    echo '<p>&nbsp;</p>';
    echo '<p>&nbsp;</p>';
    echo '<p><h3>Introduzca el primer apellido:</h3></p>';
    echo'<form action="muestrabusmapellido.php" method="post" name="formapellido">';
    echo'<p>Apellido: <input name="elapellido" type="text"></p>';
    echo'<input type="submit" value="Consultar" name="enviar">';
    echo'</form>';
    echo '<p>&nbsp;</p>';
}

function formulario3() {
    echo '<p>&nbsp;</p>';
    echo '<p>&nbsp;</p>';
    echo '<p><h3>Introduzca el nombre de pila:</h3></p>';
    echo'<form action="muestrabusmnombre.php" method="post" name="formnombre">';
    echo'<p>Nombre: <input name="nombre" type="text" size="20"></p>';
    echo'<input type="submit" value="Consultar" name="enviar">';
    echo'</form>';
    echo '<p>&nbsp;</p>';
}

function formulario4() {
    echo '<p>&nbsp;</p>';
    echo '<p>&nbsp;</p>';
    echo '<p><h3>Seleccione el departamento:</h3></p>';
    echo'<form action="muestrabusmdepartamento.php" method="post" name="formdepartamento">
	<p>Centro: <select name="edificio" id="edificio" size="1">
	<option value="Ayuntamiento" selected="selected">Ayuntamiento</option>
	<option value="Antíguo Consistorio">Antíguo Consistorio</option>
	<option value="Antígua Residencia">Antígua Residencia</option>
	<option value="Área Económica">Área Económica</option>
	<option value="Biblioteca Central">Biblioteca Central</option>
	<option value="Centro Calle Apolo">Centro Calle Apolo</option>
	<option value="Servicios Sociales Plaza de Autos">Servicios Sociales Plaza de Autos</option>
	<option value="Centro Plaza Ntra. Sra. de Montserrat">Centro Plaza Ntra. Sra. de Montserrat</option>
	<option value="Policía Local">Policía Local</option>
	<option value="Centro de Actividades Educativas">Centro de Actividades Educativas</option>
	<option value="Centro de Asociaciones">Centro de Asociaciones</option>
	<option value="Centro de Barrio Vivaverde">Centro de Barrio Vivaverde</option>
	<option value="Centro Cultural Juan Prado">Centro Cultural Juan Prado</option>
	<option value="Centro de Empresas">Centro de Empresas</option>
	<option value="Centro Municipal de Mayores">Centro Municipal de Mayores</option>
	<option value="Centro Ocupacional">Centro Ocupacional</option>
	<option value="Centro Ramón Areces">Centro Ramón Areces</option>
	<option value="Centro Vicente Ferrer">Centro "Vicente Ferrer"</option>
	<option value="Deportes">Deportes</option>
	<option value="Juventud">Juventud</option>
	<option value="Torre del Reloj">Torre del Reloj</option>
	<option value="Urbanismo">Urbanismo</option>
	</select></p>
	<input type="submit" value="Consultar" name="enviar">
	</form>';
    echo '<p>&nbsp;</p>';
}

function muestra_foto() {
    //echo '<h1>Buscador de extensiones:</h1>';
    echo '<img  class="imcentral" src="images/buscador3.jpg"  alt="Teléfonos" name="Insert_logo" width="400px" height="300px" id="Insert_logo">';
}
?>