<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users',
	'Lihat USers Akun Nonaktif',
);


?>
<center>
<h1>Lihat Data Akun Nonaktif #<?php echo $model->id_user; ?></h1>
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
