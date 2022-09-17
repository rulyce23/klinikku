<?php
/* @var $this ObatController */
/* @var $model Obat */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'obat-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nm_obat'); ?>
		<?php echo $form->textField($model,'nm_obat',array('size'=>60,'maxlength'=>155)); ?>
		<?php echo $form->error($model,'nm_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_obat'); ?>
		<?php echo $form->textField($model,'jenis_obat',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'jenis_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aturan_pakai'); ?>
		<?php echo $form->textField($model,'aturan_pakai',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'aturan_pakai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->