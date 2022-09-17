<?php
/* @var $this TDatajurnalController */
/* @var $model TDatajurnal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tdatajurnal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Judul'); ?>
		<?php echo $form->textField($model,'Judul',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Judul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penulis'); ?>
		<?php echo $form->textField($model,'penulis',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'penulis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Kata_kunci'); ?>
		<?php echo $form->textField($model,'Kata_kunci',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Kata_kunci'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Abstrak'); ?>
		<?php echo $form->textField($model,'Abstrak',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Abstrak'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Kategori'); ?>
		<?php echo $form->textField($model,'Kategori',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Volume'); ?>
		<?php echo $form->textField($model,'Volume',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Volume'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tanggal'); ?>
		<?php echo $form->textField($model,'Tanggal',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Tanggal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->