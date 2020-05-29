<?php
    
    //Conexion a la base de datos
    try {

        $conexion = new PDO('mysql:host=localhost;dbname=paginacion','root','root');
    } catch (PDOException $e) {
        //Mostrar el error en pantalla
        echo "Error: " .  getMessage();
        //Terminar la ejecucion del script
        die();

    }

    //Establecer la pagina en que el usuario se encuentra
    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ;
    //Establecer el numero de post por pagina
    $postPorPagina = 5;

    //Establecer la posicion inicial de post a mostrar segun la pagina indicada
    $inicio = ($pagina > 1 ) ? ($pagina * $postPorPagina - $postPorPagina) : 0;
    
    //Preparar la consulta para recuperar los articulos de la base de datos
    $articulos = $conexion->prepare("SELECT * FROM articulo LIMIT $inicio, $postPorPagina");
    
    //Ejecutar la consulta
    $articulos->execute();

    //La metodo fetchall() devuelve un array que contiene todas las filas del conjunto de resultados de la consulta
    $articulos = $articulos->fetchall();

    $articulos = $articulos;

    //Validar que el numero de articulos exista
    if(!$articulos){
        header('Location:index.php');
    }

    //Contar el total de articulos
    $totalArticulos = $conexion->query("SELECT COUNT(*) FROM articulo");
    
    //fetchColumn() recupera el número de filas que serán devueltas por la instruccion SELECT COUNT(*)
    //para las demas operaciones se usa rowCount()
    $totalArticulos = $totalArticulos->fetchColumn();

    //Determinar el total de paginas segun el numero de articulos

    //la funcion ceil Redondear fracciones hacia arriba al número entero mas proximo 
    $numeroPaginas = ceil($totalArticulos / $postPorPagina);
    
    require 'index.view.php';


?>