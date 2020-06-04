<?php
include('config/conexion.php');
$sql ="SELECT * from Servicio";
$result = mysqli_query($db, $sql);

$json = array();
while ($row = mysqli_fetch_array($result)) {
    $json[] = array(
        'Nombre_servicio' => $row['Nombre_servicio'],
        'id_servicio' => $row['id_servicio']
        );

}
$jsonstring = json_encode($json);
echo $jsonstring;
?>