<?php
/* @var $this WilayahController */
/* @var $model Wilayah */

$this->breadcrumbs=array(
	'Wilayah'=>array('index'),
	$model->id_wilayah,
);

$this->menu=array(
	array('label'=>'List Wilayah', 'url'=>array('index')),
	array('label'=>'Buat Wilayah', 'url'=>array('create')),
	array('label'=>'Update Wilayah', 'url'=>array('update', 'id'=>$model->id_wilayah)),
	array('label'=>'Delete Wilayah', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_wilayah),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Kelola Wilayah', 'url'=>array('admin')),
);
?>

<h1>Lihat Wilayah #<?php echo $model->id_wilayah; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_wilayah',
		'nm_wilayah',
		'kodepos',
		'kecamatan',
	),
)); ?>
