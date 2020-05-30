<?php
include "config/conexion.php";

if (isset($_POST['Localidad'])) {
    $Localidad = $_POST['Localidad'];
}
if (isset($_POST['Tipo_contenedor'])) {
    $Tipo_contenedor = $_POST['Tipo_contenedor'];
}
if (isset($_POST['Nombre'])) {
    $Nombre = $_POST['Nombre'];
}
if (isset($_POST['Telefono'])){
    $Telefono = $_POST['Telefono'];
}
if (isset($_POST['Latitud'])) {
    $Latitud = $_POST['Latitud'];
}
if (isset($_POST['Longitud'])) {
    $Longitud = $_POST['Longitud'];

}
$query = "INSERT INTO Empresa (id_localidad,Id_tipo,Nombre,Telefono,Latitud,Longitud)
                            VALUES ('$Localidad','$Tipo_contenedor','$Nombre','$Telefono','$Latitud','$Longitud')";
$result = utf8_encode(mysqli_query($db, $query));
if ($result == false) {
    $json = '<h4 style ="color:red">La empresa no se ha creado correctamente</h4>';
    $jsonstring = json_encode($json);
    echo $jsonstring;
    exit();
} else {
    $json = '<h4 style ="color:green">La empresa se ha creado correctamente</h4>';
    $jsonstring = json_encode($json);
    echo $jsonstring;
    exit();
}

