<div class="areceber form large-9 medium-8 columns content">
    <?= $this->Form->create($areceber) ?>
    <fieldset>
        <legend><?= __('Adicionar Contas a Receber') ?></legend>
        <?php
        echo $this->Form->data('dt_vencto', ['label' => 'Data Vencimento', 'empty' => true]);
        echo $this->Form->input('cliente_id', ['options' => $clientes, 'empty' => true]);
        echo $this->Form->moeda('valor');
        echo $this->Form->input('parcela');
        echo $this->Form->moeda('vl_juros');
        echo $this->Form->moeda('vl multa');
        echo $this->Form->input('status');
        echo $this->Form->data('dt_recebe', ['empty' => true, 'value' => date('d/m/Y')]);
        echo $this->Form->moeda('total_recebe');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
