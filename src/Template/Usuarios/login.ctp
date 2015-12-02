<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Rogerio </b>Advogado</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg"><?= $this->Flash->render('auth') ?></p>

        <?= $this->Form->create(null, ['url' => '/login']) ?>
        <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="senha" class="form-control" placeholder="Senha">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <!-- /.col -->
            <div class="col-xs-12 text-center">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
            </div>
            <!-- /.col -->
        </div>
        <?= $this->Form->end() ?>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->