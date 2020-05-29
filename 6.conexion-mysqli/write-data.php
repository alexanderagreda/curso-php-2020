<?php

    $conexion = new mysqli('localhost','root','root','prueba_datos');
    if($conexion->connect_errno){
        die("Ups, se presento un error de conexion con el servidor");
    }else{
        $consulta = "INSERT INTO usuario VALUES (null,'Lucas',38)";
        $conexion->query($consulta);
        // print_r($conexion); Conocer el contenido de la variable $conexion
         
        if($conexion->affected_rows >= 1){
            echo "Número de registros insertados: " . $conexion->affected_rows;
        }else{
            echo "Ups, no se logro insertar el registro.";
        }

        
    }

?>