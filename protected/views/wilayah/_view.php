<?php
/* @var $this WilayahController */
/* @var $data Wilayah */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_wilayah')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_wilayah), array('view', 'id'=>$data->id_wilayah)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama wilayah')); ?>:</b>
	<?php echo CHtml::encode($data->nm_wilayah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode pos')); ?>:</b>
	<?php echo CHtml::encode($data->kodepos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kecamatan')); ?>:</b>
	<?php echo CHtml::encode($data->kecamatan); ?>
	<br />


</div>