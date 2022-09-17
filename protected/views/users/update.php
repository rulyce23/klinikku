<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id_user=>array('view','id'=>$model->id_user),
	'Update',
);
?>

<h1>Update Users <?php echo $model->id_user; ?></h1>

<?php $this->renderPartial('_form2', array('model'=>$model)); ?>