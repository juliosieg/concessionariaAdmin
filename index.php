<html>
    <head>
        <title>WHdev SGC - Sistema Gerenciador de Concessionárias</title>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- Skin -->
        <link rel="stylesheet" href="dist/css/skins/skin-blue.css">

        <!-- jQuery 2.2.0 -->
        <script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>
        <!-- Funções da página de dashboard -->
        <script src="js/dashboard.js"></script>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">

                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><i class="fa fa-automobile" style="padding-top: 15px"></i></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>WHdev</b> SGC</span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        </ul>
                    </div>

                </nav>
            </header>

            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="images/user.jpg" class="img-circle" alt="Imagem de Usuário">
                        </div>
                        <div class="pull-left info">
                            <p>Julio Alexander Sieg</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MENU ADMINISTRATIVO</li>

                        <li class="active">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-key"></i>
                                <span>Entregas</span>
                                <i class="ion-ios-arrow-down pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-plus"></i> Nova entrega</a></li>
                                <li><a href="#"><i class="fa fa-navicon"></i> Listar</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-car"></i>
                                <span>Carros</span>
                                <i class="ion-ios-arrow-down pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-plus"></i> Novo carro</a></li>
                                <li><a href="#"><i class="fa fa-navicon"></i> Listar</a></li>
                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bookmark-o"></i>
                                <span>Modelos</span>
                                <i class="ion-ios-arrow-down pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-plus"></i> Novo modelo</a></li>
                                <li><a href="#"><i class="fa fa-navicon"></i> Listar</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="listarMarcas.php">
                                <i class="fa fa-shield"></i>
                                <span>Marcas</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-check-circle-o"></i>
                                <span>Opcionais</span>
                                <i class="ion-ios-arrow-down pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-plus"></i> Novo opcional</a></li>
                                <li><a href="#"><i class="fa fa-navicon"></i> Listar</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="listarCategorias.php">
                                <i class="fa fa-motorcycle"></i>
                                <span>Categorias</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-flag"></i>
                                <span>Tipos</span>
                                <i class="ion-ios-arrow-down pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-plus"></i> Novo tipo</a></li>
                                <li><a href="#"><i class="fa fa-navicon"></i> Listar</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-odnoklassniki"></i>
                                <span>Perfis</span>
                                <i class="ion-ios-arrow-down pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-plus"></i> Novo perfil</a></li>
                                <li><a href="#"><i class="fa fa-navicon"></i> Listar</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span>Usuários</span>
                                <i class="ion-ios-arrow-down pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-plus"></i> Novo usuário</a></li>
                                <li><a href="#"><i class="fa fa-navicon"></i> Listar</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-eye"></i> <span>Interesses</span>
                            </a>
                        </li>

                        <li>
                            <a href="destaques.php">
                                <i class="fa fa-asterisk"></i> <span>Destaques</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-clipboard"></i> <span>Relatórios</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-gear"></i> <span>Configurações</span>
                            </a>
                        </li>

                        <li>
                            <a href="suporte.php">
                                <i class="fa fa-support"></i> <span>Suporte</span>
                            </a>
                        </li>


                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>WHdev SGC</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total de Visitantes</span>
                                    <span class="info-box-number">1.523</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-blue"><i class="fa fa-facebook"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Curtidas na página</span>
                                    <span class="info-box-number" id="contadorFacebook"></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="fa fa-automobile"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Carros cadastrados</span>
                                    <span class="info-box-number">35</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>


                    <!-- TABLE: LATEST ORDERS -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Interesses</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                    <thead>
                                        <tr>
                                            <th>Cód. Interesse</th>
                                            <th>Carro</th>
                                            <th>Status</th>
                                            <th>Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">101</a></td>
                                            <td>Ford Fiesta</td>
                                            <td><span class="label label-success">Respondido</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">20/05/2016</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">102</a></td>
                                            <td>Ford Focus</td>
                                            <td><span class="label label-warning">Pendente</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f39c12" data-height="20">19/05/2016</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">101</a></td>
                                            <td>Ford Fiesta</td>
                                            <td><span class="label label-success">Respondido</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">20/05/2016</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">102</a></td>
                                            <td>Ford Focus</td>
                                            <td><span class="label label-warning">Pendente</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f39c12" data-height="20">19/05/2016</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">101</a></td>
                                            <td>Ford Fiesta</td>
                                            <td><span class="label label-success">Respondido</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">20/05/2016</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">102</a></td>
                                            <td>Ford Focus</td>
                                            <td><span class="label label-warning">Pendente</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f39c12" data-height="20">19/05/2016</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">102</a></td>
                                            <td>Ford Focus</td>
                                            <td><span class="label label-warning">Pendente</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f39c12" data-height="20">19/05/2016</div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Ver todos os interesses</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
            </div>
            <!-- /.col -->

        </section>

    </div>
</body>
</html>






