<?php
include('config/conexion.php');

//Mostrar bootstrap
if (isset($_POST['id_empresa'])){
    $id_empresa = $_POST['id_empresa'];

    $sql1 = "Select * from Empresa e,Localidad l,Tipo_contenedor t where id_empresa = $id_empresa and e.id_localidad = l.id_localidad and Id_tipo = idTipo ";
    $result1 = mysqli_query($db, $sql1);
    $row1 = mysqli_fetch_array($result1);
    echo json_encode($row1);


}
//Mostrar página
else {

    $sql = "Select * from Empresa e,Localidad l,Tipo_contenedor t where e.id_localidad = l.id_localidad and Id_tipo = idTipo;";
    $result = mysqli_query($db, $sql);
    $json = array();
    while ($row = mysqli_fetch_array($result)) {
        $json[] = array(

            'id_empresa' => $row['id_empresa'],
            'Localidad' => $row['Localidad'],
            'Tipo_contenedor' => $row['Tipo_contenedor'],
            'Telefono' => $row['Telefono'],
            'Nombre' => $row['Nombre'],
            'Latitud' => $row['Latitud'],
            'Longitud' => $row['Longitud']
        );

    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}

?>
