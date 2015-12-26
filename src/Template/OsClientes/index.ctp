
<div class="osClientes index large-9 medium-8 columns content">
    <h3><?= __('List') ?></h3>
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
    <table  class="table table-bordered table-condensed table-hover table-striped">
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
                    <td><?= $this->Number->format($osCliente->clientes_id) ?></td>
                    <td><?= $this->Number->format($osCliente->valor) ?></td>
                    <td><?= $this->Number->format($osCliente->parcela) ?></td>
                    <td><?= h($osCliente->dt_vencto) ?></td>
                    <td class="actions">
                        <?php
                        echo $this->Form->dropdownButton('Ações', [
                            $this->Html->link(__('View'), ['action' => 'view', $osCliente->id], ['class' => 'text-center', 'icon' => false]),
                            $this->Html->link(__('Edit'), ['action' => 'edit', $osCliente->id], ['class' => 'text-center', 'icon' => false]),
                            'divider',
                            $this->Form->postLink(__('Delete'), ['action' => 'delete', $osCliente->id], ['class' => 'text-center', 'icon' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $osCliente->id)])
                                ], ['icon' => false]);
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('paginacao'); ?>
</div>
