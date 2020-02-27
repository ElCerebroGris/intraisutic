<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Dashboard</title>
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
                    <h1 class="page-title">Dashboard</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="la la-home font-20"></i></a>
                        </li>
                        <li class="breadcrumb-item">Dashboard</li>
                    </ol>
                </div>

                <!-- START PAGE CONTENT-->
                <div class="page-content fade-in-up">
                    <?php foreach ($anuncios as $a) { ?>
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?= $a->titulo_anuncio.'<br>'.$a->descricao_anuncio.'<br>Data da criação: '.$a->data_criacao ?>
                        </div>
                    <?php } ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="ibox ibox-warning">
                                <div class="ibox-head">
                                    <div class="ibox-title">Próximos Eventos</div>
                                </div>
                                <div class="ibox-body">
                                    <div class="card-group">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title"><a href="#">Card title</a></h4>
                                                <div class="text-muted card-subtitle">2 days ago</div>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                            <img class="card-img-top" src="<?= base_url() ?>/assets/img/blog/horse.jpg" />
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title"><a href="#">Card title</a></h4>
                                                <div class="text-muted card-subtitle">2 days ago</div>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                            <img class="card-img-top" src="<?= base_url() ?>/assets/img/blog/horse.jpg" />
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title"><a href="#">Card title</a></h4>
                                                <div class="text-muted card-subtitle">2 days ago</div>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                            <img class="card-img-top" src="<?= base_url() ?>/assets/img/blog/horse.jpg" />
                                        </div>
                                    </div>
                                </div>
                                <div class="ibox-footer text-center">
                                    <a href="javascript:;">Ver todos Eventos</a>
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