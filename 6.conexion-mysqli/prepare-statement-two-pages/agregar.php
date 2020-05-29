<?php

    // Incluir los datos de conexión y funciones:
    include "funciones.php";
    include "datos.php";
    $conectar = conectarBase($host,$usuario,$clave,$base);
    if(!$conectar->connect_errno){
        //Validar que se han enviado los datos con el metodo POST, y que no esten vacias:
        if (isset($_POST["nombre"], $_POST["email"], $_POST["mensaje"]) and $_POST["nombre"] !="" and $_POST["email"]!="" and $_POST["mensaje"]!="" ){

            //Asignacion de los datos a las variables
            $id=null;
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $mensaje = $_POST['mensaje'];
            
            //Preparamos la orden SQL
            if($statement = $conectar->prepare("INSERT INTO mensaje VALUES (?, ?, ?, ?)")){
                $statement->bind_param('ssss', $id, $nombre, $email, $mensaje);
                $statement->execute();
                echo "<p>Registros insertados: $statement->affected_rows</p>";
                $statement->close();

            }
            $conectar->close();
        } else {
            
            echo '<p>Por favor, complete el <a href="index.html">formulario</a></p>';

        }
    }else{
        echo "<p>Ups, se presento una falla de conexión con el servidor.</p>";
    }
?>