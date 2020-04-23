<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Formulario de Contacto</title>
  </head>
  <body style="background: #f8f9fa;">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 offset-sm-3 mt-5">
        <div class="card shadow-sm p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
             
              <div class="form-group text-center">
                <h3>Formulario de Contacto</h3>                
              </div>

              <div class="form-group">
                <p>Por favor diligencie los campos del formulario y haga clic en el boton enviar.</p>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="nombre" placeholder="Escriba su nombre" value="<?php if($error && isset($nombre)) echo $nombre ?>">
              </div>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Escriba su apellido" name="apellido" value="<?php if($error && isset($apellido)) echo $apellido ?>">
              </div>

              <div class="form-group">
                <input type="email" class="form-control" placeholder="Escriba su correo electrónico" name="correo" value="<?php if($error && isset($correo)) echo $correo ?>">
              </div>

              <div class="form-group">
                <textarea class="form-control" placeholder="Escriba su mensaje" name="mensaje" rows="3"><?php if($error && isset($mensaje)) echo $mensaje ?></textarea>
              </div>

              <?php if(!empty($error)):?>
                <div class="alert alert-danger" role="alert"><?php echo $error; ?></div>
              <?php elseif(!empty($enviado)): ?>
                <div class="alert alert-success" role="alert"><?php echo $enviado; ?></div>
              <?php endif; ?>

              <div class="form-group">
                <input class="btn btn-primary btn-lg" type="submit" name='submit' value="Enviar">
              </div>           

            </form>
          </div>
        </div><!-- end card -->
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
  </body>
</html>