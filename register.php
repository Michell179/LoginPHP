<?php session_start();

if (isset($_SESSION['user'])) {
    header('location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $emial = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];
} 

// Agregar Clase User e incorporar en este contenido.

echo $name . $emial . $password . $confirmPassword;

require 'views/register.view.php';