<?php

?>
<script type="text/javascript">
    var rate_cat_options = <?php echo json_encode($rate_cat_options);?>;
    var filter_rate_cats = <?php echo json_encode($filter_rate_cats);?>;
    var product_group_options = <?php echo json_encode($product_group_options);?>;
    var permissions = <?php echo json_encode($permissions); ?>;
</script>

<div class="workplace">

    <div class="page-header">
        <h1>Products Types <small> Setup</small></h1>
    </div>

    <div class="row-fluid">

        <div class="span12">

            <div class="demo-info" style="margin-bottom:10px">
                <div class="demo-tip icon-tip"></div>
                <div>
                    Click on a row to select it, click again to deselect it.
                    Click the New to add new row.
                    Click on Edit to begin editing on a selected row.
                    Click Save to save the row.
                    Click on Cancel to quit changes to a row.
                </div>
            </div>

            <div class="head clearfix">
                <div class="isw-text_document"></div>
                <h1>Product Types</h1>
            </div>
            <table id="flex" style="display:none;"></table>

        </div>
    </div>

    <div class="dr"><span></span></div>

</div>

<!-- URLs -->
<input type="hidden" id="table-url" value="<?php echo $this->Html->url(array('controller' => 'OtherSetup', 'action' => 'products/get')); ?>" />
<input type="hidden" id="table-editable-url" value="<?php echo $this->Html->url(array('controller' => 'OtherSetup', 'action' => 'products/save')); ?>" />
<input type="hidden" id="grid_delete_url" value="<?php echo $this->Html->url(array('controller' => 'OtherSetup', 'action' => 'products/delete')); ?>" />


<!-- Le Script -->
<?php
    echo $this->Html->script('scripts/product_type_setup.js');
?>
