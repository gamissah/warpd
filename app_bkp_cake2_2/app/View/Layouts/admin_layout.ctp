<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if gt IE 8]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('stylesheets');
    ?>
    <!--[if lt IE 8]><?php echo $this->Html->css('ie7') ?><![endif]-->
    <?php
    echo $this->Html->css('fullcalendar.print.css','stylesheet',array('media'=>'print'));
    echo $this->Html->css('developr-notify');
    echo $this->Html->css('colorbox/colorbox');
    echo $this->Html->css('custom');

    echo $this->Html->script('jquery-1.7.2.min.js');
    echo $this->Html->script('jquery-ui-1.8.21.min.js');
    echo $this->Html->script('plugins/jquery.marquee.min.js');
    echo $this->Html->script('colorbox/jquery.colorbox-min.js');
    echo $this->Html->script('plugins/jquery/jquery.mousewheel.min.js');
    echo $this->Html->script('plugins/cookie/jquery.cookies.2.2.0.min.js');
    echo $this->Html->script('plugins/bootstrap.min.js');
    echo $this->Html->script('developr.notify.js');
    echo $this->Html->script('plugins/sparklines/jquery.sparkline.min.js');
    echo $this->Html->script('plugins/fullcalendar/fullcalendar.min.js');
    echo $this->Html->script('plugins/select2/select2.min.js');
    echo $this->Html->script('plugins/uniform/uniform.js');
    echo $this->Html->script('plugins/maskedinput/jquery.maskedinput-1.3.min.js');
    echo $this->Html->script('plugins/validation/languages/jquery.validationEngine-en.js');
    echo $this->Html->script('plugins/validation/jquery.validationEngine.js');
    echo $this->Html->script('plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js');
    echo $this->Html->script('plugins/animatedprogressbar/animated_progressbar.js');
    echo $this->Html->script('plugins/qtip/jquery.qtip-1.0.0-rc3.min.js');
    echo $this->Html->script('plugins/cleditor/jquery.cleditor.js');
    echo $this->Html->script('plugins/fancybox/jquery.fancybox.pack.js');
    echo $this->Html->script('cookies.js');
    echo $this->Html->script('actions.js');
    echo $this->Html->script('plugins.js');
    echo $this->Html->script('settings.js');
    //echo $this->Html->script('jquery.treeview.js');
    echo $this->Html->script('accounting.min.js');
    echo $this->Html->script('jLib.js');

    echo $scripts_for_layout;
    ?>
</head>
    <body>
        <div class="wrapper">
            <?php echo $this->element('header'); ?>
            <?php echo $this->element('menu'); ?>
            <div class="content">
                <?php echo $this->element('breadcrumbs'); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        <?php //echo $this->element('sql_dump'); ?>
        <?php echo $this->element('footer'); ?>
    </body>
</html>