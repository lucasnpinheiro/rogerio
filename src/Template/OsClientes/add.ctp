<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Os Clientes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Areceber'), ['controller' => 'Areceber', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Areceber'), ['controller' => 'Areceber', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="osClientes form large-9 medium-8 columns content">
    <?= $this->Form->create($osCliente) ?>
    <fieldset>
        <legend><?= __('Add Os Cliente') ?></legend>
        <?php
            echo $this->Form->input('ordem_servido_id');
            echo $this->Form->input('clientes id');
            echo $this->Form->input('valor');
            echo $this->Form->input('parcela');
            echo $this->Form->input('dt_vencto', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
