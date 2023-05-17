<?php session_start();


include 'Controllers/Auth/User.php';

use Controllers\Auth\User\User;


$error = '';

if (isset($_SESSION['user'])) {
    header('location: index.php');
}


if (isset($_POST) && $_POST != NULL) 
{
    foreach ($_POST as $post => $value) 
    {
        if (empty($value)) 
        {
            $error .=  "El campo {$post} esta vacio </br>";
        }
    }
    
    $user = new User();
    $name = $user->setName($_POST['name']);
    $email = $user->setEmail($_POST['email']);

    if ($_POST['password'] == $_POST['confirm-password'])
    {
        
        if ($user->validatePass($_POST['password'])) {
            $password = $user->setPassword($_POST['password']);
            var_dump($password);

        }else 
        {
            $error .= 'Minimo 8 caracteres con Mayusculas y Numeros </br>';
        }

    }else 
    {
        $error .= 'Las Passwords no coinciden </br> ';
    }
}

var_dump($name);
var_dump($email);
var_dump($password);



require 'views/register.view.php';