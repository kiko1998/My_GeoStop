<?php
include "config/conexion.php";


if (isset($_POST['Nombre_apellido'])) {
    $Nombre_y_apellido = $_POST['Nombre_apellido'];
}
if (isset($_POST['Username'])) {
    $Username = $_POST['Username'];
}
if (isset($_POST['Email'])) {
    $Email = $_POST['Email'];
}
if (isset($_POST['Password'])) {
    $password = $_POST['Password'];
}

$user_check_query = "SELECT * FROM Usuario WHERE username='$Username' OR email='$Email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
if ($user) { // if user exists
    if ($user['username'] === $Username) {
        $json = '<h2 style ="color:#ff0000">Este usuario ya existe.</h2>';
        $jsonstring = json_encode($json);
        echo $jsonstring;
        exit();
    }

    else if ($user['email'] === $Email) {
        $json = '<h2 style ="color:#ff0000">Este email ya existe.</h2>';
        $jsonstring = json_encode($json);
        echo $jsonstring;
        exit();
    }

}


$password_1 = md5($password);//encrypt the password before saving in the database

$query = "INSERT INTO Usuario (username, email, password, Nombre_y_apellido)
  			  VALUES('$Username', '$Email', '$password_1','$Nombre_y_apellido')";
mysqli_query($db, $query);
$json = '<h2 style ="color:#008000">El usuario administrador se ha añadido correctamente</h2>';
$jsonstring = json_encode($json);
echo $jsonstring;
exit();
