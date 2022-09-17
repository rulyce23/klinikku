<?php
/* @var $this BiayaObatController */
/* @var $model BiayaObat */

$this->breadcrumbs=array(
	'Biaya Obat'=>array('index'),
	'Buat',
);

$this->menu=array(
	array('label'=>'List BiayaObat', 'url'=>array('index')),
	array('label'=>'Kelola Biaya Obat', 'url'=>array('admin')),
);
?>

<h1>Buat Biaya Obat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>