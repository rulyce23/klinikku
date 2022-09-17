<?php
/* @var $this WilayahController */
/* @var $model Wilayah */

$this->breadcrumbs=array(
	'Wilayah'=>array('index'),
	'Buat',
);

$this->menu=array(
	array('label'=>'List Wilayah', 'url'=>array('index')),
	array('label'=>'Kelola Wilayah', 'url'=>array('admin')),
);
?>

<h1>Buat Wilayah Baru</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>