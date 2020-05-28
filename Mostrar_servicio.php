<?php
include('config/conexion.php');

//Mostrar bootstrap
if (isset($_POST['id_servicio'])){
    $id_servicio = $_POST['id_servicio'];

    $sql1 = "SELECT s.id_servicio,s.Nombre_servicio,U.Nombre_y_apellido,c.Matricula_camion,R.Nombre_ruta,s.Fecha_inicio,s.Fecha_fin from Servicio s,Camion c,Ruta R,Usuario U where s.Id_usuario=U.id_usuario and c.Id_camion=s.Id_camion and R.Id_ruta=s.Id_ruta and id_servicio = $id_servicio ";
    $result1 = mysqli_query($db, $sql1);
    $row1 = mysqli_fetch_array($result1);
    echo json_encode($row1);


}
//Mostrar página
else {

    $sql = "SELECT s.id_servicio,s.Nombre_servicio,U.Nombre_y_apellido,c.Matricula_camion,R.Nombre_ruta,s.Fecha_inicio,s.Fecha_fin from Servicio s,Camion c,Ruta R,Usuario U where s.Id_usuario=U.id_usuario and c.Id_camion=s.Id_camion and R.Id_ruta=s.Id_ruta;";
    $result = mysqli_query($db, $sql);
    $json = array();
    while ($row = mysqli_fetch_array($result)) {
        $json[] = array(

            'id_servicio' => $row['id_servicio'],
            'Nombre_apellido' => $row['Nombre_y_apellido'],
            'Nombre_servicio' => $row['Nombre_servicio'],
            'Matricula_camion' => $row['Matricula_camion'],
            'Ruta' => $row['Nombre_ruta'],
            'Fecha_inicio' => $row['Fecha_inicio'],
            'Fecha_fin' => $row['Fecha_fin']

        );

    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}

?>
