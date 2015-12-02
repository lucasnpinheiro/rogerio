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
        <!-- Theme style -->
        <?= $this->Html->css('/dist/css/AdminLTE.min.css') ?>
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <?= $this->Html->css('/plugins/iCheck/square/blue.css') ?>
        <?= $this->fetch('css') ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <?php echo $this->fetch('content'); ?>

        <!-- jQuery 2.1.4 -->
        <?php echo $this->Html->script('/plugins/jQuery/jQuery-2.1.4.min.js') ?>
        <?php echo $this->Html->script('/bootstrap/js/bootstrap.min.js') ?>
        <?php echo $this->Html->script('/plugins/iCheck/icheck.min.js') ?>
        <?php echo $this->fetch('script') ?>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
