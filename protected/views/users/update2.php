<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users',
	'Perbarui Users Akun',
);
?>

<h1>Perbarui Users Akun <?php echo $model->id_user; ?></h1>

<?php $this->renderPartial('_form2', array('model'=>$model)); ?>