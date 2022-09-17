<?php
/* @var $this TDatajurnalController */
/* @var $model TDatajurnal */

$this->breadcrumbs=array(
	'Tdatajurnals'=>array('index'),
	$model->Judul=>array('view','id'=>$model->Judul),
	'Update',
);

$this->menu=array(
	array('label'=>'List TDatajurnal', 'url'=>array('index')),
	array('label'=>'Create TDatajurnal', 'url'=>array('create')),
	array('label'=>'View TDatajurnal', 'url'=>array('view', 'id'=>$model->Judul)),
	array('label'=>'Manage TDatajurnal', 'url'=>array('admin')),
);
?>

<h1>Update TDatajurnal <?php echo $model->Judul; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>