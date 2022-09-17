<?php
/* @var $this CatatanMedisController */
/* @var $model CatatanMedis */

$this->breadcrumbs=array(
	'Catatan Medis'=>array('index'),
	$model->id_medis,
);

$this->menu=array(
	array('label'=>'List Catatan Medis', 'url'=>array('index')),
	array('label'=>'Buat Data Catatan Medis Pasien', 'url'=>array('create')),
//	array('label'=>'Update CatatanMedis', 'url'=>array('update', 'id'=>$model->id_medis)),
//	array('label'=>'Delete CatatanMedis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_medis),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Kelola Catatan Medis', 'url'=>array('admin')),
);
?>

<h1>View CatatanMedis #<?php echo $model->id_medis; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_medis',
		'id_pasien',
		'id_dokter',
		'id_wilayah',
		'id_obat',
		'diagnosa',
		'tgl_tindakan',
		'diagnosa_final',
		'jam_selesai',
	),
)); ?>
