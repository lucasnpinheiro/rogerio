<div class="areceber form large-9 medium-8 columns content">
    <?= $this->Form->create($areceber) ?>
    <fieldset>
        <legend><?= __('Adicionar Contas a Receber') ?></legend>
        <?php
            echo $this->Customizado->data('dt_vencto', ['label'=>'Data Vencimento','empty' => true]);
            echo $this->Form->input('cliente_id', ['options' => $clientes, 'empty' => true]);
            echo $this->Form->input('valor');
            echo $this->Form->input('parcela');
            echo $this->Form->input('vl_juros');
            echo $this->Form->input('vl multa');
            echo $this->Form->input('status');
            echo $this->Customizado->data('dt_recebe', ['empty' => true,'value'=>date('d/m/Y')]);
            echo $this->Form->input('total_recebe');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>