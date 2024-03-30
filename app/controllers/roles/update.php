<?php

global $pdo;
include ('../../../app/config.php');

$id_rol     = $_POST['id_rol'];
$nombre_rol = $_POST['nombre_rol'];

if(empty($nombre_rol)) {
    session_start();
    $_SESSION['mensaje'] = "Este campo es obligatorio.";
    $_SESSION['icono'] = 'error';
    ?><script>window.history.back();</script><?php
} else {
    // Actualizar rol
    $sql = "UPDATE roles   
            SET nombre_rol=:nombre_rol,
                fyh_actualizacion=:fyh_actualizacion 
            WHERE id_rol=:id_rol";
    $query = $pdo->prepare($sql);
    $query->bindParam(':nombre_rol', $nombre_rol);
    $query->bindParam(':fyh_actualizacion', $fechaHora);
    $query->bindParam(':id_rol', $id_rol);

    try {
        if($query->execute()) {
            session_start();
            $_SESSION['mensaje'] = "El rol se actualizó correctamente.";
            $_SESSION['icono'] = 'success';
            header('Location:'.APP_URL.'/admin/roles');
        } else {
            session_start();
            $_SESSION['mensaje'] = "El rol no se puedo actualizar por existir en la base de datos.";
            $_SESSION['icono'] = 'error';
            ?><script>window.history.back();</script><?php
        }
    } catch(PDOException $e) {
        if($e->getCode()=='23000') {
            session_start();
            $_SESSION['mensaje'] = "El rol no se puedo actualizar por existir en la base de datos.";
            $_SESSION['icono'] = 'error';
            ?><script>window.history.back();</script><?php
        }
    }


}

