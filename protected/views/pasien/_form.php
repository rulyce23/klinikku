<?php
/* @var $this PasienController */
/* @var $model Pasien */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pasien-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_masuk',['class'=>'text']); ?>
		<?php echo $form->textField($model,'tgl_masuk',array('readonly'=>true,'value'=>date('Y-m-d'))); ?>
		<?php echo $form->error($model,'tgl_masuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nm_pasien'); ?>
		<?php echo $form->textField($model,'nm_pasien',['class'=>'text'],array('size'=>40,'maxlength'=>100),); ?>
		<?php echo $form->error($model,'nm_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tempat_lahir'); ?>
		<?php echo $form->textField($model,'tempat_lahir',['class'=>'text']); ?>
		<?php echo $form->error($model,'tempat_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_lahir'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array('attribute' => 'tgl_lahir',
               'language' => 'en',
               'model' => $model,
               'options' => array(
                    'mode' => 'focus',
                    'dateFormat' => 'dd-mm-yy',
                    'showAnim' => 'slideDown',    
					'changeMonth'=> 'true',
                'changeYear'=> 'true',),
               'htmlOptions' => array('size' => 30, 'class' => 'date')
               )
            ); ?>
		<?php echo $form->error($model,'tgl_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jenis Kelamin'); ?>
		<?php echo $form->radioButtonList($model,'jk',
array('L'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L','P'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P'),
array(
'template'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{input}{label}',
'separator'=>'&nbsp;&nbsp;',
'labelOptions'=>array(
)));
?><?php echo $form->error($model,'jk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agama'); ?>
		<?php echo $form->dropDownList($model,'agama', 
                        array(				
						'Islam' =>'Islam',
							'Kristen' =>'Kristen',
							'Katholik' =>'Katholik',
							'Buddha' =>'Buddha',
							'Hindu' =>'Hindu',
						),
						array('empty' => '(Pilih)','maxlength'=>50)); ?> 
						<?php echo $form->error($model,'agama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goldar'); ?>
		<?php echo $form->dropDownList($model,'goldar', 
                        array(				
						'A' =>'A',
							'AB' =>'AB',
							'B' =>'B',
							'O' =>'O',
						),
						array('empty' => '(Pilih)','maxlength'=>50)); ?> 
						<?php echo $form->error($model,'goldar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telepon'); ?>
		<?php echo $form->textField($model,'telepon',['class'=>'text'],array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'telepon'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',['class'=>'btn btn-info']); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->