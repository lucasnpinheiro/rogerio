
<div class="ordemServico index large-9 medium-8 columns content">
    <h3><?= __('Ordem Servico') ?></h3>
    <table  class="table table-bordered table-condensed table-hover table-striped">
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
                        <?php
                        echo $this->Form->dropdownButton('Ações', [
                            $this->Html->link(__('View'), ['action' => 'view', $ordemServico->id]),
                            $this->Html->link(__('Edit'), ['action' => 'edit', $ordemServico->id]),
                            $this->Html->link(__('Boletos'), ['action' => 'imprimir_boletos', $ordemServico->id]),
                            'divider',
                            $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordemServico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordemServico->id)])
                        ]);
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('paginacao'); ?>
</div>