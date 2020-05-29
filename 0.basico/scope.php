<?php 

    $numero = 10; /* ámbito global */


    // Para utilizar la variable global $mensaje en el ambito local de una funcion se debe pasar como parametro la variable global
    function mostrarNumero(){
        global $numero; /* con la palabra reservada global es posible acceder a las variables globales */
        return $numero; /* referencia a una variable del ámbito local */
    }

    echo mostrarNumero();

?>