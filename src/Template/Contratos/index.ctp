
<div class="contratos index large-9 medium-8 columns content">
    <h3><?= __('Contratos') ?></h3>
    <div>
        <?php
        echo $this->Form->create(null, [
            'inline' => true,
            'label' => false
        ]);
        echo $this->Form->input('nome', [ 'label' => false, 'placeholder' => 'Nome']);
        echo $this->Form->input('modelo', [ 'label' => false, 'placeholder' => 'Modelo']);
        echo $this->Form->button('Consultar', ['type' => 'submit', 'icon' => 'search']);
        echo $this->Form->end();
        ?>
    </div>
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
                            $this->Html->link(__('View'), ['action' => 'view', $contrato->id], ['class' => 'text-center', 'icon' => false]),
                            $this->Html->link(__('Edit'), ['action' => 'edit', $contrato->id], ['class' => 'text-center', 'icon' => false]),
                            'divider',
                            $this->Form->postLink(__('Delete'), ['action' => 'delete', $contrato->id], ['class' => 'text-center', 'icon' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $contrato->id)])
                                ], ['icon' => false]);
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('paginacao'); ?>
</div>
