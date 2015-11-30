
<div class="clientes view large-9 medium-8 columns content">
    <h3><?= h($cliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($cliente->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Endereco') ?></th>
            <td><?= h($cliente->endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Numero') ?></th>
            <td><?= h($cliente->numero) ?></td>
        </tr>
        <tr>
            <th><?= __('Complemento') ?></th>
            <td><?= h($cliente->complemento) ?></td>
        </tr>
        <tr>
            <th><?= __('Bairro') ?></th>
            <td><?= h($cliente->bairro) ?></td>
        </tr>
        <tr>
            <th><?= __('Cidade') ?></th>
            <td><?= h($cliente->cidade) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= h($cliente->estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Cep') ?></th>
            <td><?= h($cliente->cep) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado Civil') ?></th>
            <td><?= h($cliente->estado_civil) ?></td>
        </tr>
        <tr>
            <th><?= __('Nacionalidade') ?></th>
            <td><?= h($cliente->nacionalidade) ?></td>
        </tr>
        <tr>
            <th><?= __('Profissao') ?></th>
            <td><?= h($cliente->profissao) ?></td>
        </tr>
        <tr>
            <th><?= __('Mae') ?></th>
            <td><?= h($cliente->mae) ?></td>
        </tr>
        <tr>
            <th><?= __('Ctps') ?></th>
            <td><?= h($cliente->ctps) ?></td>
        </tr>
        <tr>
            <th><?= __('Nit') ?></th>
            <td><?= h($cliente->nit) ?></td>
        </tr>
        <tr>
            <th><?= __('Cpf') ?></th>
            <td><?= h($cliente->cpf) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($cliente->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Dt Nascimento') ?></th>
            <td><?= h($cliente->dt_nascimento) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Areceber') ?></h4>
        <?php if (!empty($cliente->areceber)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Nro Docto') ?></th>
                <th><?= __('Dt Vencto') ?></th>
                <th><?= __('Cliente Id') ?></th>
                <th><?= __('Valor') ?></th>
                <th><?= __('Parcela') ?></th>
                <th><?= __('Vl Juros') ?></th>
                <th><?= __('Vl Multa') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Dt Recebe') ?></th>
                <th><?= __('Total Recebe') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modifiel') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cliente->areceber as $areceber): ?>
            <tr>
                <td><?= h($areceber->nro_docto) ?></td>
                <td><?= h($areceber->dt_vencto) ?></td>
                <td><?= h($areceber->cliente_id) ?></td>
                <td><?= h($areceber->valor) ?></td>
                <td><?= h($areceber->parcela) ?></td>
                <td><?= h($areceber->vl_juros) ?></td>
                <td><?= h($areceber->vl_multa) ?></td>
                <td><?= h($areceber->status) ?></td>
                <td><?= h($areceber->dt_recebe) ?></td>
                <td><?= h($areceber->total_recebe) ?></td>
                <td><?= h($areceber->created) ?></td>
                <td><?= h($areceber->modifiel) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Areceber', 'action' => 'view', $areceber->nro_docto]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Areceber', 'action' => 'edit', $areceber->nro_docto]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Areceber', 'action' => 'delete', $areceber->nro_docto], ['confirm' => __('Are you sure you want to delete # {0}?', $areceber->nro_docto)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ordem Servico') ?></h4>
        <?php if (!empty($cliente->ordem_servico)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Servico') ?></th>
                <th><?= __('Valor') ?></th>
                <th><?= __('Parcelas') ?></th>
                <th><?= __('Dt Vencto') ?></th>
                <th><?= __('Cliente Id') ?></th>
                <th><?= __('Juros') ?></th>
                <th><?= __('Multa') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cliente->ordem_servico as $ordemServico): ?>
            <tr>
                <td><?= h($ordemServico->id) ?></td>
                <td><?= h($ordemServico->servico) ?></td>
                <td><?= h($ordemServico->valor) ?></td>
                <td><?= h($ordemServico->parcelas) ?></td>
                <td><?= h($ordemServico->dt_vencto) ?></td>
                <td><?= h($ordemServico->cliente_id) ?></td>
                <td><?= h($ordemServico->juros) ?></td>
                <td><?= h($ordemServico->multa) ?></td>
                <td><?= h($ordemServico->created) ?></td>
                <td><?= h($ordemServico->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrdemServico', 'action' => 'view', $ordemServico->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrdemServico', 'action' => 'edit', $ordemServico->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrdemServico', 'action' => 'delete', $ordemServico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordemServico->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
