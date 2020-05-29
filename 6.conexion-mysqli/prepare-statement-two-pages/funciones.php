<?php 

    function conectarBase($host, $usuario, $clave, $base){
        
        $con = new mysqli($host, $usuario, $clave, $base);
        return $con;
    
    }

?>