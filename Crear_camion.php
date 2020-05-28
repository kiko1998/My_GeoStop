<?php
include "config/server.php";
?>

<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]> s
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <title>MyGeoStop/Crear camion - Francisco Jurado Contreras</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/tipo_cont.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script>
        $(function(){
            $("#site-footer").load("src/foot.html");
            $("#left-panel").load("src/menu.html");
        });
    </script>
</head>
<body>
<!-- Menú-->

<div id="left-panel" class="left-panel"></div>


<!-- Menú  -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <?php include("head.php")
    ?>
    <!-- Header-->


    <div class="content">
        <div class="animated fadeIn">


            <div class="card">
                <div class="card-header">
                    <i class="mr-2 fa fa-align-justify"></i>
                    <strong class="card-title">Añadir un nuevo camión</strong>


                </div>


                <div class="card-body">
                    <div id="info"></div>
                   <?php if(isset($_SESSION['success'])){
                       echo $_SESSION['success'];
                       unset ($_SESSION['success']);
                       
                   } ?>
                    <div class="fontawesome-icon-list">

                        <form id="Camion-form">


                            <label class="camion">Marca:
                                <input id="Marca" type="text" name="Marca" required />
                            </label>

                            <label class="camion">Matricula_camion
                                <input id="Matricula_camion" type="text" name="Matricula_camion" required/>
                            </label>

                            <br>

                            <label class="camion">Modelo:
                                <input id="Modelo" type="text" name="Modelo" required/>
                            </label>
                            
                            <label id="Tipo_contenedor_id"  class="camion">Tipo contenedor:</label>
                            <label for="Tipo_contenedor"></label>
                            <select id="Tipos_contenedor" name="Tipo_contenedor">
                            <option value="1">Vídrio</option>
                            <option value="2">Cartón y papel</option>
                            <option value="3">Orgánico</option>
                            <option value="4">Plástico</option>
                            <option value="5">Pilas</option>
                            <option value="6">Ropa</option>
                            </select>

                            <br>
                            <label class="camion">Latitud:
                                <input id="Latitud" type="Number"  name="Latitud" step="any"required/>
                            </label>
                            <label class="camion">Longitud:
                                <input id="Longitud" type="Number"  name="Longitud" step="any" required/>
                            </label>
                            
                            <br>
                            <a href="Camion.php" class="btn btn-success btn-flat m-b-30 m-t-30" id="Guardar">Atrás</a>
                            
                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="Guardar"
                                    id="Guardar">Guardar
                            </button>
                        </form>


                    </div>

                </div>
            </div>


        </div><!-- .animated -->
    </div><!-- .content -->
    <div class="clearfix"></div>

    <div id="site-footer">

    </div>


</div><!-- /#right-panel -->


<!-- Script reducir el tamaño del menú de la izquierda -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="../assets/js/main.js"></script>


</body>
</html>


<script src="Camion.js"></script>
