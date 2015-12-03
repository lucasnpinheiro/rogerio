<div class="areceber form large-9 medium-8 columns content">
    <?= $this->Form->create($areceber) ?>
    <fieldset>
        <legend><?= __('Adicionar Contas a Receber') ?></legend>
        <?php
        echo $this->MyForm->data('dt_vencto', ['label' => 'Data Vencimento', 'empty' => true]);
        echo $this->Form->input('cliente_id', ['options' => $clientes, 'empty' => true]);
        echo $this->MyForm->moeda('valor');
        echo $this->Form->input('parcela');
        echo $this->MyForm->moeda('vl_juros');
        echo $this->MyForm->moeda('vl multa');
        echo $this->Form->input('status');
        echo $this->MyForm->data('dt_recebe', ['empty' => true, 'value' => date('d/m/Y')]);
        echo $this->MyForm->moeda('total_recebe');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
