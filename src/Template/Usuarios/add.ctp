
<div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Cadastrar Usuarios') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('username');
            echo $this->Form->input('senha');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
