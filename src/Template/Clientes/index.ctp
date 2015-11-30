
<div class="clientes index large-9 medium-8 columns content">
    <h3><?= __('Clientes') ?></h3>
    <table  class="table table-bordered table-condensed table-hover table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('endereco','Endereço') ?></th>
                <th><?= $this->Paginator->sort('numero', 'Número') ?></th>
                <th><?= $this->Paginator->sort('complemento') ?></th>
                <th><?= $this->Paginator->sort('bairro') ?></th>
                <th><?= $this->Paginator->sort('cidade') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                    <td><?= h($cliente->nome) ?></td>
                    <td><?= h($cliente->endereco) ?></td>
                    <td><?= h($cliente->numero) ?></td>
                    <td><?= h($cliente->complemento) ?></td>
                    <td><?= h($cliente->bairro) ?></td>
                    <td><?= h($cliente->cidade) ?></td>
                    <td class="actions">
                        <?php
                        echo $this->Form->dropdownButton('Ações', [
                            $this->Html->link(__('View'), ['action' => 'view', $cliente->id]),
                            $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id]),
                            
                            'divider',
                            $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)])
                        ]);
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('paginacao'); ?>
</div>