<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar museo</title>
	</head>
<body>

<aside>
<?php

$id_ciudad_fk=$_POST["id_ciudad_fk"];
$nombre=$_POST["nombre"];

echo "Edicion en proceso . . . . </br>";
include_once("museoCollector.php");
$DemoCollectorObj= new museoCollector();
$DemoCollectorObj->createDemo($nombre,$id_ciudad_fk);

?>

<div class="text-fieldsl">
         <a href='museoAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
