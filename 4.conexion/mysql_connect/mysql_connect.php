<?php 
    /* CONEXION OBSOLETA */
    // Conexion a la base de datos
    // La funcion Die() es equivalente la fucnion exit(), se utilizan para imprimir un mensaje y terminar la ejecucion del script actual
    $conexion = mysql_connect('localhost','root', 'root') or die('Fallo la conexion a la base de datos');
    //Funcion para seleccionar la base de datos, recibe compo pametro la variable de conexión.
    mysql_select_db('curso', $conexion);

    // Ejecutar sentencia SQL la funciono mysql_query envia una consulta MySQL
    $resultado = mysql_query('SELECT * FROM estudiante');

    //mysql_fetch_array()  Recupera una fila de resultados como un array asociativo, un array numérico o como ambos
    while ($fila = mysql_fetch_array($resultado)) {
        echo $fila['nombre'];
        echo "<br />";
    }

    /*  OPCION 1
    
    La función mysql_fetch_object — Recupera una fila de resultados como un objeto, luego se recorre el objeto
    while($fila = mysql_fetch_object($resultado)){
        echo $fila->nombre . "<br />";
    }

    */

?>