<?php
/* @var $this DokterController */
/* @var $model Dokter */

$this->breadcrumbs=array(
	'Dokter'=>array('index'),
	'Buat Data',
);

$this->menu=array(
	array('label'=>'List Dokter', 'url'=>array('index')),
	array('label'=>'Manage Dokter', 'url'=>array('admin')),
);
?>

<h1>Create Dokter</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>