<?php
/* @var $this TDatajurnalController */
/* @var $model TDatajurnal */

$this->breadcrumbs=array(
	'Tdatajurnals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TDatajurnal', 'url'=>array('index')),
	array('label'=>'Manage TDatajurnal', 'url'=>array('admin')),
);
?>

<h1>Create TDatajurnal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>