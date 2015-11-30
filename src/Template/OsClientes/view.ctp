
<div class="osClientes view large-9 medium-8 columns content">
    <h3><?= h($osCliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($osCliente->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ordem Servido Id') ?></th>
            <td><?= $this->Number->format($osCliente->ordem_servido_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Clientes Id') ?></th>
            <td><?= $this->Number->format($osCliente->clientes_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor') ?></th>
            <td><?= $this->Number->format($osCliente->valor) ?></td>
        </tr>
        <tr>
            <th><?= __('Parcela') ?></th>
            <td><?= $this->Number->format($osCliente->parcela) ?></td>
        </tr>
        <tr>
            <th><?= __('Dt Vencto') ?></th>
            <td><?= h($osCliente->dt_vencto) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Areceber') ?></h4>
        <?php if (!empty($osCliente->areceber)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Nro Docto') ?></th>
                <th><?= __('Dt Vencto') ?></th>
                <th><?= __('Cliente Id') ?></th>
                <th><?= __('Valor') ?></th>
                <th><?= __('Parcela') ?></th>
                <th><?= __('Vl Juros') ?></th>
                <th><?= __('Vl Multa') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Dt Recebe') ?></th>
                <th><?= __('Total Recebe') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Os Cliente Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($osCliente->areceber as $areceber): ?>
            <tr>
                <td><?= h($areceber->nro_docto) ?></td>
                <td><?= h($areceber->dt_vencto) ?></td>
                <td><?= h($areceber->cliente_id) ?></td>
                <td><?= h($areceber->valor) ?></td>
                <td><?= h($areceber->parcela) ?></td>
                <td><?= h($areceber->vl_juros) ?></td>
                <td><?= h($areceber->vl_multa) ?></td>
                <td><?= h($areceber->status) ?></td>
                <td><?= h($areceber->dt_recebe) ?></td>
                <td><?= h($areceber->total_recebe) ?></td>
                <td><?= h($areceber->created) ?></td>
                <td><?= h($areceber->modified) ?></td>
                <td><?= h($areceber->os_cliente_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Areceber', 'action' => 'view', $areceber->nro_docto]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Areceber', 'action' => 'edit', $areceber->nro_docto]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Areceber', 'action' => 'delete', $areceber->nro_docto], ['confirm' => __('Are you sure you want to delete # {0}?', $areceber->nro_docto)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
