
<div class="paramBoletos form large-9 medium-8 columns content">
    <?= $this->Form->create($paramBoleto) ?>
    <fieldset>
        <legend><?= __('Editar Parâmetros de Boletos') ?></legend>
        <?php
        echo $this->Form->input('nome');
        echo $this->Form->input('banco');
        echo $this->Form->input('agencia');
        echo $this->Form->input('ccorrente');
        echo $this->Form->input('carteira');
        echo $this->Form->input('convenio');
        echo $this->Form->input('cedente');
        echo $this->Form->input('cpf', ['class' => 'cpf']);
        echo $this->Form->input('nro_seq');
        echo $this->Form->input('cep', ['class' => 'cep']);
        echo $this->Form->input('endereco');
        echo $this->Form->input('numero');
        echo $this->Form->input('cidade');
        echo $this->Form->input('estado');
        echo $this->Form->input('instrucao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>