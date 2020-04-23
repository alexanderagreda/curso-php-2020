<?php

  $error = '';

  //Validar que se envio el formulario boton name=enviar
  if (isset($_POST['enviar'])) {

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    //Validar que el contenido de las variables nombre no sea NULL
    if (!empty($nombre)) {
      // Trim elimina espacios al principio y final de la cadena de texto
      //$nombre =  trim($nombre);
      //htmlspecialchars convierte caracteres especiales en entidades HTML
      //$nombre =  htmlspecialchars($nombre);
      //stripcslashes Elimina las barras invertidas (/\)
      //$nombre = stripcslashes($nombre);

      //filter_var — Filtra una variable con el filtro que se indique, FILTER_SANITIZE_STRING elimina etiquetas, opcionalmente elimina o codifica caracteres especiales. saneamiento = remueve caracteres
      $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

      echo "Tu nombre es: " . $nombre . "<br />";
    }else{
      $error .= 'Por escribre un nombre <br />';
    }

    //Validar que el contenido de las variables correo no sea NULL
    if(!empty($correo)){
      echo "Tu correo es: " . $correo;
    }else{
      $error .= 'Por favor escribe una dirección de correo';
    }
        
    
  }
  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Validando un formulario</title>
    <style>
      .error{color:red;}
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 offset-sm-1 mt-5">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <h3 class="text-center">Validando un formulario</h3>
            <!-- validar formulario sin recurrir a archivos externos -->
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
              
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Escriba su nombre" autocomplete="off">                
              </div>
              
              <div class="form-group">
                <label for="nombre">Correo electrónico</label>
                <input type="email" class="form-control" name="correo" placeholder="direccion@ejemplo.com" autocomplete="off">                
              </div>     
              <?php if(!empty($error)): ?>  
                <div class="form-group error">
                  <?php echo $error; ?>
                </div>        
              <?php endif; ?>                     
              <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
            </form>

          </div><!-- end card content -->
        </div><!-- end card -->
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>