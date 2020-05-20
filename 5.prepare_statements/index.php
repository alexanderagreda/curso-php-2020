<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="col-sm-6 offset-sm-3 mb-5">
            <h1>Busqueda de usuarios</h1>
            <form method="POST">
                <div class="form-group">
                    <label for="codigo">Escriba su número de identificación</label>
                    <input type="text" class="form-control" id="codigo" name="id" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
      
    <?php 
    
        if ($_POST) {
            include 'conexion.php';
            $id = $_POST['id'];
            try {
                $conexion = new PDO("mysql:host=$host;dbname=$db",$us,$pass);
                //echo "Conectado a la base de datos <br />";
                $statement = $conexion->prepare('SELECT * FROM estudiante WHERE id = :id');
                $statement->execute(array(':id'=>$id));
                $res = $statement->fetchAll();
                if ($res) {
                    //print_r($resultado);
                    foreach ($res as $row) {
                        
    ?>
    <div class="alert alert-primary" role="alert">
        <?php echo "ID: " . $row['id'] . " Nombre: " . $row['nombre']; ?>
    </div>
    
    <?php
                        
                    }
                }else{
    ?>
    <div class="alert alert-danger" role="alert">    
                    <?php echo "Usted no tiene un resultado"; ?>
    </div>
    <?php
                }
                
            
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    
    ?>
    </div><!-- end container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


