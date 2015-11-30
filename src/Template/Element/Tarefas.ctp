<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Tarefas<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">
    <li>
        <?= $this->Html->link('Ordem de Servico', ['controller' => 'OrdemServico', 'action' => 'add']) ?>
    </li>
    <li>
        <?= $this->Html->link('Emitir Contratos', ['controller' => 'Contratos', 'action' => 'emitir']) ?>
    </li>

</ul>
