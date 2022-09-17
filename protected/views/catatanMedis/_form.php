<?php
/* @var $this CatatanMedisController */
/* @var $model CatatanMedis */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'catatan-medis-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pasien'); ?>
		<?php echo $form->dropDownList($model,'id_pasien',
		CHtml::listData(Pasien::model()->findAll(),
		'id_user','nm_pasien'),
		array("empty"=>"Pilih Pasien"));
		 ?>
		<?php echo $form->error($model,'id_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_dokter'); ?>
		<?php echo $form->textField($model,'id_dokter'); ?>
		<?php echo $form->error($model,'id_dokter'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'id_biaya'); ?>
		<?php echo $form->dropDownList($model,'id_biaya',
		CHtml::listData(BiayaObat::model()->findAll(),
		'id_biaya','id_obat'),
		array("empty"=>"Pilih Obat"));
		 ?>
		<?php echo $form->error($model,'id_biaya'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_wilayah'); ?>
		<?php echo $form->textField($model,'id_wilayah'); ?>
		<?php echo $form->error($model,'id_wilayah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_obat'); ?>
		<?php echo $form->dropDownList($model,'id_obat',
		CHtml::listData(Obat::model()->findAll(),
		'id_obat','nm_obat'),
		array("empty"=>"Pilih Obat"));
		 ?>
		<?php echo $form->error($model,'id_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diagnosa'); ?>
		<?php echo $form->textField($model,'diagnosa',array('size'=>60,'maxlength'=>155)); ?>
		<?php echo $form->error($model,'diagnosa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_tindakan'); ?>
		<?php echo $form->hiddenField($model,'tgl_tindakan',array('size'=>10,'maxlength'=>10,'readonly'=>true,'value'=>date('Y-m-d'))); ?>
		<?php echo $form->error($model,'tgl_tindakan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diagnosa_final'); ?>
		<?php echo $form->textField($model,'diagnosa_final',array('size'=>60,'maxlength'=>155)); ?>
		<?php echo $form->error($model,'diagnosa_final'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jam_selesai'); ?>
		<?php echo $form->hiddenField($model,'jam_selesai',array('readonly'=>true,'value'=>date('H:i'))); ?>
		<?php echo $form->error($model,'jam_selesai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->