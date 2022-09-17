<?php
/* @var $this PasienController */
/* @var $model Pasien */

$this->breadcrumbs=array(
	'Pasien'=>array('index'),
	'Daftar',
);

$this->menu=array(
	array('label'=>'Lihat Riwayat', 'url'=>array('CatatanMedis/adminview')),
);
?>

<h1>Daftar Pasien Baru</h1>

<?php $this->renderPartial('_form2', array('model'=>$model)); ?>