<?php
/* @var $this DevicesController */
/* @var $model Devices */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'devices-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'brand'); ?>
		<?php echo $form->textArea($model,'brand',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'brand'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'model'); ?>
		<?php echo $form->textArea($model,'model',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'model'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spec'); ?>
		<?php echo $form->textArea($model,'spec',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'spec'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo'); ?>
		<?php echo $form->textArea($model,'photo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'photo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->