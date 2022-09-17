<?php
/* @var $this TDaftarController */
/* @var $data TDaftar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nama_pengguna')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Nama_pengguna), array('view', 'id'=>$data->Nama_pengguna)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kata_sandi')); ?>:</b>
	<?php echo CHtml::encode($data->Kata_sandi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sapaan')); ?>:</b>
	<?php echo CHtml::encode($data->Sapaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nama_Lengkap')); ?>:</b>
	<?php echo CHtml::encode($data->Nama_Lengkap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Inisial')); ?>:</b>
	<?php echo CHtml::encode($data->Inisial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Jk')); ?>:</b>
	<?php echo CHtml::encode($data->Jk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nama_Departement')); ?>:</b>
	<?php echo CHtml::encode($data->Nama_Departement); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('URL')); ?>:</b>
	<?php echo CHtml::encode($data->URL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telepon')); ?>:</b>
	<?php echo CHtml::encode($data->Telepon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TTL')); ?>:</b>
	<?php echo CHtml::encode($data->TTL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Alamat')); ?>:</b>
	<?php echo CHtml::encode($data->Alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Negara')); ?>:</b>
	<?php echo CHtml::encode($data->Negara); ?>
	<br />

	*/ ?>

</div>