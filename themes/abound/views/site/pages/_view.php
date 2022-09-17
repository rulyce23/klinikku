<?php
/* @var $this TDatajurnalController */
/* @var $data TDatajurnal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Judul')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Judul), array('view', 'id'=>$data->Judul)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penulis')); ?>:</b>
	<?php echo CHtml::encode($data->penulis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kata_kunci')); ?>:</b>
	<?php echo CHtml::encode($data->Kata_kunci); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Abstrak')); ?>:</b>
	<?php echo CHtml::encode($data->Abstrak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kategori')); ?>:</b>
	<?php echo CHtml::encode($data->Kategori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Volume')); ?>:</b>
	<?php echo CHtml::encode($data->Volume); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->Tanggal); ?>
	<br />

	*/ ?>

</div>