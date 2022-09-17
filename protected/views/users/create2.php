<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'User',
	'Register Akun',
);


?>

<center><h1>Buat Akun Admin Baru</h1></center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>