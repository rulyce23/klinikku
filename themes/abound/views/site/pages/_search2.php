<?php
/* @var $this TDaftarController */
/* @var $model TDaftar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Nama_pengguna'); ?>
		<?php echo $form->textField($model,'Nama_pengguna',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Kata_sandi'); ?>
		<?php echo $form->textField($model,'Kata_sandi',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sapaan'); ?>
		<?php echo $form->textField($model,'Sapaan',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nama_Lengkap'); ?>
		<?php echo $form->textField($model,'Nama_Lengkap',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Inisial'); ?>
		<?php echo $form->textField($model,'Inisial',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Jk'); ?>
		<?php echo $form->textField($model,'Jk',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nama_Departement'); ?>
		<?php echo $form->textField($model,'Nama_Departement',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'URL'); ?>
		<?php echo $form->textField($model,'URL',array('size'=>60,'maxlength'=>90)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Telepon'); ?>
		<?php echo $form->textField($model,'Telepon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TTL'); ?>
		<?php echo $form->textField($model,'TTL',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Alamat'); ?>
		<?php echo $form->textField($model,'Alamat',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Negara'); ?>
		<?php echo $form->textField($model,'Negara',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->