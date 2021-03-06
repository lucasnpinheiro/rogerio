<div class="areceber index large-9 medium-8 columns content">
    <h3><?= __('Areceber') ?></h3>
    <div>
        <?php
        echo $this->Form->create(null, [
            'inline' => true,
            'label' => false
        ]);
        echo $this->Form->input('nro_docto', [ 'label' => false, 'placeholder' => 'Número do Documento']);
        echo $this->Form->data('dt_vencto', [ 'label' => false, 'placeholder' => 'Data de Vencimento']);
        echo $this->Form->select2('cliente_id', ['options' => $clientes, 'label' => false, 'empty' => 'Cliente']);
        echo $this->Form->button('Consultar', ['type' => 'submit', 'icon' => 'search']);
        echo $this->Form->end();
        ?>
    </div>
    <table class="table table-bordered table-condensed table-hover table-striped">
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
                    <td><?= $areceber->has('cliente') ? $this->Html->link($areceber->cliente->nome, ['controller' => 'Clientes', 'action' => 'view', $areceber->cliente->id]) : '' ?></td>
                    <td><?= $this->Number->format($areceber->valor) ?></td>
                    <td><?= $this->Number->format($areceber->parcela) ?></td>
                    <td><?= $this->Number->format($areceber->vl_juros) ?></td>
                    <td><?= $this->Number->format($areceber->vl_multa) ?></td>
                    <td class="actions">
                        <?php
                        echo $this->Form->dropdownButton('Ações', [
                            $this->Html->link(__('View'), ['action' => 'view', $areceber->id], ['class' => 'text-center', 'icon' => false]),
                            $this->Html->link(__('Edit'), ['action' => 'edit', $areceber->id], ['class' => 'text-center', 'icon' => false]),
                            'divider',
                            $this->Form->postLink(__('Delete'), ['action' => 'delete', $areceber->id], ['class' => 'text-center', 'icon' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $areceber->id)])
                                ], ['icon' => false]);
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('paginacao'); ?>
</div>
