<?php
/* @var $this CatatanMedisController */
/* @var $data CatatanMedis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_medis), array('view', 'id'=>$data->id_medis)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->id_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dokter')); ?>:</b>
	<?php echo CHtml::encode($data->id_dokter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_wilayah')); ?>:</b>
	<?php echo CHtml::encode($data->id_wilayah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_obat')); ?>:</b>
	<?php echo CHtml::encode($data->id_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnosa')); ?>:</b>
	<?php echo CHtml::encode($data->diagnosa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_tindakan')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_tindakan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnosa_final')); ?>:</b>
	<?php echo CHtml::encode($data->diagnosa_final); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_selesai); ?>
	<br />

	*/ ?>

</div>