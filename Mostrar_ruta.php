<?php

include('config/conexion.php');

//Mostrar bootstrap
if (isset($_POST['Id_ruta'])){
    $Id_ruta = $_POST['Id_ruta'];

    $sql1 = "SELECT r.*, t.Tipo_contenedor from Ruta r,Tipo_contenedor t where idTipo = Tipo_id_cont and Id_ruta = $Id_ruta ";
    $result1 = mysqli_query($db, $sql1);
    $row1 = mysqli_fetch_array($result1);
    echo json_encode($row1);


}
//Mostrar página
else {

    $sql = "SELECT r.*, t.Tipo_contenedor from Ruta r,Tipo_contenedor t where idTipo = Tipo_id_cont ";
    $result = mysqli_query($db, $sql);
    $json = array();
    while ($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'Id_ruta' => $row['Id_ruta'],
            'Nombre_ruta' => $row['Nombre_ruta'],
            'Tipo_contenedor' => $row['Tipo_contenedor']
        );

    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
?>