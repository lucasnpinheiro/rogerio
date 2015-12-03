
<div class="ordemServico form large-9 medium-8 columns content">
    <?= $this->Form->create($ordemServico) ?>
    <fieldset>
        <legend><?= __('Edit Ordem Servico') ?></legend>
        <?php
            echo $this->Form->input('servico');
            echo $this->MyForm->moeda('valor');
            echo $this->Form->input('parcelas');
            echo $this->MyForm->data('dt_vencto', ['empty' => true]);
            echo $this->MyForm->select2('cliente_id', ['multiple'=>true,'options' => $clientes]);
            echo $this->MyForm->moeda('juros');
            echo $this->MyForm->moeda('multa');
            echo $this->Form->input('contrato_id', ['options' => $contratos, 'empty' => true]);
            echo $this->Form->input('modelo', ['type'=>'textarea']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
