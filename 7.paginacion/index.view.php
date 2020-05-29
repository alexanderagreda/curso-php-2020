<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <title>Paginación</title>
</head>
<body>
    <div class="contenedor">
        <h1>Articulos</h1>
        <section class="articulos">
            <ul>
               <?php foreach ($articulos as $articulo) { ?>
                    <li><?php echo $articulo['id'] . '. ' . $articulo['nombre'] ?></li>
               <?php } ?>
            </ul>
        </section>

        <section class="paginacion">
            <ul>
                <!-- Establecer cuando el boton siguiente estara deshabilitado -->
                <?php if($pagina == 1): ?>
                    <li class="disabled">&laquo;</li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
                <?php endif; ?>


                <!-- ciclo par mostrar los articulos -->
                <?php 
                
                    for ($i=1; $i <= $numeroPaginas; $i++) { 
                        if($pagina==$i){
                            echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                        }else{
                            echo "<li><a href='?pagina=$i'>$i</a><li>";
                        }
                    }
                
                ?>

                <!-- Establecer cuando el boton anterior estara deshabilitado -->
                <?php if($pagina == $numeroPaginas): ?>
                    <li class="disabled">&raquo;</li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
                <?php endif; ?>

                <!-- <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">&raquo;</a></li> -->
            </ul>
        </section>
    </div>
</body>
</html>