<!-- START HEADER-->
<header class="header">
    <div class="page-brand">
        <a class="link" href="<?= base_url() ?>welcome">
            <span class="brand">
                <span class="brand-tip">INTRATIC</span>
            </span>
            <span class="brand-mini">INTRA</span>
        </a>
    </div>
    <div class="flexbox flex-1">
        <!-- START TOP-LEFT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li>
                <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
            </li>
            <li>
                <form class="navbar-search" method="post" action="<?= base_url() ?>welcome/pesquisarPost">
                    <div class="rel">
                        <span class="search-icon"><i class="ti-search"></i></span>
                        <input name="chave" class="form-control" placeholder="Procure aqui...">
                    </div>
                </form>
            </li>
            <li>
                <a href="<?= base_url() ?>sala/listar_telefones" class="btn btn-link">Telefones</a>
            </li>
        </ul>
        <!-- END TOP-LEFT TOOLBAR-->
        <!-- START TOP-RIGHT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li class="dropdown dropdown-user">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    <img src="<?= base_url() ?>/assets/img/admin-avatar.png" />
                    <span></span><?= $this->session->userdata('nome_usuario') ?><i class="fa fa-angle-down m-l-5"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <!--<a class="dropdown-item" href="#"><i class="fa fa-user"></i>Perfil</a>-->
                    <li class="dropdown-divider"></li>
                    <a class="dropdown-item" href="<?= base_url() ?>usuario/sair"><i class="fa fa-power-off"></i>Sair</a>
                </ul>
            </li>
        </ul>
        <!-- END TOP-RIGHT TOOLBAR-->
    </div>
</header>
<!-- END HEADER-->
<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="<?= base_url() ?>assets/img/admin-avatar.png" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong"><?= $this->session->userdata('nome_usuario') ?></div>
                <small><?= $this->session->userdata('descricao') ?></small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="<?= base_url() ?>welcome/dashboard"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>administracao"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Administração</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>diretorio"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Diretorio</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>conversa"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Conversas</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>welcome/dashboard"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Jornal Escolar</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>anuncio"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Anuncios</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>anuncio"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Sites</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>evento"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Eventos</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>evento"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Grupos de Discussão</span>
                </a>
            </li>
        </ul>
    </div>
</nav>