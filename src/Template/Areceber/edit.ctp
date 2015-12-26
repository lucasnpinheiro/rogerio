
<div class="areceber form large-9 medium-8 columns content">
    <?php echo $this->Form->create($areceber); ?>
    <fieldset>
        <legend><?= __('Edit Areceber') ?></legend>
        <?php
        echo $this->Form->data('dt_vencto', ['div' => ['class' => 'col-xs-12 col-md-3'], 'empty' => true, 'value' => $areceber->dt_vencto->format('d/m/Y')]);
        echo $this->Form->input('cliente_id', ['div' => ['class' => 'col-xs-12 col-md-3'], 'options' => $clientes, 'empty' => true]);
        echo $this->Form->moeda('valor', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->numero('parcela', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->juros('vl_juros', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->moeda('vl multa', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->receber('status', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->data('dt_recebe', ['div' => ['class' => 'col-xs-12 col-md-3'], 'value' => is_null($areceber->dt_recebe) ? '' : $areceber->dt_recebe->format('d/m/Y'), 'empty' => true]);
        echo $this->Form->moeda('total_recebe', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
