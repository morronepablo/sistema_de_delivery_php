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
                        <h1>Rol: <?=$rol['nombre_rol'];?></h1>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Ingrese los datos</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Nombre del rol</label>
                                                <p><?=$rol['nombre_rol']?></p>
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
                                                <a href="<?=APP_URL;?>/admin/roles" class="btn btn-secondary float-right"><i class="bi bi-reply-all"></i> Volver</a>
                                            </div>
                                        </div>
                                    </div>
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


