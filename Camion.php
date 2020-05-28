<?php
include "src/session_start.php";
include "config/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <title>MyGeoStop/Camion - Francisco Jurado Contreras</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css"> -->
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
    <!--
    <script
            src="https://code.jquery.com/jquery-3.5.0.min.js"
            integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
            crossorigin="anonymous"></script>-->
    <script src="Camion.js"></script>
    <script>
        $(function(){
            $("#site-footer").load("src/foot.html");
            $("#left-panel").load("src/menu.html");

        });
    </script>



</head>
<body>
<!-- Menú-->

<div id="left-panel"></div>


<!-- Menú  -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <?php
    include "head.php";
    ?>


    <div class="content">
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <i class="mr-2 fa fa-align-justify"></i>
                    <strong class="card-title">Camión</strong>

                    <button type="añadir" class='button2' name="añadir" id="Añadir"><a href="Crear_camion.php"
                                                                                       id="Añadir"> Añadir</a></button>
                </div>
                <div class="card-body">
                    <div id="info"></div>
                    <div class="fontawesome-icon-list">
                        <div class="content">
                            <div class="animated fadeIn">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">

                                                <table id="bootstrap-data-table"
                                                       class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Tipo de contenedor que recoge</th>
                                                        <th>Matrícula camión</th>
                                                        <th>Marca</th>
                                                        <th>Modelo</th>
                                                        <th>Latitud</th>
                                                        <th>Longitud</th>
                                                        <th>Editar</th>
                                                        <th>Eliminar</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="Camiones">
                                                </tbody>


                                                </table>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div><!-- .animated -->
                        </div><!-- .content -->
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

<div id="modal1" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edite su camión</h4>
            </div>
            <div class="modal-body">
                <div id="info"></div>
                <form method="post" id="insert_form">

                    <input type="hidden" name="id" id="id"/>
                    <label>Marca del camión</label>
                    <input type="text" name="Marca" id="Marca" class="form-control" />
                    <br/>
                    <label>Modelo del camión</label>
                    <input type="text" name="Modelo" id="Modelo" class="form-control" />
                    <br/>
                    <label>Tipo de Contenedor</label>
                    <select name="Tipo_contenedor_id" id="Tipo_contenedor_id" class="form-control">
                            <option>Seleccione</option>
                            <option value="1">Vídrio</option>
                            <option value="2">Cartón y papel</option>
                            <option value="3">Orgánico</option>
                            <option value="4">Plástico</option>
                            <option value="5">Pilas</option>
                            <option value="6">Ropa</option>

                    </select>
                    <br/>
                    <label>Matrícula del camión</label>
                    <input type="text" name="Matricula" id="Matricula" class="form-control"/>
                    <br/>
                    <label>Latitud</label>
                    <input type="text" name="Latitud" id="Latitud" class="form-control" />
                    <br/>
                    <label>Longitud</label>
                    <input type="text" name="Longitud" id="Longitud" class="form-control" />
                    <br/>
                    <input type="hidden" name="employee_id" id="employee_id" />
                    <input type="submit" name="insert" id="insert" value="Insertar" class="btn btn-success" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>