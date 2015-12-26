<div class="areceber form large-9 medium-8 columns content">
    <?= $this->Form->create($areceber) ?>
    <fieldset>
        <legend><?= __('Adicionar Contas a Receber') ?></legend>
        <?php
        echo $this->Form->input('cliente_id', ['options' => $clientes, 'empty' => true, 'div' => ['class' => 'col-xs-12 col-md-12']]);
        echo $this->Form->data('dt_vencto', ['label' => 'Data Vencimento', 'empty' => true, 'div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->moeda('valor', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('parcela', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->moeda('vl_juros', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->moeda('vl multa', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->receber('status', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->data('dt_recebe', ['empty' => true, 'value' => date('d/m/Y'), 'div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->moeda('total_recebe', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
