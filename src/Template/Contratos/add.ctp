
<div class="contratos form large-9 medium-8 columns content">
    <?= $this->Form->create($contrato) ?>
    <fieldset>
        <legend><?= __('Add') ?></legend>
        <?php
        echo $this->Form->input('nome', ['div' => ['class' => 'col-xs-12 col-md-12']]);
        echo $this->Form->input('modelo', ['div' => ['class' => 'col-xs-12 col-md-12']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
