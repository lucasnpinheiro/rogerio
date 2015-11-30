
<div class="areceber index large-9 medium-8 columns content">
    <h3><?= __('Areceber') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('nro_docto') ?></th>
                <th><?= $this->Paginator->sort('dt_vencto') ?></th>
                <th><?= $this->Paginator->sort('cliente_id') ?></th>
                <th><?= $this->Paginator->sort('valor') ?></th>
                <th><?= $this->Paginator->sort('parcela') ?></th>
                <th><?= $this->Paginator->sort('vl_juros') ?></th>
                <th><?= $this->Paginator->sort('vl multa') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($areceber as $areceber): ?>
            <tr>
                <td><?= h($areceber->nro_docto) ?></td>
                <td><?= h($areceber->dt_vencto) ?></td>
                <td><?= $areceber->has('cliente') ? $this->Html->link($areceber->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $areceber->cliente->id]) : '' ?></td>
                <td><?= $this->Number->format($areceber->valor) ?></td>
                <td><?= $this->Number->format($areceber->parcela) ?></td>
                <td><?= $this->Number->format($areceber->vl_juros) ?></td>
                <td><?= $this->Number->format($areceber->vl_multa) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $areceber->nro_docto]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $areceber->nro_docto]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $areceber->nro_docto], ['confirm' => __('Are you sure you want to delete # {0}?', $areceber->nro_docto)]) ?>
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
