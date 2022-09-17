<?php
/* @var $this TDaftarController */
/* @var $model TDaftar */

$this->breadcrumbs=array(
	'Tdaftars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TDaftar', 'url'=>array('index')),
	array('label'=>'Manage TDaftar', 'url'=>array('admin')),
);
?>

<h1>Create TDaftar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>