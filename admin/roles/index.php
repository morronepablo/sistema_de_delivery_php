<?php
global $roles;
include('../../app/config.php');
include('../../admin/layout/header.php');
include('../../app/controllers/roles/listado_de_roles.php');
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <br>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <h1>Listado de roles</h1>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card card-outline card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Primary Outline</h3>
                                </div>
                                <div class="card-body">
                                    <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                                        <thead>
                                        <tr>
                                            <th><center>Nro</center></th>
                                            <th><center>Nombre del rol</center></th>
                                            <th><center>Acciones</center></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $contador = 0;
                                        foreach ($roles as $role) {
                                            $contador++;
                                            $id_rol     = $role['id_rol'];
                                            $nombre_rol = $role['nombre_rol'];
                                            ?>
                                            <tr>
                                                <td><center><?=$contador;?></center></td>
                                                <td><?=$nombre_rol;?></td>
                                                <td>
                                                    <center>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a href="show.php?id=<?=$id_rol;?>" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                                            <a href="edit.php?id=<?=$id_rol;?>" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                                            <a href="delete.php?id=<?=$id_rol;?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                                                        </div>
                                                    </center>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
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

<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Roles",
                "infoEmpty": "Mostrando 0 a 0 de 0 Roles",
                "infoFiltered": "(Filtrado de _MAX_ total Roles)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Roles",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true, "lengthChange": true, "autoWidth": false,
            buttons: [{
                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [{
                    text: 'Copiar',
                    extend: 'copy',
                }, {
                    extend: 'pdf'
                },{
                    extend: 'csv'
                },{
                    extend: 'excel'
                },{
                    text: 'Imprimir',
                    extend: 'print'
                }
                ]
            },
                {
                    extend: 'colvis',
                    text: 'Visor de columnas',
                    collectionLayout: 'fixed three-column'
                }
            ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });
</script>

