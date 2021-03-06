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
        <!-- DataTables -->
        <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

        <!-- jQuery 2.2.0 -->
        <script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>


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

                        <li>
                            <a href="index.php">
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


                        <li>
                            <a href="listarModelos.php">
                                <i class="fa fa-bookmark-o"></i>
                                <span>Modelos</span>
                            </a>
                        </li>

                        <li>
                            <a href="listarMarcas.php">
                                <i class="fa fa-shield"></i>
                                <span>Marcas</span>
                            </a>
                        </li>

                        <li>
                            <a href="listarOpcionais.php">
                                <i class="fa fa-check-circle-o"></i>
                                <span>Opcionais</span>
                            </a>
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

                        <li class="active">
                            <a href="#">
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
                        Suporte
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-support"></i>WHdev SGC</a></li>
                        <li>Suporte</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">

                            <div class="box">

                                <div class="box-body">

                                    <p align="center">


                                        <img src="images/buoy.png" width="200px" height="200px"/>

                                    </p>

                                    <div class="panel-group">
                                        <div class="panel panel-primary class">
                                            <div class="panel-heading" style="text-align: center; font-size: 20px">Algum problema?
                                            </div>
                                            <div class="panel-body">
                                                <b>Entre em contato por telefone: </b>(54) 8404.4180 <br/>
                                                <b>Entre em contato por e-mail: </b>suporte@whdev.com.br<br/>

                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                </section>

            </div>






    </body>
</html>






