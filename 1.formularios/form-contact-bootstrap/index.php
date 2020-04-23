<?php 

    $error = '';
    
    function limpiar($texto){
        $texto = trim($texto);
        $texto = filter_var($texto, FILTER_SANITIZE_STRING);
        return $texto;
    }

    if (isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];

        // Validación del contenido de las variables
        if (!empty($nombre)) {
            $nombre = limpiar($nombre);
        }else{
            $error .= 'Por favor escriba un nombre<br />';
        }

        if (!empty($apellido)) {
            $apellido = limpiar($apellido);
        }else{
            $error .= 'Por favor escriba un apellido<br />';
        }

        if (!empty($correo)) {
            $correo = limpiar($correo);
        }else{
            $error .= 'Por favor escriba una dirección de correo electrónico<br />';
        }

        if (!empty($mensaje)) {
            $mensaje = limpiar($mensaje);
        }else{
            $error .= 'Por favor escriba un mensaje';
        }

        //Mostrar en pantalla
        $destinatario = 'mail@mail.com';
        $asunto = "Mensaje de fomulario de contacto";
        $contenido = "De: $correo \n";
        $contenido .= "Mensaje: $mensaje";
        //mail($destinatario, $asunto, $mensaje);
        $enviado = "Mensaje enviado correctamente";

    }    
    require 'index.view.php';
?>