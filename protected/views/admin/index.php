<?php
/* @var $this AdminController */

$this->breadcrumbs=array(
	'Admin',
);
?>
<div class="row-fluid">
    <div class="span3">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
                   'title'=>Yii::t('messages','Our products'),
               ));
               $this->widget('bootstrap.widgets.TbMenu', array(
                   //'items'=>$this->menu,
                   'type'=>'tabs',
                   'stacked'=>'true',
                   'items'=>array(
                        array('label'=>Yii::t('messages','Rubberstamp prices'), 'url'=>array('/admin/index'), 'active'=>'true'),
                        array('label'=>Yii::t('messages','Rubberstamp flash machine'), 'url'=>array('/site/flashstamp')),
                        array('label'=>Yii::t('messages','Rubberstamp service'), 'url'=>array('/site/rubberstamp'))),
                   'htmlOptions'=>array('style'=>'background:#CCFFCC'),
               ));
               $this->endWidget();?>
    </div>
    <div class="span9">
        <!--<h2><?php //echo Yii::t('messages','Rubber stamps and prices');?></h2>-->
        <?php //$this->widget('bootstrap.widgets.TbGridView', array(
//            'type'=>'striped bordered condensed',
//            'dataProvider'=>$dataProvider,
//            'columns'=>array(
//                array('name'=>'name', 'header'=>'Stamp model'),
//                array('name'=>'size', 'header'=>'Stamp size'),
//                array('name'=>'price', 'header'=>'Stamp price', 
//                    'htmlOptions'=>array('style'=>'width: 80px')),
//                ),
//            ));
         ?>
<img src="images/self-inking-stamp-pl01.png" style="width:740px"/>   

<p><?php echo ("your ip address is:".Yii::app()->getRequest()->getUserHostAddress());?></p>
<p><?php ?></p>

<?php echo ("your browser is:".Yii::app()->getRequest()->getUserAgent());?>
    </div><!--span9-->
</div>