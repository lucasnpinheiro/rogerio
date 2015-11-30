<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>

        <!-- Bootstrap Core CSS -->
        <?= $this->Html->css('/css/bootstrap.min.css') ?>
        <?= $this->Html->css('/bower_components/metisMenu/dist/metisMenu.min.css') ?>
        <?= $this->Html->css('/dist/css/timeline.css') ?>
        <?= $this->Html->css('/dist/css/sb-admin-2.css') ?>
        <?= $this->Html->css('/bower_components/morrisjs/morris.css') ?>
        <?= $this->Html->css('/bower_components/font-awesome/css/font-awesome.min.css') ?>
        <?= $this->Html->css('/css/basico.css') ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Rogerio</a>
                </div>


                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                            <li>
                                <?= $this->Html->link('<i class="fa fa-home"></i>  Inicial', '/', ['escape' => false]) ?>
                            </li>
                            <li>
                                <?php echo $this->element('Cadastros'); ?>
                            </li>
                            <li>
                                <?php echo $this->element('Tarefas'); ?>
                            </li>
                            <li>
                                <?php echo $this->element('Financeiro'); ?>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?= $this->fetch('title') ?></h1>
                    </div>

                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <?= $this->Flash->render() ?>
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
                    <div class="col-lg-12">
                        <?php echo $this->fetch('content'); ?>
                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <?php echo $this->Html->script('/js/jquery-1.11.3.min.js') ?>
        <?php echo $this->Html->script('/js/bootstrap.min.js') ?>
        <?php echo $this->Html->script('/bower_components/metisMenu/dist/metisMenu.min.js') ?>
        <?php echo $this->Html->script('/bower_components/raphael/raphael-min.js') ?>
        <?php echo $this->Html->script('/dist/js/sb-admin-2.js') ?>
        <?php echo $this->Html->script('/js/jquery.mask.min.js') ?>
        <?php echo $this->Html->script('/js/Funcoes.js') ?>


    </body>
</html>