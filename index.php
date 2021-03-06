<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Edwin Nava - Nathalia Calzadilla">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/libraries/css/all.css">
        <link rel="stylesheet" href="assets/libraries/css/bootstrap.css">
        <link rel="stylesheet" href="assets/libraries/css/alertify.css">
        <link rel="stylesheet" href="assets/libraries/css/themes/default.css">
        <link rel="stylesheet" href="assets/components/css/index.css">
        <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <script defer src="assets/libraries/js/all.js"></script>
        <script src="assets/libraries/js/jquery-3.4.1.min.js"></script>
        <script src="assets/libraries/js/bootstrap.min.js"></script>
        <script src="assets/libraries/js/alertify.js"></script>

        <!-- FAVICON Y TITULO EN EL NAVEGADOR  -->
        <link rel="shortcut icon" href="assets/images/favicon.svg">
        <title>ccStore | Inicio</title>
    </head>
     
    <body>
        <?php
            require_once "assets/components/php/conexion.php";
            $conexion = conexion();

            // INICION INICIADA
            session_start(); 
            if (isset($_SESSION['loggedin'])) {  
                header("Location: panel.php");
            }
        ?>
        <!-- PRINCIPAL -->
        <main class="main col">
            <div class="container-fluid">
                 <br>
                 <div class="row">
                     <div class="col-12">
                         <div id="index">
                             <!-- CONTENIDO -->
                         </div>
                     </div>
                 </div>
                 
             </div>
         </main>
    </body>
</html>

<!-- CODIGO JAVASCRIPT PARA CONTENIDO DE PHP -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#index').load('assets/components/php/index/index.php');
    });
</script>