<?php
require "config/conexion.php";

if (isset($_POST['Id_ruta'])) {
    $Id_ruta = $_POST['Id_ruta'];
    $query = "DELETE FROM Ruta WHERE Id_ruta = $Id_ruta";
    $result = mysqli_query($db, $query);
    if (!$result) {
        $json = '<h4 style ="color:#008000">La ruta no se ha eliminado correctamente</h4>';
        $jsonstring = json_encode($json);
        echo $jsonstring;
        exit();
    } else {
        $json = '<h4 style ="color:#ff0000"; font-size:12px>La ruta se ha eliminado correctamente</h4>';
        $jsonstring = json_encode($json);
        echo $jsonstring;
        exit();
    }
}
?>
