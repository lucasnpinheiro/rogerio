<a href="#"><i class="fa fa-balance-scale fa-fw"></i> Financeiro<span class="fa arrow"></span></a>
<ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
    <li>
        <?= $this->Html->link('Contas a Receber', ['controller' => 'Areceber', 'action' => 'index']) ?>
    </li>
    <li>
        <?= $this->Html->link('Adicionar Contas a Receber', ['controller' => 'Areceber', 'action' => 'add']) ?>
    </li>

</ul>
