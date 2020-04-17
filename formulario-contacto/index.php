<?php
    //Variable declarada y utilizada para mostrar los errores de entrada de datos
    $error = '';
    $enviado = "";

    //Validar si se establecio la varible submit con el metodo post
    if (isset($_POST['submit'])) {
        //recuperar los datos y asignarlos a las variables
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];

        // Validar si hay contenido en la variable nombre (no esta vacia)
        if (!empty($nombre)) {
            //Limpiar la variable de caracteres no deseados
            $nombre = trim($nombre);
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

        }else{
            $error .= 'Por favor ingrese un nombre <br />';
        } 
        
        // Validar si hay contenido en la variable correo (no esta vacia)
        if (!empty($correo)) {
            $correo = trim($correo);
            $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
            
            //Vefificar si el conteido de la variable correo es válido 
            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                $error .= 'Por favor escriba un correo válido <br />';
            }

        }else{
            $error .=  'Por favor escriba una dirección de correo <br />';
        }


        // Validar si hay contenido en la variable mensaje (no esta vacia)
        if (!empty($mensaje)) {
            $mensaje = htmlspecialchars($mensaje);
            $mensaje = trim($mensaje);
            $mensaje = stripcslashes($mensaje);
        }else{
            $error .= 'Por favor escribe un mensaje';
        }

        //Enviar mensaje
        if (!$error) {
            $destinatario = 'alexanderagreda@gmail.com';
            $asunto = 'Mensaje enviado desde mi formulario de contacto';
            $contenido = "De: $nombre \n";
            $contenido .= "Correo electronico: $correo \n";
            $contenido .= "Mensaje: " . $mensaje;
            //funcion para enviar el mensaje
            //mail($destinatario, $asunto, $mensaje);
            //Confirmar envio de mensaje con la variable enviado
            $enviado = 'Mensaje eviado correctamente';
        }

        


    }
    require 'index.view.php';
   
?>