
<div class="contratos index large-9 medium-8 columns content">
    <h3><?= __('Contratos') ?></h3>
    <table  class="table table-bordered table-condensed table-hover table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contratos as $contrato): ?>
                <tr>
                    <td><?= $this->Number->format($contrato->id) ?></td>
                    <td><?= h($contrato->nome) ?></td>
                    <td class="actions">
                        <?php
                        echo $this->Form->dropdownButton('Ações', [
                            $this->Html->link(__('View'), ['action' => 'view', $contrato->id]),
                            $this->Html->link(__('Edit'), ['action' => 'edit', $contrato->id]),
                            'divider',
                            $this->Form->postLink(__('Delete'), ['action' => 'delete', $contrato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->id)])
                        ]);
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('paginacao'); ?>
</div>
