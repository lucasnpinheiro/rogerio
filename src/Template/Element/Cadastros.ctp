<a href="#">
    <i class="fa fa-file-text"></i> <span>Cadastros</span> <i class="fa fa-angle-left pull-right"></i>
</a>
<ul class="treeview-menu">
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