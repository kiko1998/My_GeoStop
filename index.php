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
    
<?php
        include "src/Estilos.html";
?>
    


</head>

<body>
<!-- Left Panel -->
<?php
    include("src/menu.php")
?>

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
                                                <div class="mygeostop" id="empresa">
                                                    <button type="añadir" class='button2' name="añadir" id="Añadir"><a href="Crear_empresa.php" id="Añadir">Añadir</a></button>
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



                                                <div class="mygeostop" id="camion">
                                                      <div class="card-header">
                                                          <button type="añadir" class='button2' name="añadir" id="Añadir_c"><a href="#"
                                                                                                                             id="Añadir"> Añadir</a></button>

                                                          <h1 class="cabecera"><strong class="card-title">Camiones</strong></h1>

                                                  </div>



                                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
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


                                                <div class="mygeostop"  id="ruta">

                                                    <button type="añadir" class='button2' name="añadir" id="Añadir"><a href="Crear_ruta.php"
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

                                                <div class="mygeostop" id="crear_camion">

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
                                                            <input id="Latitud" type="Number"  name="Latitud" step="any" required/>
                                                        </label>
                                                        <label class="camion">Longitud:
                                                            <input id="Longitud" type="Number"  name="Longitud" step="any" required/>
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

<?php
    include('src/foot.html');
?>
</div>

<!-- Scripts -->
<?php
    include "src/Reducir_menu.html";
?>


<!--Local Stuff-->

</body>
</html>
<script src="Camion.js"></script>
<script src="Empresa.js"></script>
<script src="Ruta.js"></script>
<script src="Servicio.js"></script>

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

                    <input type="text" name="id" id="id"/>
                    <label>Marca del camión</label>
                    <input type="text" name="Marca" id="Marca_camion" class="form-control" />
                    <br/>
                    <label>Modelo del camión</label>
                    <input type="text" name="Modelo" id="Modelo_camion" class="form-control" />
                    <br/>
                    <label>Tipo de Contenedor</label>
                    <select name="Tipo_contenedor_id" id="Tipo_contenedor_id" class="form-control">
                        <option value="0" >Seleccione</option>
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
                    <input type="text" name="Latitud" id="Latitud_camion" class="form-control" />
                    <br/>
                    <label>Longitud</label>
                    <input type="text" name="Longitud" id="Longitud_camion" class="form-control" />
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



<!--
<div id="modal2" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edite su camión</h4>
            </div>
            <div class="modal-body">
                <div id="info1"></div>
                <form method="post" id="insert_camion">

                    <input type="text" name="id" id="id"/>
                    <label>Marca del camión</label>
                    <input type="text" name="Marca" id="Marca_camion" class="form-control" />
                    <br/>
                    <label>Modelo del camión</label>
                    <input type="text" name="Modelo" id="Modelo_camion" class="form-control" />
                    <br/>
                    <label>Tipo de Contenedor</label>
                    <select name="Tipo_contenedor_id" id="Tipo_contenedor_id" class="form-control">
                        <option value="0" >Seleccione</option>
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
                    <input type="text" name="Latitud" id="Latitud_camion" class="form-control" />
                    <br/>
                    <label>Longitud</label>
                    <input type="text" name="Longitud" id="Longitud_camion" class="form-control" />
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