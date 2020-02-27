<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Atualizar Pessoas</title>
        <!-- GLOBAL MAINLY STYLES-->
        <link href="<?= base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?= base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?= base_url() ?>assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
        <!-- PLUGINS STYLES-->
        <link href="<?= base_url() ?>assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ibox">
                                <div class="ibox-head">
                                    <div class="ibox-title">Atualizar Pessoa</div>
                                    <div class="ibox-tools">
                                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>

                                    </div>
                                </div>
                                <div class="ibox-body">                                    
                                    <form action="<?= base_url() ?>pessoa/editarPost" method="POST">
                                        
                                        <div class="row">
                                            <input name="id_pessoa" value="<?= $pessoas[0]->id_pessoa ?>" type="hidden" />
                                            <div class="col-sm-6 form-group">
                                                <label>Nome Completo</label>
                                                <input value="<?= $pessoas[0]->nome_pessoa ?>" name="nome_pessoa" min="3" class="form-control" type="text" required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>Nº do BI</label>
                                                <input value="<?= $pessoas[0]->bi ?>" name="bi" min="3" class="form-control" type="text" required="">
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>Email</label>
                                                <input value="<?= $pessoas[0]->email ?>" name="email" min="3" class="form-control" type="text">
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>Telefone</label>
                                                <input value="<?= $pessoas[0]->telefone ?>" name="telefone" min="3" class="form-control" type="text">
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label for="sel1">Sala:</label>
                                                <select name="id_sala" class="form-control" id="sel1">
                                                    <?php foreach ($salas as $s) {
                                                        ?>
                                                        <option value="<?= $s->id_sala ?>"><?= $s->numero_sala ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label for="sel1">Nivel Acsdamico:</label>
                                                <select name="id_nivel_academico" class="form-control" id="sel1">
                                                    <?php foreach ($nivel_academico as $n) {
                                                        ?>
                                                        <option value="<?= $n->id_nivel_academico ?>"><?= $n->descricao_nivel_academico?></option>
                                                    <?php } ?>
                                                </select>
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
        <script src="<?= base_url() ?>/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- PAGE LEVEL PLUGINS-->
        <script src="<?= base_url() ?>assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
        <!-- CORE SCRIPTS-->
        <script src="<?= base_url() ?>assets/js/app.js" type="text/javascript"></script>
        <!-- PAGE LEVEL SCRIPTS-->
        <script src="<?= base_url() ?>assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
    </body>

</html>