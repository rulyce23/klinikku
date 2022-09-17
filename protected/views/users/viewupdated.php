<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users',
	$model->id_user,
);


?>
<center>
<h1>Hasil Data Berhasil Diperbarui #<?php echo $model->id_user; ?></h1>
</center>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_user',
		'username',
		'jk',
		'telepon',
		'email',
		'level',
		

	),
)); ?>
