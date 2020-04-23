<?php 

    //La variable global $_POST se crea cuando se presiona el boton submit y se envian los datos
    //Se valida si no existe la variable $_GET
    if(!$_GET){
        //redireccionar al index del formulario
        header('location: index.php');
    }
    //Muestra el contenido de la variable
    //print_r($_GET);
    $nombre = $_GET['nombre'];
    $anno = $_GET['anno'];
    $terminos = $_GET['terminos'];
    $sexo = $_GET['sexo'];
    echo "<br />";
    echo "Hola, tu nombre es: " . $nombre . " eres " . $sexo . ", naciste en el año " . $anno
    
?>