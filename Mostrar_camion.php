<?php
include('config/conexion.php');

//Mostrar bootstrap
if (isset($_POST['id_camion'])){
    $id_camion = $_POST['id_camion'];

    $sql1 = "Select * from Camion,Tipo_contenedor where Id_camion = $id_camion and id_tipo_contenedor = idTipo";
    $result1 = mysqli_query($db, $sql1);
    $row1 = mysqli_fetch_array($result1);
    echo json_encode($row1);


}
//Mostrar página
else {

    $sql = "SELECT t.Tipo_contenedor,c.Matricula_camion,Marca,Modelo,c.Id_camion,c.Latitud,c.Longitud from Camion c,Tipo_contenedor t where id_tipo_contenedor = idTipo ;";
    $result = mysqli_query($db, $sql);


    $json = array();
    while ($row = mysqli_fetch_array($result)) {
        $json[] = array(

            'Id_camion' => $row['Id_camion'],
            'Tipo_contenedor' => $row['Tipo_contenedor'],
            'Matricula_camion' => $row['Matricula_camion'],
            'Marca' => $row['Marca'],
            'Modelo' => $row['Modelo'],
            'Latitud' => $row['Latitud'],
            'Longitud' => $row['Longitud']
        );

    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}

?>
