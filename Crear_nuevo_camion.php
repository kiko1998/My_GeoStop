<?php
include "config/conexion.php";

    if (isset($_POST['Marca'])) {
        $Marca = $_POST['Marca'];
    }
    if (empty($_POST['Marca'])) {
        echo "error";
    }
    if (isset($_POST['Tipos_contenedor'])) {
        $id_tipo_contenedor = $_POST['Tipos_contenedor'];
    }
    if (isset($_POST['Matricula_camion'])) {
        $Matricula_camion = $_POST['Matricula_camion'];
    }
    if (isset($_POST['Modelo'])){
        $Modelo = $_POST['Modelo'];
    }
    if (isset($_POST['Latitud'])) {
        $Latitud = $_POST['Latitud'];
    }
    if (isset($_POST['Longitud'])) {
        $Longitud = $_POST['Longitud'];

    }
        $query = "INSERT INTO Camion (Marca,Matricula_camion,Modelo,id_tipo_contenedor,Latitud,Longitud)
                            VALUES ('$Marca','$Matricula_camion','$Modelo','$id_tipo_contenedor','$Latitud',$Longitud)";
        $result = utf8_encode(mysqli_query($db, $query));
        if ($result == false) {
            $json = '<h4 style ="color:red">El camión no se ha creado correctamente</h4>';
            $jsonstring = json_encode($json);
            echo $jsonstring;
            exit();
        } else {
            $json = '<h4 style ="color:green">El camión se ha creado correctamente</h4>';
            $jsonstring = json_encode($json);
            echo $jsonstring;
            exit();
        }

