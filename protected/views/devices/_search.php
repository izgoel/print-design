<?php
/* @var $this DevicesController */
/* @var $model Devices */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brand'); ?>
		<?php echo $form->textArea($model,'brand',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'model'); ?>
		<?php echo $form->textArea($model,'model',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spec'); ?>
		<?php echo $form->textArea($model,'spec',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'photo'); ?>
		<?php echo $form->textArea($model,'photo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->