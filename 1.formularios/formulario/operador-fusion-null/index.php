<?php
    
    //$nombre = $_GET['nombre'];

    /* Opcion 1 Condicional para comprobar si existe la variable nombre
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
    }else{
        $nombre = 'Anonimo';
    }
    */

     /* Opcion 2 Condicional para comprobar si existe la variable nombre 
    $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';
    */


    /* Opcion 3 Operador de fusion null Condicional para comprobar si existe la variable nombre */
    $nombre = $_GET['nombre'] ?? 'Anonimo';  /* Esto equivale a:
    $nombre_usuario = isset($_GET['usuario']) ? $_GET['usuario'] : 'nadie'; */
    
    echo $nombre;





?>