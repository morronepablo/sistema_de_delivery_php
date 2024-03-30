<?php
global $roles;
include('../../app/config.php');
include('../../admin/layout/header.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <h1>Creación de un nuevo rol</h1>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Ingrese los datos</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?=APP_URL;?>/app/controllers/roles/create.php" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Nombre del rol</label><b> *</b>
                                                <input type="text" name="nombre_rol" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <a href="<?=APP_URL;?>/admin/roles" class="btn btn-secondary"><i class="bi bi-x-circle"></i> Cancelar</a>
                                                <button type="submit" class="btn btn-primary float-right"><i class="bi bi-floppy"></i> Registrar rol</button>
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


