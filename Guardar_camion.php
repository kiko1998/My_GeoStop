<?php
    include "config/conexion.php";
        //recibir valores del anterior formulario

if (isset($_POST["Tipo_contenedor_id"])) {
    $Tipo_contenedor_id = mysqli_real_escape_string($db, $_POST["Tipo_contenedor_id"]);

    $query2 = "Select * from Tipo_contenedor where Tipo_contenedor = '$Tipo_contenedor_id'";
    $result1 = mysqli_query($db, $query2);
    $row1 = mysqli_fetch_array($result1);

    $idTipo = $row1['idTipo'];




    if (isset($_POST["id"])) {
        $Marca = mysqli_real_escape_string($db, $_POST["Marca_camion"]);
        $Modelo = mysqli_real_escape_string($db, $_POST["Modelo_camion"]);
        $Latitud = mysqli_real_escape_string($db, $_POST["Latitud_camion"]);
        $Longitud = mysqli_real_escape_string($db, $_POST["Longitud_camion"]);
        $Matricula = mysqli_real_escape_string($db, $_POST["Matricula"]);
        $id_camion = mysqli_real_escape_string($db, $_POST["id"]);
        $Tipo_contenedor_id = mysqli_real_escape_string($db, $_POST["Tipo_contenedor_id"]);

        $query = "UPDATE Camion SET Marca='$Marca',Modelo='$Modelo',Latitud='$Latitud',Longitud='$Longitud',Matricula_camion='$Matricula',id_tipo_contenedor ='$idTipo' WHERE Id_camion='$id_camion'";
        $result = mysqli_query($db, $query);

        if ($result == 1) {
            $json = '<h4 style ="color:#88ff00"; font-size:12px>Camión actualizado</h4>';
            $jsonstring = json_encode($json);
            echo $jsonstring;
            exit();
        } else {
            $json = '<h4 style ="color:#ff0000"; font-size:12px>No se ha actualizado el camión</h4> ';
            $jsonstring = json_encode($json);
            echo $jsonstring;
            exit();
        }
    }
}
        //if(isset($_POST["Modelo_camion"]))


      /* else{
           $json = '<h4 style ="color:#ff0000"; font-size:12px>No se ha encontrado el id</h4>';
           $jsonstring = json_encode($json);
           echo $jsonstring;
           exit();

       }*/

?>
