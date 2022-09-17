<?php
/* @var $this BiayaObatController */
/* @var $model BiayaObat */

$this->breadcrumbs=array(
	'Biaya Obats'=>array('index'),
	$model->id_biaya,
);

$this->menu=array(
	array('label'=>'Create BiayaObat', 'url'=>array('create')),
	array('label'=>'Update BiayaObat', 'url'=>array('update', 'id'=>$model->id_biaya)),
	array('label'=>'Kelola Data Obat', 'url'=>array('Obat/admin')),
);
?>

<h1>View BiayaObat #<?php echo $model->id_biaya; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_biaya',
		'id_pasien',
		'id_obat',
		'harga',
		'jumlah',
		'harga_total',
	),
)); ?>
