<?php
/* @var $this ObatController */
/* @var $data Obat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_obat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_obat), array('view', 'id'=>$data->id_obat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nm_obat')); ?>:</b>
	<?php echo CHtml::encode($data->nm_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_obat')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aturan_pakai')); ?>:</b>
	<?php echo CHtml::encode($data->aturan_pakai); ?>
	<br />


</div>