<?php
/* @var $this DokterController */
/* @var $model Dokter */
/* @var $form CActiveForm */
?>
<link rel="stylesheet" href="./css/formstyle.css">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dokter-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nm_dokter'); ?>
		<?php echo $form->textField($model,'nm_dokter',array('size'=>60,'maxlength'=>155),['class'=>'text']); ?>
		<?php echo $form->error($model,'nm_dokter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat_dokter'); ?>
		<?php echo $form->textArea($model,'alamat_dokter',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat_dokter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telepon'); ?>
		<?php echo $form->textField($model,'telepon',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'telepon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spesialis'); ?>
		<?php echo $form->textField($model,'spesialis',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'spesialis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarif'); ?>
		<?php echo $form->textField($model,'tarif',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tarif'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->