<?php
    include("config/conexion.php");

    if (isset($_POST['Id_camion'])) {
        $Id_camion = $_POST['Id_camion'];
        $query = "DELETE FROM Camion WHERE Id_camion=$Id_camion";
        $result = mysqli_query($db, $query);
        if (!$result){
            $json = '<h4 style ="color:#008000">El camión no se ha eliminado correctamente</h4>';
            $jsonstring = json_encode($json);
            echo $jsonstring;
            exit();
        }
        else {
            $json = '<h4 style ="color:#ff0000"; font-size:12px>El camión se ha eliminado correctamente</h4>';
            $jsonstring = json_encode($json);
            echo $jsonstring;
            exit();
        }
    }
?>
