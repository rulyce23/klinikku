<?php
/* @var $this TDaftarController */
/* @var $model TDaftar */

$this->breadcrumbs=array(
	'Tdaftars'=>array('index'),
	$model->Nama_pengguna=>array('view','id'=>$model->Nama_pengguna),
	'Update',
);

$this->menu=array(
	array('label'=>'List TDaftar', 'url'=>array('index')),
	array('label'=>'Create TDaftar', 'url'=>array('create')),
	array('label'=>'View TDaftar', 'url'=>array('view', 'id'=>$model->Nama_pengguna)),
	array('label'=>'Manage TDaftar', 'url'=>array('admin')),
);
?>

<h1>Update TDaftar <?php echo $model->Nama_pengguna; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>