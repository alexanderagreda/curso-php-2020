<?php

    // Conexion a la base de datos
    $conexion = new mysqli('localhost','root','root','prueba_datos');
    
    // Validar que no se presente un error
    if($conexion->connect_errno){
        // La funcion die muestra un mensaje y termina la ejecucion del script actual
        die("Lo sentimos, hubo un error con el servidor");
    }else{
        // codigo
    }

?>