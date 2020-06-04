<?php
include "config/conexion.php";

if (isset($_POST['Nombre_ruta'])) {
    $Nombre_ruta = $_POST['Nombre_ruta'];
}
if (isset($_POST['Tipo_id_cont'])) {
    $Tipo_id_cont = $_POST['Tipo_id_cont'];
}
$query = "INSERT INTO Ruta (Nombre_ruta,Tipo_id_cont)
                            VALUES ('$Nombre_ruta','$Tipo_id_cont')";
$result = utf8_encode(mysqli_query($db, $query));
if ($result == false) {
    $json = '<h4 style ="color:red">La ruta no se ha creado correctamente</h4>';
    $jsonstring = json_encode($json);
    echo $jsonstring;
    exit();
} else {
    $json = '<h4 style ="color:green">La ruta se ha creado correctamente</h4>';
    $jsonstring = json_encode($json);
    echo $jsonstring;
    exit();
}

