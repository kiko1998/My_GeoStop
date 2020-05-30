<?php
include "src/session_start.php";
include "config/conexion.php";


//recibir valores del anterior formulario
if (isset($_POST["id_empresa"])) {
    $id_empresa = $_POST["id_empresa"];

    $Nombre = $_POST["Nombre_empresa"];

    $Latitud = $_POST["Latitud_empresa"];

    $Longitud = $_POST["Longitud_empresa"];

    $Telefono = $_POST["Telefono_empresa"];

    $Id_tipo = $_POST["Tipo_contenedor_empresa"];

    $id_localidad = $_POST["Localidad_empresa"];


    $query = "UPDATE Empresa SET Nombre='$Nombre',Latitud='$Latitud', Longitud = '$Longitud', Id_tipo='$Id_tipo', id_localidad='$id_localidad'  WHERE id_empresa='$id_empresa' ";
    $result = mysqli_query($db, $query);

    if ($result == 1) {
        $json = '<h4 style ="color:#88ff00"; font-size:12px>Camión actualizado</h4>';
        $jsonstring = json_encode($json);
        echo $jsonstring;
        exit();
    } else {
        $json = '<h4 style ="color:#ff0000"; font-size:12px>No se ha actualizado el camión</h4>';
        $jsonstring = json_encode($json);
        echo $jsonstring;
        exit();
    }


}
else{
    $json = '<h4 style ="color:#ff0000"; font-size:12px>No se ha encontrado el id</h4>';
    $jsonstring = json_encode($json);
    echo $jsonstring;
    exit();
}
?>
                                                                         
                            