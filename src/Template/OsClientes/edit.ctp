
<div class="osClientes form large-9 medium-8 columns content">
    <?= $this->Form->create($osCliente) ?>
    <fieldset>
        <legend><?= __('Edit Os Cliente') ?></legend>
        <?php
            echo $this->Form->input('ordem_servido_id');
            echo $this->Form->input('clientes id');
            echo $this->Form->input('valor');
            echo $this->Form->input('parcela');
            echo $this->Form->input('dt_vencto', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
