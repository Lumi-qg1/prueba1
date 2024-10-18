<?php
include_once "../views/partials/variables.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exámen Final | 1er indicador</title>
    <!-- INCLUIMOS LOS ESTILOS DE BOOTSTRAP -->
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
</head>

<body>
    <div class="container mx-auto"> <!-- CREAMOS EL CONTENEDOR PRINCIPAL -->
        <!-- CREAMOS EL CAROUSEL -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <!-- 1RA IMAGEN DEL CARUSEL -->
                <div class="carousel-item active">
                    <img src="resources/img/banner.png" style="width: 100%" alt="...">
                </div>
            </div>
        </div>
        <!-- CREAMOS EL NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- LOGO DE LA PAGINA -->
            <a class="navbar-brand" href="#"><img src="resources/img/logoapp.png" width="80" height="80" alt=""></a>
            <!-- MENU DE NAVEGACION -->
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active pt-1 pb-1" href="/examen">Inicio</a>
                    <!-- RECORREMOS EL ARRAY DE EJERCICIOS PARA MOSTRARLOS EN EL MENU DE NAVEGACION -->
                    <?php foreach ($ejercicios as $key => $ejercicio) { ?>
                        <a class="nav-link border rounded-pill border-secondary pt-1 pb-1 mr-1 ml-1" href="<?php echo $ejercicio['link'] ?>"><?php echo $ejercicio['titulo'] ?></a>
                    <?php } ?>
                </div>
            </div>
            <span class="navbar-text">
                <h4 class="h4">
                    IESTPPJ - Sistemas
                </h4>
            </span>
            <!-- BOTON PARA DESPLEGAR EL MENU CUANDO ES PEQUEÑA LA PAGINA -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <div class="row mt-3"> <!-- CREAMOS UNA FILA PARA LOS EJERCICIOS -->
            <?php foreach ($ejercicios as $key => $ejercicio) { ?> <!-- RECORREMOS EL ARRAY DE EJERCICIOS PARA MOSTRARLOS -->
                <div class="col-sm-12 <?php if($key != 2): ?> col-md-6 <?php endif; ?>">  <!-- CREAMOS UNA COLUMNA PARA CADA EJERCICIO -->
                    <div class="card mb-3"> <!-- CREAMOS UNA TARJETA PARA CADA EJERCICIO -->
                        <div class="card-header"> <!-- CREAMOS EL ENCABEZADO DE LA TARJETA -->
                            <h5 class="card-title text-danger"><?php echo $ejercicio['titulo'] ?></h5> <!-- TITULO DEL EJERCICIO -->
                        </div>
                        <div class="card-body"> <!-- CUERPO DE LA TARJETA -->
                            <div class="row"> <!-- FILA PARA LA IMAGEN Y LA DESCRIPCION DEL EJERCICIO -->
                                <div class="col-sm-12" style="min-height: 350px;"> <!-- COLUMNA PARA LA IMAGEN DEL EJERCICIO -->
                                    <img src="<?php echo $ejercicio['imagen'] ?>" class="w-100" alt="..."> <!-- IMAGEN DEL EJERCICIO -->
                                </div>
                                <div class="col-sm-12" <?php if($key != 2): ?> style="min-height: 100px;" <?php endif; ?>> <!-- COLUMNA PARA LA DESCRIPCION DEL EJERCICIO -->
                                    <p class="card-text text"><?php echo $ejercicio['descripcion'] ?></p> <!-- DESCRIPCION DEL EJERCICIO -->
                                </div>
                            </div>
                        </div>
                        <div class="card-footer"> <!-- PIE DE LA TARJETA -->
                            <a href="<?php echo $ejercicio['link'] ?>" class="btn btn-primary">Ver Ejercicio</a> <!-- BOTON PARA VER EL EJERCICIO -->
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="resources/js/jquery-1.11.3.js"></script>
    <script src="resources/js/bootstrap.bundle.min.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
</body>

</html>