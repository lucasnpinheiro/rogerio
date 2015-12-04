<a href="#">
    <i class="fa fa-cogs"></i> <span>Tarefas</span> <i class="fa fa-angle-left pull-right"></i>
</a>
<ul class="treeview-menu">
    <li>
        <?= $this->Html->link('Ordem de Servico', ['controller' => 'OrdemServico', 'action' => 'add'], ['icon' => false]) ?>
    </li>
</ul>