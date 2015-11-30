<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Os Cliente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Areceber'), ['controller' => 'Areceber', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Areceber'), ['controller' => 'Areceber', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="osClientes index large-9 medium-8 columns content">
    <h3><?= __('Os Clientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('ordem_servido_id') ?></th>
                <th><?= $this->Paginator->sort('clientes id') ?></th>
                <th><?= $this->Paginator->sort('valor') ?></th>
                <th><?= $this->Paginator->sort('parcela') ?></th>
                <th><?= $this->Paginator->sort('dt_vencto') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($osClientes as $osCliente): ?>
            <tr>
                <td><?= $this->Number->format($osCliente->id) ?></td>
                <td><?= $this->Number->format($osCliente->ordem_servido_id) ?></td>
                <td><?= $this->Number->format($osCliente->clientes id) ?></td>
                <td><?= $this->Number->format($osCliente->valor) ?></td>
                <td><?= $this->Number->format($osCliente->parcela) ?></td>
                <td><?= h($osCliente->dt_vencto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $osCliente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $osCliente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $osCliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $osCliente->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
