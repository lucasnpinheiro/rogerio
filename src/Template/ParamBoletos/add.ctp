
<div class="paramBoletos form large-9 medium-8 columns content">
    <?= $this->Form->create($paramBoleto) ?>
    <fieldset>
        <legend><?= __('Add') ?></legend>
        <?php
        echo $this->Form->input('nome', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('banco', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('agencia', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('ccorrente', ['label' => 'Conta Corrente', 'div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('carteira', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('convenio', ['label' => 'Convênio', 'div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('cedente', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->cpf('cpf', ['label' => 'CPF', 'class' => 'cpf', 'div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->numero('nro_seq', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->cep('cep', ['label' => 'CEP', 'class' => 'cep', 'div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('endereco', ['label' => 'Endereço', 'div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->numero('numero', ['label' => 'Número', 'div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('cidade', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('estado', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('instrucao', ['label' => 'Instrução', 'div' => ['class' => 'col-xs-12 col-md-12']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
