<?php

include('../../app/config.php');
include('../../admin/layout/header.php');

$id_rol = $_GET['id'];
include('../../app/controllers/roles/RolesController.php');
$roles_controller = new RolesController();
$rol = $roles_controller->datos_rol($id_rol);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <h1>Eliminar Rol: <?=$rol['nombre_rol'];?></h1>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">¿Está seguro de elimiar este rol?</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?=APP_URL;?>/app/controllers/roles/delete.php" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Nombre del rol</label>
                                                <input type="text" name="id_rol" value="<?=$id_rol;?>" hidden>
                                                <input type="text" name="nombre_rol" value="<?=$rol['nombre_rol'];?>" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Fecha y Hora Creación</label>
                                                <p>
                                                    <?php
                                                    $date = date_create($rol['fyh_creacion']);
                                                    echo date_format($date, 'd/m/Y');
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <a href="<?=APP_URL;?>/admin/roles" class="btn btn-secondary"><i class="bi bi-x-circle"></i> Cancelar</a>
                                                <button type="submit" class="btn btn-danger float-right"><i class="bi bi-trash"></i> Eliminar rol</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include('../../admin/layout/footer.php'); ?>
<?php include('../../layout/mensaje.php'); ?>


