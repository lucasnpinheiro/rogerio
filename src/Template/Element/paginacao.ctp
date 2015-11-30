<div class="paginator">
    <div class="col-xs-12 col-md-5">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
    </div>
    <div class="col-xs-12 col-md-5">
        <?= $this->Paginator->numbers() ?>
    </div>
    <div class="col-xs-12 col-md-2">
        <div class="pagination">
            <?= $this->Paginator->counter() ?>
        </div>
    </div>
</div>