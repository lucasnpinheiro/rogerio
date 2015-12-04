
<div class="clientes form large-9 medium-8 columns content">
    <?=
    $this->Form->create($cliente);
    ?>
    <fieldset>
        <legend><?= __('Edit Cliente') ?></legend>
        <?php
        echo $this->Form->input('nome');
        echo $this->Form->cep('cep', ['class' => 'cep']);
        echo $this->Form->input('endereco');
        echo $this->Form->numero('numero');
        echo $this->Form->input('complemento');
        echo $this->Form->input('bairro');
        echo $this->Form->input('cidade');
        echo $this->Form->input('estado');

        echo $this->Form->input('estado_civil');
        echo $this->Form->input('nacionalidade');
        echo $this->Form->input('profissao');
        echo $this->Form->data('dt_nascimento', ['value' => (!empty($cliente->dt_nascimento) ? $cliente->dt_nascimento->format('d/m/Y') : ''), 'empty' => true]);
        echo $this->Form->input('mae');
        echo $this->Form->input('ctps');
        echo $this->Form->input('nit');
        echo $this->Form->cpf('cpf', ['class' => 'cpf']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
