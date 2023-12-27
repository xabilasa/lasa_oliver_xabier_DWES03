<?php
require 'model/User.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new User();
    $user->username = $_POST['username'];
    $user->password = $_POST['password'];
    // Aquí puede agregar la lógica para guardar los datos del usuario en una base de datos
    echo "Datos del usuario guardados correctamente!";
} else {
    require 'views/index.php';
}

?>