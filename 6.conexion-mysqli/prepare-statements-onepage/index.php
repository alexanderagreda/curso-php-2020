<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Insertar datos</title>
  </head>
  <body class="bg-light">
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-4 offset-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Crear usuario</h3>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                            <div class="form-group">
                                <label for="nombre">Nombre de usuario</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="nombreHelp" required>
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>

                            <div class="form-group">
                                <label for="edad">Edad</label>
                                <input type="number" class="form-control" name="edad" id="edad" aria-describedby="edadHelp" required>
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            
                            
                            <input class="btn btn-primary" type="submit" value="Guardar">                         

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 offset-sm-4 mt-1">
            
                <?php 
                    // Validar el metodo de la solicitud
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                        require 'conexion.php';
                        $conexion = new mysqli($server, $us, $ps, $db);
                        if($conexion->connect_errno){
                            die("Ups, se presento un error de conexion con el servidor");
                        }else{
                            $statement = $conexion->prepare("INSERT INTO usuario VALUES (?, ?, ?)");
                            $statement->bind_param('ssi',$id, $nombre, $edad);
                            $id=null;
                            if(isset($_POST['nombre']) && isset($_POST['edad'])){
                              $nombre = $_POST['nombre'];
                              $edad = $_POST['edad'];  
                            }
                            $statement->execute();
                            if($statement->affected_rows>=1){
                                echo "Número de registros creados: " . $statement->affected_rows;
                            }
                            $statement->close();
                            $conexion->close();
                        }
                    }                         
                ?>

            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>