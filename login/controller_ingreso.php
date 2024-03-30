<?php

global $pdo;
include ('../app/config.php');

$email = $_POST['email'];
$password = $_POST['password'];

// echo $email.' -- '.$password;

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
// print_r($usuarios);

$contador = 0;
foreach ($usuarios as $usuario) {
    $contador = $contador + 1;
}

if($contador > 0) {
    // echo "las credenciales son correctas";
    session_start();
    $_SESSION['mensaje'] = 'Bienvenido al sistema';
    $_SESSION['sesion_email'] = $email;
    header('Location:'.APP_URL.'/admin');
} else {
    echo "las credenciales son incorrectas";
    session_start();
    $_SESSION['mensaje'] = 'Las credenciales son incorrectas';
    header('Location:'.APP_URL.'/login');
}