
<div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Editar Usuario') ?></legend>
        <?php
        echo $this->Form->input('nome', ['div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('username', ['div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('senha', ['value' => '', 'div' => ['class' => 'col-xs-12 col-md-4']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
