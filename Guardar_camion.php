<?php
    include "config/conexion.php";
        //recibir valores del anterior formulario

        if(isset($_POST["id"])) {
            $Marca = mysqli_real_escape_string($db, $_POST["Marca"]);
            $Modelo = mysqli_real_escape_string($db, $_POST["Modelo"]);
            $Latitud = mysqli_real_escape_string($db, $_POST["Latitud"]);
            $Longitud = mysqli_real_escape_string($db, $_POST["Longitud"]);
            $Matricula = mysqli_real_escape_string($db, $_POST["Matricula"]);
            $id_camion = mysqli_real_escape_string($db, $_POST["id"]);
            $Tipo_contenedor_id = mysqli_real_escape_string($db, $_POST["Tipo_contenedor_id"]);

            $query = "UPDATE Camion SET Marca='$Marca',Modelo='$Modelo',Latitud='$Latitud',Longitud='$Longitud',Matricula_camion='$Matricula',id_tipo_contenedor ='$Tipo_contenedor_id' WHERE Id_camion='$id_camion'";
            $result = mysqli_query($db, $query);
            if ($result == 1) {
                $json = '<h4 style ="color:#88ff00"; font-size:12px>Camión actualizado</h4>';
                $jsonstring = json_encode($json);
                echo $jsonstring;
                exit();
            } else {
                $json = '<h4 style ="color:#ff0000"; font-size:12px>No se ha actualizado el camión</h4>';
                $jsonstring = json_encode($json);
                echo $jsonstring;
                exit();
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
