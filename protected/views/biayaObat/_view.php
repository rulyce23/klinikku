<?php
/* @var $this BiayaObatController */
/* @var $data BiayaObat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_biaya')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_biaya), array('view', 'id'=>$data->id_biaya)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->id_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_obat')); ?>:</b>
	<?php echo CHtml::encode($data->id_obat); ?>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_total')); ?>:</b>
	<?php echo CHtml::encode($data->harga_total); ?>
	<br />


</div>