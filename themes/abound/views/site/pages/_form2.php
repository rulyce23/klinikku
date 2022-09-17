<?php
/* @var $this TDaftarController */
/* @var $model TDaftar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tdaftar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nama_pengguna'); ?>
		<?php echo $form->textField($model,'Nama_pengguna',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Nama_pengguna'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Kata_sandi'); ?>
		<?php echo $form->textField($model,'Kata_sandi',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'Kata_sandi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sapaan'); ?>
		<?php echo $form->textField($model,'Sapaan',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Sapaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nama_Lengkap'); ?>
		<?php echo $form->textField($model,'Nama_Lengkap',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Nama_Lengkap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Inisial'); ?>
		<?php echo $form->textField($model,'Inisial',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Inisial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jk'); ?>
		<?php echo $form->textField($model,'Jk',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Jk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nama_Departement'); ?>
		<?php echo $form->textField($model,'Nama_Departement',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Nama_Departement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'URL'); ?>
		<?php echo $form->textField($model,'URL',array('size'=>60,'maxlength'=>90)); ?>
		<?php echo $form->error($model,'URL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telepon'); ?>
		<?php echo $form->textField($model,'Telepon'); ?>
		<?php echo $form->error($model,'Telepon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TTL'); ?>
		<?php echo $form->textField($model,'TTL',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'TTL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Alamat'); ?>
		<?php echo $form->textField($model,'Alamat',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Negara'); ?>
		<?php echo $form->textField($model,'Negara',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Negara'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->