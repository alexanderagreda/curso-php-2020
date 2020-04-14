<?php 

    //Validar envio por el metodo POST - Se recomienda usar esta opcion si existe un solo formulario
    //Si el metodo de envio = POST
    /*
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       echo "Se envio por el metodo POS";
    }else{
        echo "Se envio por el metodo GET";
    }
    */


    //Alternativamente se puede validar el boton submit se recomiend utilizar esta opcion cuando haya mas de un formulario
    //Si la variable submit fue creada entonces
    //La funcion isset determina si una variable esta definida y no es null
    if(isset($_POST['enviar'])){
        echo "Los datos se han enviado mediante submit, la variable esta definida y no es NULL". "<br />";
        //Mostrar el contenido de la variable predefinina POST
        echo print_r($_POST['enviar']) . "<br />";
        //Ver todos los valores del arreglo POST
        echo var_dump($_POST);
    }else{
        header('Location: index.php');
    }
  
?>