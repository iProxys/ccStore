<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/libraries/css/all.css">
        <link rel="stylesheet" href="assets/libraries/css/bootstrap.css">
        <link rel="stylesheet" href="assets/libraries/css/alertify.css">
        <link rel="stylesheet" href="assets/libraries/css/themes/default.css">
        <link rel="stylesheet" href="assets/components/css/estilos.css">

        <script defer src="assets/libraries/js/all.js"></script>
        <script src="assets/libraries/js/jquery-3.4.1.min.js"></script>
        <script src="assets/libraries/js/bootstrap.min.js"></script>
        <script src="assets/libraries/js/alertify.js"></script>
        <script src="assets/components/js/productos.js"></script>

        <!-- FAVICON Y TITULO EN EL NAVEGADOR  -->
        <link rel="shortcut icon" href="assets/images/favicon.svg">
        <title>ccStore | Productos</title>
    </head>
    
    <body>
        <?php
            require_once "assets/components/php/conexion.php";
            $conexion = conexion();

            // INICION INICIADA
            session_start(); 
            if (isset($_SESSION['loggedin'])) {  
                //INICIO SESION 
            }
            else {
                //NO INICIO SESION
                echo 
                '<div class="text-center mt-5">
                    <img src="assets/images/ccStore_Azul.svg" alt="" style="width: 400px; height: auto;">
                    <h1 class="mt-2"><strong>Upps!</strong></h1>
                    <p>Necesitas iniciar sesión para acceder a esta pagina. <a href="index.php">Haga clic aquí para iniciar sesión</a></p>
                </div>';
                exit;
            }
            // SESION FINALIZADA POR INACTIVIDAD
            $now = time();          
                if ($now > $_SESSION['expire']) {
                    session_destroy();
                    echo 
                    '<div class="text-center mt-5">
                        <img src="assets/images/ccStore_Azul.svg" alt="" style="width: 400px; height: auto;">
                        <h1 class="mt-2"><strong>Upps!</strong></h1>
                        <p>Por inactividad y seguridad de los datos tu sesión a finalizado. <a href="index.php">Haga clic aquí para iniciar sesión</a></p>
                    </div>';
                    exit;
            }
        ?>
        <!-- PRODUCTOS -->
        <main>
            <!-- AGREGANDO NAVBAR IZQUIERDA -->
            <div class="container-fluid">
                <div class="row">
                    <div id="navbar">
                        <!-- CONTENIDO NAVBAR -->
                    </div>
                    
                    <!-- CONTENIDO PRODUCTOS -->
                    <main class="main col">
                       <div class="container-fluid">
                           <!-- COMPONENTES AGREGAR Y BUSCAR -->
                            <div class="row mt-4">
                                <div class="col-12 col-lg-7 mb-3">
                                    <button type="button" class="btn btn-primary insertarbtn" data-toggle="modal" data-target="#insertar">Agregar producto  <i class="fas fa-plus"></i></button>
                                </div>

                                <div class="col-12 col-lg-5 mb-3">
                                    <div class="input-group">
                                        <input type="text" name="caja_busqueda" id="caja_busqueda" class="form-control" placeholder="Buscar producto">
                                        <div class="input-group-append">
                                            <button class="btn btn-success"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div id="productos">
                                        <!-- TABLA -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </main>
    </body>
</html>

<!-- CODIGO JAVASCRIPT PARA CONTENIDO DE PHP -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#navbar').load('assets/components/html/navbar.html');
        $('#productos').load('assets/components/php/productos/productos.php');
    });
</script>