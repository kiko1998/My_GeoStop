<?php
include('config/conexion.php');
$sql ="SELECT * from Tipo_contenedor";
$result = mysqli_query($db, $sql);

$json = array();
while ($row = mysqli_fetch_array($result)) {
    $json[] = array(
        'Tipo_contenedor' => $row['Tipo_contenedor'],
        'idTipo' => $row['idTipo']
         );

}
$jsonstring = json_encode($json);
echo $jsonstring;
?>