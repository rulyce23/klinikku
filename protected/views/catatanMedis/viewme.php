<?php
/* @var $this CatatanMedisController */
/* @var $model CatatanMedis */

$this->breadcrumbs=array(
	'Catatan Medis'=>array('index'),
	$model->id_medis
);
?>

<h1>Riwayat Catatan Medis Anda#<?php echo $model->id_medis; ?></h1>

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
));
 ?>
