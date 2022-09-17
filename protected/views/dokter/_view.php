<?php
/* @var $this DokterController */
/* @var $data Dokter */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dokter')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_dokter), array('view', 'id'=>$data->id_dokter)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nm_dokter')); ?>:</b>
	<?php echo CHtml::encode($data->nm_dokter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_dokter')); ?>:</b>
	<?php echo CHtml::encode($data->alamat_dokter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telepon')); ?>:</b>
	<?php echo CHtml::encode($data->telepon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spesialis')); ?>:</b>
	<?php echo CHtml::encode($data->spesialis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarif')); ?>:</b>
	<?php echo CHtml::encode($data->tarif); ?>
	<br />


</div>