<?php
require "config/conexion.php";

if (isset($_POST['id_empresa'])) {
    $id_empresa = $_POST['id_empresa'];
    $query = "DELETE FROM Empresa WHERE id_empresa=$id_empresa";
    $result = mysqli_query($db, $query);
    if (!$result) {
        $json = '<h4 style ="color:#008000">La empresa no se ha eliminado correctamente</h4>';
        $jsonstring = json_encode($json);
        echo $jsonstring;
        exit();
    } else {
        $json = '<h4 style ="color:#ff0000"; font-size:12px>La empresa se ha eliminado correctamente</h4>';
        $jsonstring = json_encode($json);
        echo $jsonstring;
        exit();
    }
}
?>