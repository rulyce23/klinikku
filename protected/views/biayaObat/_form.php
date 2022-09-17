<?php
/* @var $this BiayaObatController */
/* @var $model BiayaObat */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'biaya-obat-form',
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
		'id_pasien','nm_pasien'),
		array("empty"=>"Pilih Pasien"));
		 ?>
		<?php echo $form->error($model,'id_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_obat'); ?>
		<?php echo $form->dropDownList($model,'id_obat', CHtml::listData(Obat::model()->findAll(), 'id_obat','nm_obat'),array(
'prompt'=>'Pilih Obat',
'ajax'=>array(
	'type'=>'GET',
	'url'=>CController::createUrl('getName'),
	'update'=>'#harga',
	'data'=>array('id_obat'=>'js:this.value'),
)

)); ?>
		 
		<?php echo $form->error($model,'id_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga',array('id'=>'hrga')); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah'); ?>
		<?php echo $form->textField($model,'jumlah',array('id'=>'jmlh','size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_total'); ?>
		<?php echo $form->textField($model,'harga_total'); ?>
		<?php echo $form->error($model,'harga_total'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

<script>
	$('#hitung').on('click', function(e) {
    e.preventDefault();
    var hrga = new Array();
    $("[id^='hrga']").each( function() {
      hrga.push($(this).val());
    });
    
    var jmlh = new Array();
    $("[id^='jmlh']").each( function() {
      jmlh.push($(this).val());
    });
    
    var ttl=0;
    $.each(hrga, function(i, q) {
      ttl+=q*jmlh[i];
    });
    $('#total').val(ttl);
  }); 
</script>

</div><!-- form -->