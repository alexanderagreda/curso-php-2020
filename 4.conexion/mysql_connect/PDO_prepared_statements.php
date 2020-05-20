<?php 


    $id = 2;
    /* Conexion a la base de datos mediante la clase PDO */
    //Try excepciones
    try {
        //El primer parametro de PDO es el origen de datos DSN, el segundo es el nombre de usuario y el tercero la contraseña de la base de datos
        $dsn = 'mysql:host=localhost;dbname=curso';
        $usuario = 'root';
        $contrasena = 'root';

        $conexion = new PDO($dsn,$usuario,$contrasena);
        echo "¡Conexion establecida correctamente! <br />";

        /* CONSULTAS PREPARADAS Prepared Statements */
        $preparar_query = $conexion->prepare('SELECT * FROM estudiante WHERE id = :id'); //En este punto se prepara la consulta pero no se ejecuta
        $preparar_query->execute(array(':id' => $id)); //con el metodo execute se ejecuta el query este incluye una parametro con el valor del placeholder de la consulta
        $resultado = $preparar_query->fetchAll();
        
        //permite recuperar los datos para mostrar en pantalla
        foreach ($resultado as $fila) {
            echo $fila['nombre'];
        }
        
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

?>

