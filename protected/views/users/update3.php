<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users',
	'Perbarui Users Akun',
);

?>

<h1>Profile Update || <?php echo 'ID:',$model->id_user,' ||&nbsp;USERNAME :', $model->username; ?></h1>

<?php $this->renderPartial('_form3', array('model'=>$model)); ?>