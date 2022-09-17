<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users',
	'Lihat User Akun Pasien',
);


?>
<center>
<h1>Lihat User Akun Pasien #<?php echo $model->id_user; ?></h1>
</center>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_user',
		'username',
		'jk',
		'telepon',
		'email',
		'username',
		

	),
)); ?>
