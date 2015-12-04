
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->fetch('meta') ?>

        <!-- Bootstrap 3.3.5 -->
        <?= $this->Html->css('/bootstrap/css/bootstrap.min.css') ?>
        <!-- Font Awesome -->
        <?= $this->Html->css('/plugins/font-awesome-/css/font-awesome.min.css') ?>
        <!-- Ionicons -->
        <?= $this->Html->css('/css/ionicons.min.css') ?>
        <!-- jvectormap -->
        <?= $this->Html->css('/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>
        <?php echo $this->Html->css('/plugins/bootstrap-datepicker/bootstrap-datepicker.css') ?>
        <!-- Theme style -->

        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <?= $this->fetch('css') ?>
        <?= $this->Html->css('/dist/css/AdminLTE.min.css') ?>
        <?= $this->Html->css('/dist/css/skins/_all-skins.min.css') ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
            var url = "<?php echo $this->Url->build('/', true) ?>";
        </script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>R</b>AD</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Rogerio</b> Advogado</span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php echo $this->Html->image('/img/user.jpg', ['class' => 'user-image', 'alt' => $this->request->session()->read('Auth.User.nome')]) ?>
                                    <span class="hidden-xs"><?php echo $this->request->session()->read('Auth.User.nome'); ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <?php echo $this->Html->image('/img/user.jpg', ['class' => 'img-circle', 'alt' => $this->request->session()->read('Auth.User.nome')]) ?>

                                        <p>
                                            <?php echo $this->request->session()->read('Auth.User.nome'); ?>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <?= $this->Html->link('Sair', ['controller' => 'Usuarios', 'action' => 'logout'], ['class' => 'btn btn-default btn-flat']) ?>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                        </ul>
                    </div>

                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <?= $this->Html->link('<i class="fa fa-home"></i>  <span>Inicial</span>', '/', ['escape' => false, 'icon' => false]) ?>
                        </li>
                        <li class="treeview">
                            <?php echo $this->element('Cadastros'); ?>
                        </li>
                        <li class="treeview">
                            <?php echo $this->element('Tarefas'); ?>
                        </li>
                        <li class="treeview">
                            <?php echo $this->element('Financeiro'); ?>
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
                        <?= $this->fetch('title') ?>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <?php echo $this->Html->link('<i class="fa fa-dashboard"></i>' . __($this->request->params['controller']), '/', ['escape' => false]) ?>
                        </li>
                        <li class="active"><?php echo __(ucwords($this->request->params['action'])); ?></li>
                    </ol>
                    <div class="col-lg-12 text-right">
                        <div class="btn-group" role="group" aria-label="">
                            <?php
                            switch ($this->request->params['action']) {
                                case 'add':
                                    echo $this->Html->link(__('Index'), ['action' => 'index'], ['class' => 'btn btn-info']);
                                    break;
                                case 'edit':
                                    echo $this->Html->link(__('Index'), ['action' => 'index'], ['class' => 'btn btn-info']);
                                    echo $this->Html->link(__('Add'), ['action' => 'add'], ['class' => 'btn btn-success']);
                                    echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $this->request->params['pass'][0]], ['class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $this->request->params['pass'][0])]);

                                    break;

                                default:
                                    echo $this->Html->link(__('Index'), ['action' => 'index'], ['class' => 'btn btn-info']);
                                    echo $this->Html->link(__('Add'), ['action' => 'add'], ['class' => 'btn btn-success']);
                                    break;
                            }
                            ?>
                        </div>
                    </div>
                </section>

                <!-- Main content -->
                <div class="row">
                    <?= $this->Flash->render() ?>

                    <div class="col-lg-12">
                        <?php echo $this->fetch('content'); ?>
                    </div>
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Versão</b> 01.00.01
                </div>
                <strong>Copyright &copy; 2015-<?php echo date('Y') ?> <a href="http://agenciavoxel.com.br">Agência Voxel</a>.</strong> Todos os direitos reservados.
            </footer>

        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.1.4 -->
        <?php echo $this->Html->script('/plugins/jQuery/jQuery-2.1.4.min.js') ?>
        <?php echo $this->Html->script('/bootstrap/js/bootstrap.min.js') ?>
        <?php echo $this->Html->script('/js/jquery.mask.min.js') ?>
        <?php echo $this->Html->script('/js/jquery.maskMoney.min.js') ?>
        <?php echo $this->Html->script('/dist/js/app.min.js') ?>
        <?php echo $this->Html->script('/plugins/bootstrap-datepicker/bootstrap-datepicker.js') ?>
        <?php echo $this->Html->script('/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.js') ?>
        <?php echo $this->Html->script('/js/Funcoes.js') ?>
        <?php echo $this->fetch('script') ?>
    </body>
</html>
