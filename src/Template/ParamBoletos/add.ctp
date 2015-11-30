
<div class="paramBoletos form large-9 medium-8 columns content">
    <?= $this->Form->create($paramBoleto) ?>
    <fieldset>
        <legend><?= __('Add Param Boleto') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('banco');
            echo $this->Form->input('agencia');
            echo $this->Form->input('ccorrente');
            echo $this->Form->input('carteira');
            echo $this->Form->input('convenio');
            echo $this->Form->input('cedente');
            echo $this->Form->input('cpf');
            echo $this->Form->input('nro_seq');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
