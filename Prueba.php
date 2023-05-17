<?php

namespace Prueba;

include 'Controllers/Auth/User.php';

use Controllers\Auth\User\User;



$name = 'MICHELL';
$email = 'correo@example.com<script>alert("Hola");</script>';

$michell = new User();
// $michell->validate($name);

var_dump($michell->setName($name));
var_dump($michell->setEmail($email));