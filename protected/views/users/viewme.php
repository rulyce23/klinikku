<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users',
	'Lihat User Akun Admin',
);


?>
<center>
<h1>Lihat User Akun Admin #<?php echo $model->id_user; ?></h1>
</center>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_user',
		'username',
		'jk',
		'telepon',
		'email',
	
		

	),
)); ?>
