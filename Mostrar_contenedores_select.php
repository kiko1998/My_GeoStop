<?php
include('config/conexion.php');
$sql ="SELECT * from Contenedor";
$result = mysqli_query($db, $sql);

$json = array();
while ($row = mysqli_fetch_array($result)) {
    $json[] = array(
        'Nombre' => $row['Nombre'],
        'Id_contenedor' => $row['Id_contenedor']
        );

}
$jsonstring = json_encode($json);
echo $jsonstring;
?>