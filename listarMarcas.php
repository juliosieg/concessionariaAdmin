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
        <!-- Funções da página de listagem de marcas -->
        <script src="js/listarMarcas.js"></script>
        <!-- DataTables -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!--Bootstrap Notify -->
        <script src="js/bootstrap-notify-master/bootstrap-notify-master/bootstrap-notify.js"></script>
        <!-- Bootbox Alert -->
        <script src="js/bootbox.js"></script>


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

                        <li class="active">
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
                        Marcas
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-shield"></i>WHdev SGC</a></li>
                        <li class="active">Marcas</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">

                            <div class="box">

                                <div class="box-body">
                                    <form>
                                        <h3>Inserção de Marcas</h3>
                                        <fieldset class="form-group">
                                            <label for="descricaoMarca">Descrição</label>
                                            <input type="text" class="form-control" id="descricaoMarca" placeholder="Descrição da Marca">
                                        </fieldset>
                                        <input type="button" onclick="inserirNovaMarca()" class="btn btn-primary" value="Inserir"/>
                                    </form>

                                    <h3>Listagem de Marcas</h3><br/>

                                    <table id="tableMarcas" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width='10%'>ID</th>
                                                <th width='80%'>Descrição</th>
                                                <th width='10%'>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                </section>

            </div>

            <!--Modal Edição-->
            <div id="modalEditarMarca" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Editar Marca</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="idEditarMarca">ID:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="idEditarMarca">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="descricaoEditarMarca">Descrição:</label>
                                    <div class="col-sm-10"> 
                                        <input type="text" class="form-control" id="descricaoEditarMarca">
                                    </div>
                                </div>
                            </form>

                            <div id="erroAlteracaoDescricaoVazia" class="alert alert-danger fade in">
                                <a href="#" class="close alert-close">&times;</a>
                                <strong>Erro!</strong> Valor da descrição não pode ser vazio.
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" onclick="salvarAlteracoes()">Salvar Alterações</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->



    </body>
</html>






