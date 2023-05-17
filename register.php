<?php 
session_start();

include 'Controllers/Auth/User.php';

use Controllers\Auth\User\User;


if (isset($_SESSION['user'])) {
    header('location: index.php');
}


if (isset($_POST) && $_POST != NULL) {
    
    $user = new User();
    var_dump($user->setName($_POST['name']));
    var_dump($user->setEmail($_POST['email']));
}

// Agregar Clase User e incorporar en este contenido.


require 'views/register.view.php';