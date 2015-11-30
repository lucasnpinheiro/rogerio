<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Cadastros<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">
    <li>
        <?= $this->Html->link('Usuarios', ['controller' => 'Usuarios', 'action' => 'add']) ?>
    </li>
    <li>
        <?= $this->Html->link('Parametros Boletos', ['controller' => 'ParamBoletos', 'action' => 'add']) ?>
    </li>
    <li>
        <?= $this->Html->link('Clientes', ['controller' => 'Clientes', 'action' => 'add']) ?>
    </li>
    <li>
        <?= $this->Html->link('Contratos', ['controller' => 'Contratos', 'action' => 'add']) ?>
    </li>

</ul>
<!-- /.nav-second-level -->