<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
        <meta charset ="utf-8">
        <title> Formulario insertar Nivel</title>
    </head>
    <body>
        <h2>Crear museo</h2>
        <form id="contact-form" action="CAGuardar.php" method= "post">
            
<p>Nombre: <input type="text" name="nombre" autofocus required/></p>
<p>Id ciudad: <input type="text" name="id_ciudad_fk" autofocus required/></p>
            <a href="cursoAlumnoAdmin.php">Cancelar</a>
            <input type="submit" id="submit_save" class="main-button" value="Guardar"/>
        </form>
    </body>
</html>
