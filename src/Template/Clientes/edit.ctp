
<div class="clientes form large-9 medium-8 columns content">
    <?=
    $this->Form->create($cliente);
    ?>
    <fieldset>
        <legend><?= __('Edit') ?></legend>
        <?php
        echo $this->Form->input('nome', ['div' => ['class' => 'col-xs-12 col-md-12']]);
        echo $this->Form->cep('cep', ['class' => 'cep', 'div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('endereco', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->numero('numero', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('complemento', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('bairro', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('cidade', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('estado', ['div' => ['class' => 'col-xs-12 col-md-3']]);

        echo $this->Form->input('estado_civil', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('nacionalidade', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('profissao', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->data('dt_nascimento', ['value' => (!empty($cliente->dt_nascimento) ? $cliente->dt_nascimento->format('d/m/Y') : ''), 'empty' => true, 'div' => ['class' => 'col-xs-12 col-md-3']]);
        
        echo $this->Form->input('ctps', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('nit', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->cpf('cpf', ['class' => 'cpf', 'div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('mae', ['div' => ['class' => 'col-xs-12 col-md-12']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
