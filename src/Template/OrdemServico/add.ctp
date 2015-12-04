
<div class="ordemServico form large-9 medium-8 columns content">
    <?= $this->Form->create($ordemServico) ?>
    <fieldset>
        <legend><?= __('Add Ordem Servico') ?></legend>
        <?php
            echo $this->Form->input('servico');
            echo $this->Form->moeda('valor');
            echo $this->Form->input('parcelas');
            echo $this->Form->data('dt_vencto', ['empty' => true]);
            echo $this->Form->select2('cliente_id', ['multiple'=>true,'options' => $clientes]);
            echo $this->Form->moeda('juros');
            echo $this->Form->moeda('multa');
            echo $this->Form->input('contrato_id', ['options' => $contratos, 'empty' => true]);
            echo $this->Form->input('modelo', ['type'=>'textarea']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
