
<div class="contratos view large-9 medium-8 columns content">
    <h3><?= h($contrato->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($contrato->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($contrato->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Modelo') ?></h4>
        <?= $this->Text->autoParagraph(h($contrato->modelo)); ?>
    </div>
</div>
