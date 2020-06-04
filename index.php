<?php
    include "src/session_start.php";
    include "config/conexion.php";
?>

<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MyGeoStop/Home - Francisco Jurado Contreras</title>
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


    <script>
        $(function(){
            $("#site-footer").load("src/foot.html");

        });
    </script>

</head>

<body>
<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#" id="a_index"><i class="menu-icon fa fa-laptop"></i>Inicio </a>
                </li>


                <li class="menu-title">Funcionalidades</li><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">


                    <ul class="sub-menu children dropdown-menu">
                    </ul>

                </li>

                <li>
                    <a href="#" id="a_empresa" class="dropdown-toggle"><i class="menu-icon fa fa-suitcase"></i>Empresa</a>
                </li>
                <li>
                    <a href="#" id="a_camion" class="dropdown-toggle"><i class="menu-icon fa fa-truck"></i>Camión</a>
                </li>
                <li>
                    <a href="#" id="a_ruta" class="dropdown-toggle"><i class="menu-icon fa fa-cogs"></i>Ruta</a>
                </li>
                <li>
                    <a href="#" id="a_servicio" class="dropdown-toggle"><i class="menu-icon fa fa-calendar"></i>Servicio</a>
                </li>
                <li>
                    <a href="#" id="a_recogida" class="dropdown-toggle"><i class="menu-icon fa fa-cogs"></i>Recogida</a>
                </li>
                <li>
                    <a href="../Contenedores.php" class="dropdown-toggle"><i class="menu-icon fa fa-trash"></i>Contenedores</a>
                </li>


                <li class="menu-item-has-children dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Configuración</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-trash"></i><a href="../Tipos_contenedores.php"
                                                                    class="dropdown-toggle">Tipos contenedores </a></li>
                        <li><i class="menu-icon fa fa-pencil"></i><a href="../Color.php">Color </a></li>
                        <li><i class="menu-icon fa fa-cogs"></i><a href="../Estado.php">Estado </a></li>
                        <li><i class="menu-icon fa fa-building"></i><a href="../Localidad.php" class="dropdown-toggle">Localidad </a>
                        </li>
                        <li><i class="menu-icon fa fa-cogs"></i><a href="../Procesamiento.php">Procesamiento</a></li>
                        <li><i class="fa fa-book"></i><a href="../frequent-ask-question.php"> Preguntas frecuentes </a></li>
                        <li><i class="fa fa-book"></i><a href="../Doubts.php"> Dudas </a></li>
                        <li><i class="menu-icon fa fa-book"></i> <a href="../How_does_it_works.php" class="dropdown-toggle">¿Cómo
                                funciona?</a>
                        </li>
                    </ul>

                </li>
                <li>
                    <a href="../Mapa_contenedores.php" class="dropdown-toggle"><i class="menu-icon fa fa-map-marker"></i>Mapa_contenedores</a>
                </li>

                <li>
                    <a href="../Mapa_rutas.php" class="dropdown-toggle"><i
                                class="menu-icon fa fa-map-marker"></i>Mapa_rutas</a>
                </li>


            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

</aside>



<div id="right-panel" class="right-panel">
    <?php include("head.php")
    ?>

    <div class="content">
        <div class="animated fadeIn">


            <div class="card">
                
                <div class="card-body">

                    <div class="fontawesome-icon-list">
                        <div class="content">
                            <div class="animated fadeIn">
                                <div class="row">

                                    <div class="col-md-12">
                                            <div id="Mostrar">
                                            <div id="info"></div>
                                                <div class="mygeostop"  id="index">
                                                    <p>MyGeoStop es un software el cual trata problemas relacionados con los contenedores
                                                        y el reciclaje.
                                                    </p>
                                                </div>


                                                <!--Mostrar empresa-->
                                                <div class="mygeostop" id="empresa">
                                                    <button type="añadir" class='button2' name="añadir" id="Añadir_e"><a href="#" id="Añadir">Añadir</a></button>
                                                    <table id="bootstrap-data-table"
                                                           class="table table-striped table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Localidad</th>
                                                            <th>Tipo de procesamiento</th>
                                                            <th>Nombre</th>
                                                            <th>Teléfono</th>
                                                            <th>Latitud</th>
                                                            <th>Longitud</th>
                                                            <th>Editar</th>
                                                            <th>Eliminar</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody id="Empresas">
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <!--Mostrar camion-->
                                                <div class="mygeostop" id="camion">
                                                      <div class="card-header">
                                                          <button type="añadir" class='button2' name="añadir" id="Añadir_c"><a href="#"
                                                                                                                             id="Añadir"> Añadir</a></button>

                                                          <h1 class="cabecera"><strong class="card-title">Camiones</strong></h1>

                                                  </div>



                                                    <table id="tabla_camion bootstrap-data-table" class="table table-striped table-bordered">
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
                                                        <tbody id="añadir"></tbody>
                                                        <div id="result"></div>


                                                    </table>
                                                </div>

                                               <!--Mostrar ruta -->
                                                <div class="mygeostop"  id="ruta">

                                                    <button type="añadir" class='button2' name="añadir" id="Añadir_r"><a href="#"
                                                                                                                       id="Añadir"> Añadir</a></button>


                                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Nombre de la ruta</th>
                                                            <th>Tipo de contenedor que recoge</th>
                                                            <th>Editar</th>
                                                            <th>Eliminar</th>
                                                            <th>Contenedores</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody id="Rutas">
                                                        </tbody>


                                                    </table>

                                                </div>


                                                <!--Mostrar servicio -->
                                                    <div class="mygeostop" id="servicio">

                                                        <button type="añadir" class='button2' name="añadir" id="Añadir"><a href="Crear_servicio.php"
                                                                                                                           id="Añadir"> Añadir</a></button>


                                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">

                                                        <thead>
                                                    <tr>
                                                        <th>Nombre Servicio</th>
                                                        <th>Nombre y apellido</th>
                                                        <th>Matrícula camión</th>
                                                        <th>Ruta</th>
                                                        <th>Fecha inicio</th>
                                                        <th>Fecha fin</th>
                                                        <th>Editar</th>
                                                        <th>Eliminar</th>
                                                    </tr>
                                                    </thead>
                                                            <tbody id="Servicios">
                                                            </tbody>
                                                        </table>
                                                </div>


                                                <!--Mostrar recogida -->
                                                <div class="mygeostop" id="recogida">

                                                    <button type="añadir" class='button2' name="añadir" id="Añadir_re"><a href="#"
                                                                                                                       id="Añadir"> Añadir</a></button>


                                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">

                                                        <thead>
                                                        <tr>
                                                            <th>Servicio</th>
                                                            <th>Nombre contenedor</th>
                                                            <th>Fecha de recogida</th>
                                                            <th>Horario de recogida</th>
                                                            <th>Editar</th>
                                                            <th>Eliminar</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody id="Recogidas">
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <!-- Crear camion -->

                                                <div class="mygeostop" id="crear_camion">

                                                    <form id="Camion-form" method="post">


                                                        <label class="label">Marca:
                                                            <input id="Marca" type="text" name="Marca" required />
                                                        </label>

                                                        <label class="label">Matricula camion:
                                                            <input id="Matricula_camion" type="text" name="Matricula_camion" required/>
                                                        </label>

                                                        <br>

                                                        <label class="label">Modelo:
                                                            <input id="Modelo" type="text" name="Modelo" required/>
                                                        </label>

                                                        <label class="label">Tipo contenedor:</label>
                                                        <select id="Tipo_contenedor" name="Tipo_contenedor">

                                                        </select>

                                                        <br>
                                                        <label class="label">Latitud:
                                                            <input id="Latitud" type="text"  name="Latitud" required/>
                                                        </label>
                                                        <label class="label">Longitud:
                                                            <input id="Longitud" type="text"  name="Longitud" required/>
                                                        </label>

                                                        <br>
                                                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="Guardar"
                                                                id="Guardar">Guardar
                                                        </button>
                                                    </form>

                                                </div>

                                                <!--Crear empresa-->

                                                <div class="mygeostop" id="crear_empresa">

                                                    <form id="Empresa-form" method="post">


                                                        <label class="label">Telefono:
                                                            <input id="Empresa_telefono" type="text" name="Empresa_telefono" required />
                                                        </label>

                                                        <label class="label">Nombre:
                                                            <input id="Empresa_nombre" type="text" name="Empresa_nombre" required/>
                                                        </label>
                                                        <br>
                                                        <label for="Empresa_localidad" class="label">Localidad</label>
                                                        <select id="Empresa_localidad" name="Empresa_localidad">
                                                            <option value="5">Jaén</option>
                                                            <option value="6">Granada</option>
                                                            <option value="7">Córdoba</option>
                                                            <option value="9">Cádiz</option>
                                                        </select>

                                                        <label for="Empresa_tipo_contenedor"  class="label">Recicla:</label>
                                                        <select id="Empresa_tipo_contenedor" name="Empresa_tipo_contenedor">
                                                            <option value="1">Vídrio</option>
                                                            <option value="2">Cartón y papel</option>
                                                            <option value="3">Orgánico</option>
                                                            <option value="4">Plástico</option>
                                                            <option value="5">Pilas</option>
                                                            <option value="6">Ropa</option>
                                                        </select>

                                                        <br>
                                                        <label class="label">Latitud:
                                                            <input id="Empresa_latitud" type="text" name="Empresa_latitud" required/>
                                                        </label>
                                                        <label class="label">Longitud:
                                                            <input id="Empresa_longitud" type="text"  name="Empresa_longitud" required/>
                                                        </label>

                                                        <br>
                                                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="Guardar"
                                                                id="Guardar">Guardar
                                                        </button>
                                                    </form>

                                                </div>

                                                <!--Crear ruta-->

                                                <div class="mygeostop" id="crear_ruta">

                                                    <form id="Ruta-form" method="post">
                                                        <label class="label">Nombre de la ruta:
                                                            <input id="Ruta_nombre" type="text" name="Ruta_nombre" required />
                                                        </label>



                                                        <label for="Ruta_tipo_contenedor"  class="label">Recoge:</label>
                                                        <select id="Ruta_tipo_contenedor" name="Ruta_tipo_contenedor">
                                                            <option value="1">Vídrio</option>
                                                            <option value="2">Cartón y papel</option>
                                                            <option value="3">Orgánico</option>
                                                            <option value="4">Plástico</option>
                                                            <option value="5">Pilas</option>
                                                            <option value="6">Ropa</option>
                                                        </select>

                                                        <br>
                                                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="Guardar"
                                                                id="Guardar">Guardar
                                                        </button>
                                                    </form>

                                                </div>


                                                <!--Ruta contenedor-->

                                                <div class="mygeostop" id="RutaContenedor">

                                                    <form id="Ruta_contenedor-form" method="post">
                                                        <label class="label">Nombre de la ruta:
                                                            <input id="Ruta_nombre" type="text" name="Ruta_nombre" required />
                                                        </label>



                                                        <label for="Ruta_tipo_contenedor"  class="label">Recoge:</label>
                                                        <select id="Ruta_tipo_contenedor" name="Ruta_tipo_contenedor">
                                                            <option value="1">Vídrio</option>
                                                            <option value="2">Cartón y papel</option>
                                                            <option value="3">Orgánico</option>
                                                            <option value="4">Plástico</option>
                                                            <option value="5">Pilas</option>
                                                            <option value="6">Ropa</option>
                                                        </select>

                                                        <br>
                                                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="Guardar"
                                                                id="Guardar">Guardar
                                                        </button>
                                                    </form>

                                                </div>

                                               <!--Crear Recogida -->
                                                <div class="mygeostop" id="crear_recogida">
                                                <div class="content">
                                                    <div class="animated fadeIn">


                                                        <div class="card">
                                                    <div class="card-header">
                                                        <i class="mr-2 fa fa-align-justify"></i>
                                                        <strong class="card-title">Añadir recogida</strong>


                                                    </div>
                                                    <div class="card-body">
                                                    <div class="fontawesome-icon-list">
                                                    <form id="Recogida-form" method="post">

                                                        <label id="Contenedor_id" class="label">Contenedor:</label>
                                                        <select id="Id_contenedor" name="Id_contenedor">
                                                            <option selected>Selecciona</option>
                                                        </select>
                                                        <label id="Servicio_label"  class="label">Servicio:</label>
                                                         <select id="Select_servicio" name="Select_servicio">
                                                            <option value="" selected>Selecciona</option>
                                                         </select>
                                                        <br>
                                                        <label class="label">
                                                            Fecha recogida:
                                                            <input type="date" id="Recogida_fecha" required name="Recogida_fecha"/>
                                                        </label>

                                                        <label class="label">
                                                            Horario recogida:
                                                            <input type="time" id="Recogida_horario" name="Horario_recogida">
                                                        </label>

                                                        <br>
                                                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="Guardar"
                                                                id="Guardar">Guardar
                                                        </button>
                                                    </form>

                                                </div>
                                                </div>
                                                </div>

                                                </div>
                                                </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-md-4 -->
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>

            </div>
        </div>
    </div>
<!-- /#add-category -->
<!-- .animated -->
<!-- /.content -->
<div class="clearfix"></div>
<!-- Footer -->

<div id="site-footer"></div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="../assets/js/main.js"></script>



<!--Local Stuff-->

</body>
</html>
<script src="Camion.js"></script>
<script src="Empresa.js"></script>
<script src="Ruta.js"></script>
<script src="Servicio.js"></script>
<script src="Recogida.js"></script>
<script src="Mostrar_contenedores.js"></script>
<script src="Mostrar_servicio.js"></script>
<script src="Mostrar_tipo_contenedor.js"></script>


<!--Modal Camión -->
<div id="modal1" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edite su camión</h4>
            </div>
            <div class="modal-body">
                <div id="info1"></div>
                <form method="post" id="insert_camion">

                    <input type="hidden" name="id" id="id"/>
                    <label>Marca del camión</label>
                    <input type="text" name="Marca_camion" id="Marca_camion" class="form-control" />
                    <br/>
                    <label>Modelo del camión</label>
                    <input type="text" name="Modelo_camion" id="Modelo_camion" class="form-control" />
                    <br/>
                    <label>Tipo de Contenedor</label>

                    <select name="Tipo_contenedor_id" id="Tipo_contenedor_id" class="form-control">
                        <option>Seleccione</option>
                        <option>Vídrio</option>
                        <option>Cartón y papel</option>
                        <option>Orgánico</option>
                        <option>Plástico</option>
                        <option>Pilas</option>
                        <option>Ropa</option>

                    </select>
                    <br/>

                    <label>Matrícula del camión</label>
                    <input type="text" name="Matricula" id="Matricula" class="form-control"/>
                    <br/>
                    <label>Latitud</label>
                    <input type="text" name="Latitud_camion" id="Latitud_camion" class="form-control" />
                    <br/>
                    <label>Longitud</label>
                    <input type="text" name="Longitud_camion" id="Longitud_camion" class="form-control" />
                    <br/>
                    <input type="submit" name="insert" id="insert" value="Insertar" class="btn btn-success" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--Modal Empresa-->
<div id="modal_empresa" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edite su empresa</h4>
            </div>
            <div class="modal-body">
                <div id="info2"></div>
                <form method="post" id="insert_empresa">

                    <input type="hidden" name="id_empresa" id="id_empresa"/>
                    <label>Telefono de la empresa</label>
                    <input type="text" name="Telefono_empresa" id="Telefono_empresa" class="form-control" />
                    <br/>
                    <label>Nombre de la empresa</label>
                    <input type="text" name="Nombre_empresa" id="Nombre_empresa" class="form-control" />
                    <br/>
                    <label>Tipo de Contenedor</label>

                    <select name="Tipo_contenedor_empresa" id="Tipo_contenedor_empresa" class="form-control">
                        <option value="0" selected>Seleccione</option>
                        <option value="1">Vídrio</option>
                        <option value="2">Cartón y papel</option>
                        <option value="3">Orgánico</option>
                        <option value="4">Plástico</option>
                        <option value="5">Pilas</option>
                        <option value="6">Ropa</option>

                    </select>
                    <br/>
                    <label>Localidad</label>
                    <select name="Localidad_empresa" id="Localidad_empresa" class="form-control">
                        <option value="0" >Seleccione</option>
                        <option value="5">Jaén</option>
                        <option value="6">Granada</option>
                        <option value="9">Cádiz</option>

                    </select>
                    <br/>
                    <label>Latitud</label>
                    <input type="text" name="Latitud_empresa" id="Latitud_empresa" class="form-control" />
                    <br/>
                    <label>Longitud</label>
                    <input type="text" name="Longitud_empresa" id="Longitud_empresa" class="form-control" />
                    <br/>
                    <input type="submit" name="insert" id="insert" value="Insertar" class="btn btn-success" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--Modal Ruta -->
<div id="modal_ruta" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edite su camión</h4>
            </div>
            <div class="modal-body">
                <div id="info3"></div>
                <form method="post" id="insert_ruta">

                    <input type="hidden" name="Id_ruta" id="Id_ruta"/>
                    <label>Nombre de la ruta</label>
                    <input type="text" name="Nombre_ruta" id="Nombre_ruta" class="form-control" />
                    <br/>
                    <label>Tipo de Contenedor</label>
                    <select name="Tipo_contenedor_ruta" id="Tipo_contenedor_ruta" class="form-control">
                        <option value="0" >Seleccione</option>
                        <option value="1">Vídrio</option>
                        <option value="2">Cartón y papel</option>
                        <option value="3">Orgánico</option>
                        <option value="4">Plástico</option>
                        <option value="5">Pilas</option>
                        <option value="6">Ropa</option>
                    </select>
                    <br/>
                    <label >Elegir Documento</label>
                    <input type='file' name='archivo' id="file" />
                    <br/>

                    <input type="submit" name="insert" id="insert" value="Insertar" class="btn btn-success" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--Modal ruta contenedor-->
<!--
<div id="modal_ruta_contenedor" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edite su camión</h4>
            </div>
            <div class="modal-body">
                <div id="info3"></div>
                <form method="post" id="insert_ruta">

                    <input type="hidden" name="id_ruta" id="id_ruta"/>
                    <label>Nombre de la ruta</label>
                    <input type="text" name="Nombre_ruta" id="Nombre_ruta" class="form-control" />
                    <br/>
                    <label>Tipo de Contenedor</label>
                    <select name="Tipo_contenedor_ruta" id="Tipo_contenedor_ruta" class="form-control">
                        <option value="0" >Seleccione</option>
                        <option value="1">Vídrio</option>
                        <option value="2">Cartón y papel</option>
                        <option value="3">Orgánico</option>
                        <option value="4">Plástico</option>
                        <option value="5">Pilas</option>
                        <option value="6">Ropa</option>
                    </select>
                    <br/>
                    <input type="submit" name="insert" id="insert" value="Insertar" class="btn btn-success" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
-->


<!-- Modal empresa-->
<div id="modal_empresa" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edite su empresa</h4>
            </div>
            <div class="modal-body">
                <div id="info2"></div>
                <form method="post" id="insert_empresa">

                    <input type="hidden" name="id_empresa" id="id_empresa"/>
                    <label>Telefono de la empresa</label>
                    <input type="text" name="Telefono_empresa" id="Telefono_empresa" class="form-control" />
                    <br/>
                    <label>Nombre de la empresa</label>
                    <input type="text" name="Nombre_empresa" id="Nombre_empresa" class="form-control" />
                    <br/>
                    <label>Tipo de Contenedor</label>

                    <select name="Tipo_contenedor_empresa" id="Tipo_contenedor_empresa" class="form-control">
                        <option value="0" selected>Seleccione</option>
                        <option value="1">Vídrio</option>
                        <option value="2">Cartón y papel</option>
                        <option value="3">Orgánico</option>
                        <option value="4">Plástico</option>
                        <option value="5">Pilas</option>
                        <option value="6">Ropa</option>

                    </select>
                    <br/>
                    <label>Localidad</label>
                    <select name="Localidad_empresa" id="Localidad_empresa" class="form-control">
                        <option value="0" >Seleccione</option>
                        <option value="5">Jaén</option>
                        <option value="6">Granada</option>
                        <option value="9">Cádiz</option>

                    </select>
                    <br/>
                    <label>Latitud</label>
                    <input type="text" name="Latitud_empresa" id="Latitud_empresa" class="form-control" />
                    <br/>
                    <label>Longitud</label>
                    <input type="text" name="Longitud_empresa" id="Longitud_empresa" class="form-control" />
                    <br/>
                    <input type="submit" name="insert" id="insert" value="Insertar" class="btn btn-success" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal recogida -->

<div id="modal_recogida" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edite la recogida</h4>
            </div>
            <div class="modal-body">
                <div id="info5"></div>
                <form method="post" id="insert_recogida">

                    <input type="hidden" name="Id_recogida" id="Id_recogida"/>
                    <label>Servicio de la ruta</label>
                    <input type="text" name="id_servicio_recogida" id="id_servicio_recogida" class="form-control" />
                    <br/>
                    <label>Contenedor de la ruta</label>
                    <input type="text" name="Tipo_contenedor_ruta" id="Tipo_contenedor_ruta" class="form-control" />
                    <br/>
                    <label>Tipo de Contenedor</label>

                    <select name="Tipo_contenedor_empresa" id="Tipo_contenedor_empresa" class="form-control">
                        <option value="0" selected>Seleccione</option>
                        <option value="1">Vídrio</option>
                        <option value="2">Cartón y papel</option>
                        <option value="3">Orgánico</option>
                        <option value="4">Plástico</option>
                        <option value="5">Pilas</option>
                        <option value="6">Ropa</option>

                    </select>
                    <br/>
                    <label>Localidad</label>
                    <select name="Localidad_empresa" id="Localidad_empresa" class="form-control">
                        <option value="0" >Seleccione</option>
                        <option value="5">Jaén</option>
                        <option value="6">Granada</option>
                        <option value="9">Cádiz</option>

                    </select>
                    <br/>
                    <label>Latitud</label>
                    <input type="text" name="Latitud_empresa" id="Latitud_empresa" class="form-control" />
                    <br/>
                    <label>Longitud</label>
                    <input type="text" name="Longitud_empresa" id="Longitud_empresa" class="form-control" />
                    <br/>
                    <input type="submit" name="insert" id="insert" value="Insertar" class="btn btn-success" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
