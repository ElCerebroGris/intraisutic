<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Diretorio</title>
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
                <div class="page-heading">
                    <h1 class="page-title">Diretorio</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="la la-home font-20"></i></a>
                        </li>
                        <li class="breadcrumb-item">Pesquisa</li>
                    </ol>
                </div>
                <!-- START PAGE CONTENT-->
                <div class="page-content fade-in-up">
                    <?php if ($this->session->flashdata('sms') != null) { ?>
                        <div class="alert alert-warning">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?= $this->session->flashdata('sms'); ?>
                        </div>
                    <?php } ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox">
                                <div class="ibox-head">
                                    <div class="ibox-title">Pesquisar</div>
                                </div>
                                <div class="ibox-body">
                                    <form class="form-inline" method="post" action="<?= base_url() ?>diretorio/pesquisarPost">
                                        <label class="sr-only" for="ex-email"></label>
                                        <input name="chave" size="100" class="form-control mb- mr-sm-2 mb-sm-0" id="ex-email" type="text" placeholder="Nome">

                                        <button class="btn btn-primary" type="submit">Procurar</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                    <?php foreach ($pessoas as $a) { ?>

                        <div class="card flex-row flex-wrap">
                            <div class="card-header border-0">
                                <img width="64px" height="64px" src="<?= base_url() ?>img/admin-avatar.png" alt="">
                            </div>
                            <div class="card-block px-2">
                                <br>
                                <h3 class="card-title"><?= $a->nome_pessoa ?></h3>
                                <br>
                                <p class="card-text">
                                    BI: <?= $a->bi ?><br>
                                    Email: <?= $a->email ?><br>
                                    Sala: <?= $a->numero_sala.' - '.$a->descricao_sala ?><br>
                                    Telefone da Sala: <?= $a->telefone_sala ?><br>
                                </p>
                            </div>
                            <div class="w-100"></div>
                            <div class="card-footer w-100 text-muted">
                                FOOTER
                            </div>
                        </div>
                    <br>
                    <?php } ?>


                </div>
                <!-- END PAGE CONTENT-->
                <!-- FOOTER -->
                <?php include APPPATH . 'views/includes/footer.php'; ?>
            </div>
        </div>
        <!-- BEGIN PAGA BACKDROPS-->
        <div class="sidenav-backdrop backdrop"></div>
        <div class="preloader-backdrop">
            <div class="page-preloader">Loading</div>
        </div>
        <!-- END PAGA BACKDROPS-->
        <!-- CORE PLUGINS-->
        <script src="<?= base_url() ?>assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- PAGE LEVEL PLUGINS-->
        <!-- PAGE LEVEL PLUGINS-->
        <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.pie.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.time.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/flot.tooltip/js/jquery.flot.tooltip.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.categories.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.stack.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.selection.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/flot-orderBars/js/jquery.flot.orderBars.js" type="text/javascript"></script>
        <!-- CORE SCRIPTS-->
        <script src="<?= base_url() ?>assets/js/app.min.js" type="text/javascript"></script>
        <!-- PAGE LEVEL SCRIPTS-->
        <script src="<?= base_url() ?>assets/js/scripts/charts_flot_demo.js" type="text/javascript"></script>
    </body>

</html>