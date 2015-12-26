
<div class="paramBoletos index large-9 medium-8 columns content">
    <h3><?= __('List') ?></h3>
    <div>
        <?php
        echo $this->Form->create(null, [
            'inline' => true,
            'label' => false
        ]);
        echo $this->Form->input('nome', [ 'label' => false, 'placeholder' => 'Nome']);
        echo $this->Form->input('banco', [ 'label' => false, 'placeholder' => 'Banco']);
        echo $this->Form->input('agencia', [ 'label' => false, 'placeholder' => 'Agência']);
        echo $this->Form->button('Consultar', ['type' => 'submit', 'icon' => 'search']);
        echo $this->Form->end();
        ?>
    </div>
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
                            $this->Html->link(__('View'), ['action' => 'view', $paramBoleto->id], ['class' => 'text-center', 'icon' => false]),
                            $this->Html->link(__('Edit'), ['action' => 'edit', $paramBoleto->id], ['class' => 'text-center', 'icon' => false]),
                            'divider',
                            $this->Form->postLink(__('Delete'), ['action' => 'delete', $paramBoleto->id], ['class' => 'text-center', 'icon' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $paramBoleto->id)])
                                ], ['icon' => false]);
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('paginacao'); ?>
</div>
