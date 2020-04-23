<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Formulario GET</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 offset-sm-1 mt-5">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <h3 class="text-center">Formulario GET</h3>
            
            <form action="procesar.php" method="get">
              
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Escriba su nombre" autocomplete="off">                
              </div>

              <div class="form-group">
                <label for="sexo">Sexo</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sexo" id="hombre" value="Hombre">                  
                  <label class="form-check-label" for="hombre">Hombre</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sexo" id="mujer" value="Mujer">                  
                  <label class="form-check-label" for="mujer">Mujer</label>
                </div>
              </div> 

              <div class="form-group">
                <label for="sexo">Año de nacimiento</label>
                <select name="anno" class="custom-select" autocomplete="off">
                  <option selected disabled>Seleccione una opción</option>
                  <option value="2000">2000</option>
                  <option value="2001">2001</option>
                  <option value="2002">2002</option>
                </select>
              </div>

              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="terminos" id="terminos" value="1">
                  <label class="form-check-label" for="terminos">
                    Acepto términos y condiciones
                  </label>
                </div>
              </div>
                     
              <button type="submit" class="btn btn-primary">Enviar</button>
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