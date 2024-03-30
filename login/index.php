<?php include ('../app/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=APP_NAME;?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=APP_URL;?>/public/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?=APP_URL;?>/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=APP_URL;?>/public/dist/css/adminlte.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition login-page" style="background-color: white">
<div class="login-box">
    <!-- /.login-logo -->
    <center>
        <img src="https://img.freepik.com/vector-gratis/servicio-entrega-ilustrado_23-2148505081.jpg?t=st=1710454211~exp=1710457811~hmac=06626199abf9c96ba2e8585b0007b1b9d82d9f874763338e1c3ee7a3fbdfbb2e&w=740" alt="logo" width="200px">
        <br><br>
    </center>
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="" class="h1"><b><?=APP_NAME;?></b></a>
        </div>
        <?php
            session_start();
            if(isset($_SESSION['mensaje'])) {
                $mensaje = $_SESSION['mensaje'];
                ?>
                <script>
                    Swal.fire({
                        position: "center",
                        icon: "error",
                        title: "<?=$mensaje;?>",
                        showConfirmButton: false,
                        timer: 2500
                    });
                </script>
                <?php
                unset($_SESSION['mensaje']);
            }
        ?>
        <div class="card-body">
            <p class="login-box-msg">Inicio de sesión</p>

            <form action="controller_ingreso.php" method="post">
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="input-group mb-3">
                    <button class="btn btn-primary btn-block">Ingreso</button>
                </div>
            </form>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=APP_URL;?>/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=APP_URL;?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=APP_URL;?>/public/dist/js/adminlte.min.js"></script>
</body>
</html>
