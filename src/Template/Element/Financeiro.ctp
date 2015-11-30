<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Financeiro<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">
    <li>
        <?= $this->Html->link('Contas a Receber', ['controller' => 'Areceber', 'action' => 'index']) ?>
    </li>
    <li>
        <?= $this->Html->link('Adicionar Contas a Receber', ['controller' => 'Areceber', 'action' => 'add']) ?>
    </li>

</ul>
