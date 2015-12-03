
<div class="areceber form large-9 medium-8 columns content">
    <?php
    echo $this->Form->create($areceber);?>
    <fieldset>
        <legend><?= __('Edit Areceber') ?></legend>
        <?php
        echo $this->MyForm->data('dt_vencto', ['empty' => true, 'value' => $areceber->dt_vencto->format('d/m/Y')]);
        echo $this->Form->input('cliente_id', ['options' => $clientes, 'empty' => true]);
        echo $this->MyForm->moeda('valor');
        echo $this->Form->input('parcela');
        echo $this->MyForm->moeda('vl_juros');
        echo $this->MyForm->moeda('vl multa');
        echo $this->Form->input('status');
        echo $this->MyForm->data('dt_recebe', ['value' => is_null($areceber->dt_recebe) ? '' : $areceber->dt_recebe->format('d/m/Y'), 'empty' => true]);
        echo $this->MyForm->moeda('total_recebe');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</div>
