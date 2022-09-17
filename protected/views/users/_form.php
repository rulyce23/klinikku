<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>
<div class="row-fluid"> 
	<left>
  <div class="span4 offset4">
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Register E-Klinik Pasien',
		));
		?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields dengan <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',['class'=>'form-control'],array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jenis Kelamin'); ?>
		<?php echo $form->radioButtonList($model,'jk',
array('Laki-Laki'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L','Perempuan'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P'),
array(
'template'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{input}{label}',
'separator'=>'&nbsp;&nbsp;',
'labelOptions'=>array(
)));
?><?php echo $form->error($model,'jk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telepon'); ?>
		<?php echo $form->textField($model,'telepon',['class'=>'form-control'],array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'telepon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',['class'=>'form-control'],array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',['class'=>'form-control'],array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save',['class'=>'btn btn-success']); ?>
	</div>

<?php $this->endWidget(); ?>
<?php 
$this->endWidget();
?>
</div><!-- form -->