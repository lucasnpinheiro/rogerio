
<div class="paramBoletos view large-9 medium-8 columns content">
    <h3><?= h($paramBoleto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($paramBoleto->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Banco') ?></th>
            <td><?= h($paramBoleto->banco) ?></td>
        </tr>
        <tr>
            <th><?= __('Agencia') ?></th>
            <td><?= h($paramBoleto->agencia) ?></td>
        </tr>
        <tr>
            <th><?= __('Ccorrente') ?></th>
            <td><?= h($paramBoleto->ccorrente) ?></td>
        </tr>
        <tr>
            <th><?= __('Carteira') ?></th>
            <td><?= h($paramBoleto->carteira) ?></td>
        </tr>
        <tr>
            <th><?= __('Convenio') ?></th>
            <td><?= h($paramBoleto->convenio) ?></td>
        </tr>
        <tr>
            <th><?= __('Cedente') ?></th>
            <td><?= h($paramBoleto->cedente) ?></td>
        </tr>
        <tr>
            <th><?= __('Cpf') ?></th>
            <td><?= h($paramBoleto->cpf) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($paramBoleto->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Nro Seq') ?></th>
            <td><?= $this->Number->format($paramBoleto->nro_seq) ?></td>
        </tr>
    </table>
</div>
