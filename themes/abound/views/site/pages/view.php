<?php
/* @var $this TDatajurnalController */
/* @var $model TDatajurnal */

$this->breadcrumbs=array(
	'Tdatajurnals'=>array('index'),
	$model->Judul,
);

$this->menu=array(
	array('label'=>'List TDatajurnal', 'url'=>array('index')),
	array('label'=>'Create TDatajurnal', 'url'=>array('create')),
	array('label'=>'Update TDatajurnal', 'url'=>array('update', 'id'=>$model->Judul)),
	array('label'=>'Delete TDatajurnal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Judul),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TDatajurnal', 'url'=>array('admin')),
);
?>

<h1>View TDatajurnal #<?php echo $model->Judul; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Judul',
		'penulis',
		'Kata_kunci',
		'Abstrak',
		'Kategori',
		'Email',
		'Volume',
		'Tanggal',
	),
)); ?>
