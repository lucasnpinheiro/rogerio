
<div class="areceber form large-9 medium-8 columns content">
    <?php
    echo $this->Form->create($areceber);?>
    <fieldset>
        <legend><?= __('Edit Areceber') ?></legend>
        <?php
        echo $this->Form->data('dt_vencto', ['empty' => true, 'value' => $areceber->dt_vencto->format('d/m/Y')]);
        echo $this->Form->input('cliente_id', ['options' => $clientes, 'empty' => true]);
        echo $this->Form->moeda('valor');
        echo $this->Form->numero('parcela');
        echo $this->Form->juros('vl_juros');
        echo $this->Form->moeda('vl multa');
        echo $this->Form->receber('status');
        echo $this->Form->data('dt_recebe', ['value' => is_null($areceber->dt_recebe) ? '' : $areceber->dt_recebe->format('d/m/Y'), 'empty' => true]);
        echo $this->Form->moeda('total_recebe');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</div>
