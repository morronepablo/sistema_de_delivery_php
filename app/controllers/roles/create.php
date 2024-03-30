<?php

global $pdo;
include ('../../../app/config.php');

$nombre_rol = $_POST['nombre_rol'];

if(empty($nombre_rol)) {
    session_start();
    $_SESSION['mensaje'] = "Este campo es obligatorio.";
    $_SESSION['icono'] = 'error';
    ?><script>window.history.back();</script><?php
} else {
    // consultando si existe este rol en la tabla roles
    $sql = "SELECT * FROM roles WHERE nombre_rol = '$nombre_rol'";
    $query = $pdo->prepare($sql);
    $query->bindParam(':nombre_rol', $nombre_rol);
    $query->execute();

    if($query->rowCount()>0) {
        session_start();
        $_SESSION['mensaje'] = "Este rol de ".$nombre_rol." ya esta registrado.";
        $_SESSION['icono'] = 'error';
        ?><script>window.history.back();</script><?php
    }

    // registrar nuevo rol
    $sql = "INSERT INTO roles   (nombre_rol, fyh_creacion) 
                    VALUES (:nombre_rol,:fyh_creacion)";
    $query = $pdo->prepare($sql);
    $query->bindParam(':nombre_rol', $nombre_rol);
    $query->bindParam(':fyh_creacion', $fechaHora);

    if($query->execute()) {
        session_start();
        $_SESSION['mensaje'] = "El rol se registro correctamente.";
        $_SESSION['icono'] = 'success';
        header('Location:'.APP_URL.'/admin/roles');
    } else {
        echo "El rol no se puedo registrar.";
        session_start();
        $_SESSION['mensaje'] = "El rol no se puedo registrar.";
        $_SESSION['icono'] = 'error';
        ?><script>window.history.back();</script><?php
    }
}

