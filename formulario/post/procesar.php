<?php 

    //La variable global $_POST se crea cuando se presiona el boton submit y se envian los datos
    //Se valida si no existe la variable $_POST
    if(!$_POST){
        //redireccionar al index del formulario
        header('location: index.php');
    }
    print_r($_POST);
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $anno = $_POST['anno'];
    $terminos = $_POST['terminos'];
    echo "<br />";
    echo "Hola, tu nombre es: " . $nombre . " eres " . $sexo . ", naciste en el año " . $anno
?>