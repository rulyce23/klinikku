<?php
/* @var $this PasienController */
/* @var $model Pasien */

$this->breadcrumbs=array(
	'Pasiens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pasien', 'url'=>array('index')),
	array('label'=>'Manage Pasien', 'url'=>array('admin')),
);
?>

<h1>Buat Pasien Baru</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>