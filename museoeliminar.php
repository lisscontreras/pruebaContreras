<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar museo</title>
	</head>
    <body>
        <aside>
            <?php
            $id=$_GET["id"];
            include_once("museoCollector.php");
            $DemoCollectorObj= new museoCollector();
            $DemoCollectorObj->deleteDemo($id);
            echo "valor id: ".htmlspecialchars($id)." ha sido eliminado correctamente </br>";
            ?>
            
            <div class="text-fieldsl">
                <a href='museoAdmin.php'>Volver al inicio</a>                                    
            </div>
        </aside>
    </body>
</html>
