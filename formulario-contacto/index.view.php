<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario contacto</title>
        <!-- import font -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <!-- custom style -->
        <link rel="stylesheet" href="style.css">   
    </head>
    <body>
        <div class="wrap">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <h1>Formulario de Contacto</h1>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="">
                <input type="mail" class="form-control" name="correo" id="correo" placeholder="Correo" value="">
                <textarea name="mensaje" class="form-control" placeholder="Mensaje"></textarea>
                <!-- here insert error -->
                <input type="submit" name="submit" value="Enviar correo" class="btn btn-primary">
            </form>
        </div>   
    </body>
</html>