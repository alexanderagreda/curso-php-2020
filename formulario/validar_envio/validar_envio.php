<?php 

    //Validar envio por el metodo GET
    //Si el metodo de envio = GET
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
       echo "Se envio por el metodo GET";
    }else{
        echo "Se envio por el metodo POST";
    }
  
?>