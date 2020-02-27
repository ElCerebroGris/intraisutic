<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Lista de Anuncios</title>
        <!-- GLOBAL MAINLY STYLES-->
        <link href="<?= base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?= base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?= base_url() ?>assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
        <!-- PLUGINS STYLES-->
        <link href="<?= base_url() ?>assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
        <!-- THEME STYLES-->
        <link href="<?= base_url() ?>assets/css/main.min.css" rel="stylesheet" />
        <!-- PAGE LEVEL STYLES-->
        <link href="<?= base_url() ?>assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
        <!-- PAGE LEVEL STYLES-->
        <link href='<?= base_url() ?>assets/css/themes/blue.css' rel='stylesheet' id='theme-style' />
    </head>

    <body class="fixed-navbar fixed-layout boxed-layout">
        <div class="page-wrapper">
            <!--SIDEBAR-->
            <?php include APPPATH . 'views/includes/header.php'; ?>

            <div class="content-wrapper">
                <!-- START PAGE CONTENT-->
                <div class="page-content fade-in-up">
                    <?php if ($this->session->flashdata('sms') != null) { ?>
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?= $this->session->flashdata('sms'); ?>
                        </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ibox">
                                <div class="ibox-body">
                                    <a href="<?= base_url() ?>anuncio/add" class="btn btn-info">Adicionar</a>
                                </div>
                            </div>

                            <div class="ibox">
                                <div class="ibox-head">
                                    <div class="ibox-title">Lista de Anuncios</div>
                                    <div class="ibox-tools">
                                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    </div>
                                </div>
                                <div class="ibox-body">
                                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Titulo</th>
                                                <th>Descrição</th>
                                                <th>Destinatarios</th>
                                                <th>Estado</th>
                                                <th>Data de criação</th>
                                                <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($anuncios as $e) {
                                                ?>
                                                <tr>
                                                    <td><a href="#"><?= $e->titulo_anuncio ?></a></td>
                                                    <td><?= $e->descricao_anuncio ?></td>
                                                    <td><?= $e->descricao_departamento ?></td>
                                                    <td><?= $e->estado_anuncio ?></td>
                                                    <td><?= $e->data_criacao ?></td>
                                                    <td>
                                                        <a class="btn btn-info" href="<?= base_url('anuncio/editar/' . $e->id_anuncio) ?>">Editar</a>
                                                        <?php if ($e->estado_anuncio == 0) { ?>
                                                            <a class="btn btn-success" href="<?= base_url('anuncio/ativar/' . $e->id_anuncio) ?>">Ativar</a>
                                                        <?php } else { ?>
                                                            <a class="btn btn-danger" href="<?= base_url('anuncio/desativar/' . $e->id_anuncio) ?>">Desativar</a> 
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT-->
                <!-- FOOTER -->
                <?php include APPPATH . 'views/includes/footer.php'; ?>
            </div>
        </div>
        <!-- CORE PLUGINS-->
        <script src="<?= base_url() ?>assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- PAGE LEVEL PLUGINS-->
        <script src="<?= base_url() ?>assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#example-table').DataTable({
                    responsive: true,

                    "language": {
                        "sProcessing": "Processando...",
                        "sLengthMenu": "Mostrar _MENU_ registros",
                        "sZeroRecords": "Não existe resultados",
                        "sEmptyTable": "Nenhum dado disponivel nesta tabela",
                        "sInfo": "Mostrando registros de _START_ à _END_ de um total de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando registros de 0 à 0 de um total de 0 registros",
                        "sInfoFiltered": "(filtrando de um total de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sSearch": "Buscar:",
                        "sUrl": "",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Carregando...",
                        "oPaginate": {
                            "sFirst": "Primeiro",
                            "sLast": "Último",
                            "sNext": "Seguinte",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending": ": Activar para ordenar a coluna de maneira ascendente",
                            "sSortDescending": ": Activar para ordenar a coluna de maneira descendente"
                        }
                    }
                });
            });
        </script>
        <!-- CORE SCRIPTS-->
        <script src="<?= base_url() ?>assets/js/app.js" type="text/javascript"></script>
        <!-- PAGE LEVEL SCRIPTS-->
        <script src="<?= base_url() ?>assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
    </body>

</html>