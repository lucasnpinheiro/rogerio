
<div class="ordemServico index large-9 medium-8 columns content">
    <h3><?= __('Ordem Servico') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('valor') ?></th>
                <th><?= $this->Paginator->sort('parcelas') ?></th>
                <th><?= $this->Paginator->sort('dt_vencto') ?></th>
                <th><?= $this->Paginator->sort('cliente_id') ?></th>
                <th><?= $this->Paginator->sort('juros') ?></th>
                <th><?= $this->Paginator->sort('multa') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ordemServico as $ordemServico): ?>
            <tr>
                <td><?= $this->Number->format($ordemServico->id) ?></td>
                <td><?= $this->Number->format($ordemServico->valor) ?></td>
                <td><?= $this->Number->format($ordemServico->parcelas) ?></td>
                <td><?= h($ordemServico->dt_vencto) ?></td>
                <td><?= $ordemServico->has('cliente') ? $this->Html->link($ordemServico->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $ordemServico->cliente->id]) : '' ?></td>
                <td><?= $this->Number->format($ordemServico->juros) ?></td>
                <td><?= $this->Number->format($ordemServico->multa) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ordemServico->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ordemServico->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordemServico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordemServico->id)]) ?>
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
