
<div class="areceber view large-9 medium-8 columns content">
    <h3><?= h($areceber->nro_docto) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nro Docto') ?></th>
            <td><?= h($areceber->nro_docto) ?></td>
        </tr>
        <tr>
            <th><?= __('Cliente') ?></th>
            <td><?= $areceber->has('cliente') ? $this->Html->link($areceber->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $areceber->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($areceber->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor') ?></th>
            <td><?= $this->Number->format($areceber->valor) ?></td>
        </tr>
        <tr>
            <th><?= __('Parcela') ?></th>
            <td><?= $this->Number->format($areceber->parcela) ?></td>
        </tr>
        <tr>
            <th><?= __('Vl Juros') ?></th>
            <td><?= $this->Number->format($areceber->vl_juros) ?></td>
        </tr>
        <tr>
            <th><?= __('Vl Multa') ?></th>
            <td><?= $this->Number->format($areceber->vl_multa) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Recebe') ?></th>
            <td><?= $this->Number->format($areceber->total_recebe) ?></td>
        </tr>
        <tr>
            <th><?= __('Dt Vencto') ?></th>
            <td><?= h($areceber->dt_vencto) ?></td>
        </tr>
        <tr>
            <th><?= __('Dt Recebe') ?></th>
            <td><?= h($areceber->dt_recebe) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($areceber->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modifiel') ?></th>
            <td><?= h($areceber->modifiel) ?></td>
        </tr>
    </table>
</div>
