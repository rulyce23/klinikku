<?php
/* @var $this DokterController */
/* @var $model Dokter */

$this->breadcrumbs=array(
	'Dokter'=>array('index'),
	$model->id_dokter,
);

$this->menu=array(
	array('label'=>'List Dokter', 'url'=>array('index')),
	array('label'=>'Buat Data Dokter', 'url'=>array('create')),
	array('label'=>'Update Dokter', 'url'=>array('update', 'id'=>$model->id_dokter)),
	//array('label'=>'Delete Dokter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_dokter),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Kelola Dokter', 'url'=>array('admin')),
);
?>

<h1>View Dokter #<?php echo $model->id_dokter; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_dokter',
		'nm_dokter',
		'alamat_dokter',
		'telepon',
		'spesialis',
		'tarif',
	),
)); ?>
