
<div class="osClientes form large-9 medium-8 columns content">
    <?= $this->Form->create($osCliente) ?>
    <fieldset>
        <legend><?= __('Edit') ?></legend>
        <?php
        echo $this->Form->input('ordem_servido_id', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('clientes id', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('valor', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('parcela', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('dt_vencto', ['empty' => true, 'div' => ['class' => 'col-xs-12 col-md-3']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
