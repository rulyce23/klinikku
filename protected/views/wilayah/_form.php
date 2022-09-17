<?php
/* @var $this WilayahController */
/* @var $model Wilayah */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'wilayah-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama wilayah'); ?>
		<?php echo $form->textField($model,'nm_wilayah',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nm_wilayah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kode pos'); ?>
		<?php echo $form->textField($model,'kodepos',array('size'=>60,'maxlength'=>155)); ?>
		<?php echo $form->error($model,'kodepos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kecamatan'); ?>
		<?php echo $form->textField($model,'kecamatan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'kecamatan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->