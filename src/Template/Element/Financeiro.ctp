<a href="#">
    <i class="fa fa-balance-scale"></i> <span>Financeiro</span> <i class="fa fa-angle-left pull-right"></i>
</a>
<ul class="treeview-menu">
   <li>
        <?= $this->Html->link('Contas a Receber', ['controller' => 'Areceber', 'action' => 'index'], ['icon' => false]) ?>
    </li>
    <li>
        <?= $this->Html->link('Adicionar Contas a Receber', ['controller' => 'Areceber', 'action' => 'add'], ['icon' => false]) ?>
    </li>
</ul>