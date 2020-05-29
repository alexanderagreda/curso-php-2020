<?php 

    $conexion = new mysqli('localhost','root','root','prueba_datos');
    if($conexion->connect_errno){
        die("Lo sentimos hubo un error de conexion con el servidor.");
    }else{
        //Si la variable GET esta establecida se especifica un valor a la variable $id, en caso contrario 1 por defecto
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        // Definir la consulta SQL
        $consulta = "SELECT * FROM usuario WHERE ID = $id";
        //Invocar el motodo query con la consulta
        // Para consultas simples se utiliza query, para consultas con criterios que busqueda se utiliza prepare statements
        $resultado = $conexion->query($consulta);
        // Comprobar el numero de filas que se obtuvo al ejecutar la consulta
        if ($resultado->num_rows){
            // mysqli fetch_assoc() permite obtener una fila de resultado como un array asociativo
            // por cada vez que se ejecuta fetch_assoc se visualiza una fila, con la siguiente ejecucion de fetch_assoc se muestra el proxmo registro
            while ($fila = $resultado->fetch_assoc()) {
                echo "Nombre: " . $fila['nombre'] . " Edad: " . $fila['edad']. "<br />";
            }
        }else{
            echo "No se encontro datos";
        }         
    }

?>