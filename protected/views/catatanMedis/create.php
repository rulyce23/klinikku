<?php
/* @var $this CatatanMedisController */
/* @var $model CatatanMedis */

$this->breadcrumbs=array(
	'Catatan Medis'=>array('index'),
	'Buat',
);

$this->menu=array(
	array('label'=>'List Catatan Medis', 'url'=>array('index')),
	array('label'=>'Kelola Catatan Medis', 'url'=>array('admin')),
);
?>

<h1>Buat Data Catatan Medis Pasien</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>