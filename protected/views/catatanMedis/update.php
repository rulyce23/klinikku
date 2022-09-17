<?php
/* @var $this CatatanMedisController */
/* @var $model CatatanMedis */

$this->breadcrumbs=array(
	'Catatan Medis'=>array('index'),
	$model->id_medis=>array('view','id'=>$model->id_medis),
	'Update',
);

$this->menu=array(
	array('label'=>'List Catatan Medis', 'url'=>array('index')),
	array('label'=>'Buat Catatan Medis', 'url'=>array('create')),
	array('label'=>'Lihat Catatan Medis', 'url'=>array('view', 'id'=>$model->id_medis)),
	array('label'=>'Kelola Catatan Medis', 'url'=>array('admin')),
);
?>

<h1>Update CatatanMedis <?php echo $model->id_medis; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>