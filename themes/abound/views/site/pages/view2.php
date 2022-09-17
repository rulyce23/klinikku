<?php
/* @var $this TDaftarController */
/* @var $model TDaftar */

$this->breadcrumbs=array(
	'Tdaftars'=>array('index'),
	$model->Nama_pengguna,
);

$this->menu=array(
	array('label'=>'List TDaftar', 'url'=>array('index')),
	array('label'=>'Create TDaftar', 'url'=>array('create')),
	array('label'=>'Update TDaftar', 'url'=>array('update', 'id'=>$model->Nama_pengguna)),
	array('label'=>'Delete TDaftar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Nama_pengguna),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TDaftar', 'url'=>array('admin')),
);
?>

<h1>View TDaftar #<?php echo $model->Nama_pengguna; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Nama_pengguna',
		'Kata_sandi',
		'Sapaan',
		'Nama_Lengkap',
		'Inisial',
		'Jk',
		'Nama_Departement',
		'Email',
		'URL',
		'Telepon',
		'TTL',
		'Alamat',
		'Negara',
	),
)); ?>
