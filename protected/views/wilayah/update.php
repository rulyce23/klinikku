<?php
/* @var $this WilayahController */
/* @var $model Wilayah */

$this->breadcrumbs=array(
	'Wilayah'=>array('index'),
	$model->id_wilayah=>array('view','id'=>$model->id_wilayah),
	'Update',
);

$this->menu=array(
	array('label'=>'List Wilayah', 'url'=>array('index')),
	array('label'=>'Buat Wilayah', 'url'=>array('create')),
	array('label'=>'Lihat Wilayah', 'url'=>array('view', 'id'=>$model->id_wilayah)),
	array('label'=>'Manage Wilayah', 'url'=>array('admin')),
);
?>

<h1>Update Wilayah <?php echo $model->id_wilayah; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>