<div class="workplace">
<?php //debug($authUser); ?>
    <div class="page-header">
        <h1>Customers Stock <small> Histories</small></h1>
    </div>

    <div class="row-fluid">
        <div class="span12">
            <div class="head clearfix">
                <div class="isw-edit"></div>
                <h1>Data Filter Options</h1>
            </div>
            <?php echo $this->Form->create('Query', array('id' => 'form-query', 'inputDefaults' => array('label' => false,'div' => false)));?>
            <div class="block-fluid">
                <div class="row-form clearfix" style="border-top-width: 0px; padding: 5px 16px;">
                    <div class="span2" style="width: 80px;">Month:</div>
                    <div class="span2">
                        <?php echo $this->Form->input('month', array('id'=>'month', 'class' => '','default'=>$month,'options'=>$month_lists, 'div' => false, 'label' => false,)); ?>
                    </div>

                    <div class="span2" style="width: 80px;">Year:</div>
                    <div class="span2">
                        <?php echo $this->Form->input('year', array('id'=>'year', 'class' => 'span2 date-masking validate[required]','default'=>$year,'placeholder'=>'yyyy', 'div' => false, 'label' => false,)); ?>
                    </div>

                    <div class="span2" style="width: 80px;">Customer:</div>
                    <div class="span2">
                        <?php echo $this->Form->input('customer', array('id'=>'customer', 'class' => '','default'=>$customer,'options'=>$customer_lists, 'div' => false, 'label' => false,)); ?>
                    </div>
                </div>

                <div class="footer tal">
                    <button class="btn" type="button" id="query-btn">Get Stock History </button>
                </div>
                <?php echo $this->Form->end();?>
            </div>
         </div>
    </div>

    <div class="row-fluid">
        <div class="span12">

            <div class="head clearfix">
                <div class="isw-grid"></div>
                <h1><?php echo $table_title ?></h1>
                <ul class="buttons">
                    <li>
                        <button class="btn btn-success" type="button" id="print-btn">Print </button>
                        <button class="btn btn-success" type="button" id="export-btn">Export </button>
                        <!--<a href="#" class="isw-text_document"> Export</a>-->
                    </li>
                </ul>
            </div>
            <div class="block-fluid" style="padding: 20px;">
                <?php
                foreach($g_data as $d){
                $name = $d['name'];
                ?>
                    <div class="block-fluid without-head">
                        <div class="toolbar nopadding-toolbar clear clearfix">
                            <h4><?php echo $name; ?></h4>
                        </div>
                        <div class="stream" style="padding: 0px 0px 0px;">
                            <div class="item clearfix">
                                <table cellpadding="0" cellspacing="0" width="100%" class="table">
                                    <thead>
                                    <tr>
                                        <?php
                                        foreach($d['data']['t_head'] as $h){
                                            ?>
                                            <th><?php echo $h ;?></th>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($d['data']['t_body_data'] as $tbd_arr){
                                        ?>
                                        <tr>
                                            <?php
                                            foreach($tbd_arr as $key => $v){
                                                if(!is_int($key)){
                                                    ?>
                                                    <td><?php echo $v ;?></td>
                                                <?php
                                                }
                                                else{
                                                    if($v == '-'){
                                                        ?>
                                                        <td><?php echo $v ;?></td>
                                                    <?php
                                                    }
                                                    else{
                                                        ?>
                                                        <td><?php echo $controller->formatNumber($v,'money',0).' ltrs' ;?></td>
                                                    <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>









                <?php
                }
                ?>
            </div>

        </div>
    </div>

    <form id="print-export-form" method="post" action="<?php echo $this->Html->url(array('controller' => 'OmcDealerStock', 'action' => 'print_export_stock_histories')); ?>" target="PrintExportWindow">
        <input type="hidden" name="data_type" id="data_type" value="" />
        <input type="hidden" name="data_month" id="data_month"  value="" />
        <input type="hidden" name="data_year" id="data_year"  value="" />
        <input type="hidden" name="data_tank_type" id="data_tank_type"  value="" />
    </form>

    <div class="dr"><span></span></div>
</div>

<!-- Le Script -->
<?php
    echo $this->Html->script('scripts/dealers/stock_histories.js');
?>
