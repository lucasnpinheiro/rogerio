
<div class="ordemServico view large-9 medium-8 columns content">
    <h3><?= h($ordemServico->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Cliente') ?></th>
            <td><?= $ordemServico->has('cliente') ? $this->Html->link($ordemServico->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $ordemServico->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($ordemServico->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor') ?></th>
            <td><?= $this->Number->format($ordemServico->valor) ?></td>
        </tr>
        <tr>
            <th><?= __('Parcelas') ?></th>
            <td><?= $this->Number->format($ordemServico->parcelas) ?></td>
        </tr>
        <tr>
            <th><?= __('Juros') ?></th>
            <td><?= $this->Number->format($ordemServico->juros) ?></td>
        </tr>
        <tr>
            <th><?= __('Multa') ?></th>
            <td><?= $this->Number->format($ordemServico->multa) ?></td>
        </tr>
        <tr>
            <th><?= __('Dt Vencto') ?></th>
            <td><?= h($ordemServico->dt_vencto) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($ordemServico->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($ordemServico->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Servico') ?></h4>
        <?= $this->Text->autoParagraph(h($ordemServico->servico)); ?>
    </div>
</div>
