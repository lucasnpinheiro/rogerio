
<div class="ordemServico form large-9 medium-8 columns content">
    <?= $this->Form->create($ordemServico) ?>
    <fieldset>
        <legend><?= __('Add Ordem Servico') ?></legend>
        <?php
            echo $this->Form->input('servico');
            echo $this->Form->input('valor');
            echo $this->Form->input('parcelas');
            echo $this->Customizado->data('dt_vencto', ['empty' => true]);
            echo $this->Form->input('cliente_id', ['multiple'=>true,'options' => $clientes, 'empty' => true]);
            echo $this->Form->input('juros');
            echo $this->Form->input('multa');
            echo $this->Form->input('contrato_id', ['options' => $contratos, 'empty' => true]);
            echo $this->Form->input('modelo', ['type'=>'textarea']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
