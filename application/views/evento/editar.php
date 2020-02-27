<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Editar Evento</title>
        <!-- GLOBAL MAINLY STYLES-->
        <link href="<?= base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?= base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?= base_url() ?>assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
        <!-- PLUGINS STYLES-->
        <link href="<?= base_url() ?>assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
        <link href="<?= base_url() ?>assets/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
        <!-- THEME STYLES-->
        <link href="<?= base_url() ?>assets/css/main.min.css" rel="stylesheet" />
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
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?= $this->session->flashdata('sms'); ?>
                        </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ibox">
                                <div class="ibox-head">
                                    <div class="ibox-title">Editar Evento</div>
                                    <div class="ibox-tools">
                                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>

                                    </div>
                                </div>
                                <div class="ibox-body">                                    
                                    <form action="<?= base_url() ?>evento/editarPost" method="POST">

                                        <div class="row">
                                            <input type="hidden" name="id_evento" value="<?= $eventos[0]->id_evento ?>" />
                                            <div class="col-sm-6 form-group">
                                                <label>Titulo</label>
                                                <input value="<?= $eventos[0]->titulo ?>" name="titulo" min="3" class="form-control" type="text" required="">
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Local</label>
                                                <input value="<?= $eventos[0]->local ?>" name="local" min="3" class="form-control" type="text" required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 form-group">
                                                <label>Descrição</label>
                                                <textarea name="descricao" class="form-control" rows="3"><?= $eventos[0]->descricao_evento ?></textarea>
                                            </div>
                                        </div>
                                        <!--
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>Imagem</label>
                                                <input type="file" name="foto" class="form-control" />
                                            </div>
                                        </div>
                                        -->
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>Data inicio</label>
                                                <input value="<?= $eventos[0]->data_inicio ?>" type="date" name="data_inicio" class="form-control" />
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>Hora inicio</label>
                                                <input value="<?= $eventos[0]->tempo_inicio ?>" type="time" name="tempo_inicio" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>Data de fim</label>
                                                <input value="<?= $eventos[0]->data_fim ?>" type="date" name="data_fim" class="form-control" />
                                            </div>
                                            
                                            <div class="col-sm-6 form-group">
                                                <label>Hora de fim</label>
                                                <input value="<?= $eventos[0]->tempo_fim ?>" type="time" name="tempo_fim" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Atualizar</button>
                                        </div>
                                    </form>
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
        <!-- CORE PLUGINS-->
        <script src="<?= base_url() ?>assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- PAGE LEVEL PLUGINS-->
        <script src="<?= base_url() ?>assets/vendors/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/jquery-knob/dist/jquery.knob.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/moment/min/moment.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/jquery-minicolors/jquery.minicolors.min.js" type="text/javascript"></script>
        <!-- CORE SCRIPTS-->
        <script src="<?= base_url() ?>assets/js/app.min.js" type="text/javascript"></script>
        <!-- PAGE LEVEL SCRIPTS-->
        <script src="<?= base_url() ?>assets/js/scripts/form-plugins.js" type="text/javascript"></script>
    </body>

</html>