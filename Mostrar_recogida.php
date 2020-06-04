<?php
include('config/conexion.php');

//Mostrar bootstrap
if (isset($_POST['Id_recogida'])){
    $Id_recogida = $_POST['Id_recogida'];

    $sql1 = "SELECT * from Recogida r,Contenedor c,Servicio s where r.id_servicio = s.id_servicio and r.id_contenedor = c.id_contenedor and Id_recogida= $Id_recogida";
    $result1 = mysqli_query($db, $sql1);
    $row1 = mysqli_fetch_array($result1);
    echo json_encode($row1);


}
//Mostrar recogida
else {

    $sql ="SELECT * from Recogida r,Contenedor c,Servicio s where r.id_servicio = s.id_servicio and r.id_contenedor = c.id_contenedor;";
    $result = mysqli_query($db, $sql);


    $json = array();
    while ($row = mysqli_fetch_array($result)) {
        $json[] = array(

            'Id_recogida' => $row['Id_recogida'],
            'Nombre_servicio' => $row['Nombre_servicio'],
            'Nombre' => $row['Nombre'],
            'Fecha_recogida' => $row['Fecha_recogida'],
            'Horario_recogida' => $row['Horario_recogida']
        );

    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}

?>