
<div class="contratos form large-9 medium-8 columns content">
    <?= $this->Form->create($contrato) ?>
    <fieldset>
        <legend><?= __('Add') ?></legend>
        <?php
        echo $this->Form->input('servico_id');
        echo $this->Form->input('valor');
        echo $this->Form->input('');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
