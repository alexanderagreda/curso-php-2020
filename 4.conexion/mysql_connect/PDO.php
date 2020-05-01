<?php 

    /* Conexion a la base de datos mediante la clase PDO */
    //Try excepciones
    try {
        //El primer parametro de PDO es el origen de datos DSN, el segundo es el nombre de usuario y el tercero la contraseña de la base de datos
        $dns = 'mysql:host=localhost;dbname=curso';
        $usuario = 'root';
        $contrasena = 'root';

        $conexion = new PDO($dns,$usuario,$contrasena);
        echo "¡Conexion establecida correctamente! <br />";

        /* METODO QUERY */
        //Para ejecutar una consulta se uitiliza el metodo query, este metodo es poco seguro, posibilita la inyeccion de codigo sql, se debe evitar incluir variables de PHP en la sentencia del query
        $resultado = $conexion->query("SELECT * FROM estudiante");
        foreach ($resultado as $fila) {
            //print_r($fila);
            echo "ID: ". $fila['id'] . " Nombre: " . $fila['nombre'] . "<br />";
        }

    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

?>