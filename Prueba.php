<?php

namespace Prueba;

include 'Controllers/Auth/User.php';

use Controllers\Auth\User\User;


$name = 'MICHELL';
$email = 'correo@example.com<script>alert("Hola");</script>';

$michell = new User();
// $michell->validate($name);

$password = 'ASDasd123';

if (preg_match('#^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$#', $password)) {
    echo 'Contraseña válida';
} else {
    echo 'Contraseña inválida';
}
