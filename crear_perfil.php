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
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <title>MyGeoStop/Perfil - Francisco Jurado Contreras</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    include "src/Estilos.html";
    ?>

</head>
<body>
<!-- Menú-->

<?php include "src/menu.php";
?>


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
                    <strong class="card-title">Mi perfil</strong>

                </div>

                    <div class="fontawesome-icon-list">
                        <div class="content">
                            <div class="animated fadeIn">
                                <div class="row">

                                    <div class="col-md-12">

                                                <div class="mx-auto d-block">


                                                </div>
                                        <p>¡Bienvenido <strong><?php echo $username; ?></strong> ! </p>
                                        <br>
                                        <p>
                                            Este es tu panel de creación de perfiles de administrador, desde aquí
                                            podrás crear un nuevo usuario administrador si es lo que deseas puedes
                                            eliminarlo más abajo.
                                        </p>
                                        <div id="info"></div>
                                            <form  id="Perfil-form">


                                                <label class="formulario">Nombre y apellido: <input id="Nombre"
                                                                                                    type="text"
                                                                                                    class="formulario-perfil"
                                                                                                    placeholder="Username"
                                                                                                    name="Nombre" required>
                                                                                                   </label>


                                                <label class="formulario">Username: <input id="Username"
                                                                                           type="text"
                                                                                           class="formulario-perfil"
                                                                                           placeholder="Username"
                                                                                           name="Username" required></label>

                                                <label class="formulario">E-mail:         <input id="email"
                                                                                                 type="text"
                                                                                                 class="formulario-perfil"
                                                                                                 placeholder="E-mail"
                                                                                                 name="E-mail" required></label>
                                                <label class="formulario">Contraseña: <input id="Password"
                                                                                             type="text"
                                                                                             class="formulario-perfil"
                                                                                             placeholder="Password"
                                                                                             name="Password1" required></label>

                                                <label class="formulario">Repetir contraseña: <input id="Password_repeat"
                                                                                                     type="text"
                                                                                                     class="formulario-perfil"
                                                                                                     placeholder="Password"
                                                                                                     name="Password2" required></label>
                                                <br>
                                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30"
                                                        name="Guardar">Crear Perfil
                                                </button>

                                            </form>
                                    </div>
                                        </div>
                                    </div>


                                </div>
                            </div><!-- .animated -->
                        </div><!-- .content -->
                    </div>

            </div>


    <div class="clearfix"></div>

    <?php
    include "src/foot.html";
    ?>


</div><!-- /#right-panel -->


<!-- Script reducir el tamaño del menú de la izquierda -->
<?php
include "src/Reducir_menu.html";
?>

</body>
</html>
<script src="Crear_usuario.js"></script>
