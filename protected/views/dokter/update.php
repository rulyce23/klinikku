<?php
/* @var $this DokterController */
/* @var $model Dokter */

$this->breadcrumbs=array(
	'Dokter'=>array('index'),
	$model->id_dokter=>array('view','id'=>$model->id_dokter),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dokter', 'url'=>array('index')),
	array('label'=>'Buat Dokter', 'url'=>array('create')),
	array('label'=>'Lihat Dokter', 'url'=>array('view', 'id'=>$model->id_dokter)),
	array('label'=>'Kelola Dokter', 'url'=>array('admin')),
);
?>

<h1>Update Dokter <?php echo $model->id_dokter; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>