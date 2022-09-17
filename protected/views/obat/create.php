<?php
/* @var $this ObatController */
/* @var $model Obat */

$this->breadcrumbs=array(
	'Obats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Obat', 'url'=>array('index')),
	array('label'=>'Manage Obat', 'url'=>array('admin')),
);
?>

<h1>Create Obat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>