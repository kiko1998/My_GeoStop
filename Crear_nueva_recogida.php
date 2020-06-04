<?php
include "config/conexion.php";

if (isset($_POST['id_servicio'])) {
    $id_servicio = $_POST['id_servicio'];
}
if (isset($_POST['Id_contenedor'])) {
    $Id_contenedor = $_POST['Id_contenedor'];
}
if (isset($_POST['Fecha_recogida'])) {
    $Fecha_recogida = $_POST['Fecha_recogida'];
}
if (isset($_POST['Horario_recogida'])){
    $Horario_recogida = $_POST['Horario_recogida'];
}


$query = "INSERT INTO Recogida (id_servicio,Id_contenedor,Fecha_recogida,Horario_recogida) VALUES ('$id_servicio','$Id_contenedor','$Fecha_recogida','$Horario_recogida')";
$result = utf8_encode(mysqli_query($db, $query));
if ($result == false) {
    $json = '<h4 style ="color:red">La recogida no se ha creado correctamente</h4>';
    $jsonstring = json_encode($json);
    echo $jsonstring;
    exit();
} else {
    $json = '<h4 style ="color:green">La recogida se ha creado correctamente</h4>';
    $jsonstring = json_encode($json);
    echo $jsonstring;
    exit();
}

?>