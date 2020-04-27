<?php 
    //Reanuda la session actual basada en un identificador de sesión
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>
<body>
    <?php if ($_SESSION){    
            $nombre = $_SESSION['nombre']; 
            echo "<h1>Bienvenido: $nombre </h1>";
          }else{
            echo "Usted no ha iniciado sessión";
          }
    ?>
    <a href="cerrar_sesion.php">Cerrar sesión</a>  
</body>
</html>