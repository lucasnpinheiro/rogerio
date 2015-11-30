
<div class="clientes form large-9 medium-8 columns content">
    <?=
    $this->Form->create($cliente);
    ?>
    <fieldset>
        <legend><?= __('Edit Cliente') ?></legend>
        <?php
        echo $this->Form->input('nome');
        echo $this->Form->input('cep', ['class' => 'cep']);
        echo $this->Form->input('endereco');
        echo $this->Form->input('numero');
        echo $this->Form->input('complemento');
        echo $this->Form->input('bairro');
        echo $this->Form->input('cidade');
        echo $this->Form->input('estado');

        echo $this->Form->input('estado_civil');
        echo $this->Form->input('nacionalidade');
        echo $this->Form->input('profissao');
        echo $this->Customizado->data('dt_nascimento', ['value' => $cliente->dt_nascimento->format('d/m/Y'), 'empty' => true]);
        echo $this->Form->input('mae');
        echo $this->Form->input('ctps');
        echo $this->Form->input('nit');
        echo $this->Form->input('cpf', ['class' => 'cpf']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
