
<div class="ordemServico form large-9 medium-8 columns content">
    <?= $this->Form->create($ordemServico) ?>
    <fieldset>
        <legend><?= __('Add Ordem Servico') ?></legend>
        <?php
        echo $this->Form->input('servico', ['div' => ['class' => 'col-xs-12 col-md-12']]);
        echo $this->Form->select2('cliente_id', ['multiple' => true, 'options' => $clientes, 'div' => ['class' => 'col-xs-12 col-md-12']]);
        echo $this->Form->moeda('valor', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('parcelas', ['div' => ['class' => 'col-xs-12 col-md-2']]);
        echo $this->Form->data('dt_vencto', ['empty' => true, 'div' => ['class' => 'col-xs-12 col-md-3']]);

        echo $this->Form->moeda('juros', ['div' => ['class' => 'col-xs-12 col-md-2']]);
        echo $this->Form->moeda('multa', ['div' => ['class' => 'col-xs-12 col-md-2']]);
        echo $this->Form->input('contrato_id', ['options' => $contratos, 'empty' => true, 'div' => ['class' => 'col-xs-12 col-md-12']]);
        echo $this->Form->input('modelo', ['type' => 'textarea', 'div' => ['class' => 'col-xs-12 col-md-12']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
