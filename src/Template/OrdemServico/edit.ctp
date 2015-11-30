
<div class="ordemServico form large-9 medium-8 columns content">
    <?= $this->Form->create($ordemServico) ?>
    <fieldset>
        <legend><?= __('Edit Ordem Servico') ?></legend>
        <?php
            echo $this->Form->input('servico');
            echo $this->Form->input('valor');
            echo $this->Form->input('parcelas');
            echo $this->Form->input('dt_vencto', ['empty' => true]);
            echo $this->Form->input('cliente_id', ['options' => $clientes, 'empty' => true]);
            echo $this->Form->input('juros');
            echo $this->Form->input('multa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
