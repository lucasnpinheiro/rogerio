
<div class="paramBoletos index large-9 medium-8 columns content">
    <h3><?= __('Param Boletos') ?></h3>
    <table  class="table table-bordered table-condensed table-hover table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('banco') ?></th>
                <th><?= $this->Paginator->sort('agencia') ?></th>
                <th><?= $this->Paginator->sort('ccorrente') ?></th>
                <th><?= $this->Paginator->sort('carteira') ?></th>
                <th><?= $this->Paginator->sort('convenio') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paramBoletos as $paramBoleto): ?>
                <tr>
                    <td><?= $this->Number->format($paramBoleto->id) ?></td>
                    <td><?= h($paramBoleto->nome) ?></td>
                    <td><?= h($paramBoleto->banco) ?></td>
                    <td><?= h($paramBoleto->agencia) ?></td>
                    <td><?= h($paramBoleto->ccorrente) ?></td>
                    <td><?= h($paramBoleto->carteira) ?></td>
                    <td><?= h($paramBoleto->convenio) ?></td>
                    <td class="actions">
                        <?php
                        echo $this->Form->dropdownButton('Ações', [
                            $this->Html->link(__('View'), ['action' => 'view', $paramBoleto->id]),
                            $this->Html->link(__('Edit'), ['action' => 'edit', $paramBoleto->id]),
                            'divider',
                            $this->Form->postLink(__('Delete'), ['action' => 'delete', $paramBoleto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paramBoleto->id)])
                        ]);
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('paginacao'); ?>
</div>
