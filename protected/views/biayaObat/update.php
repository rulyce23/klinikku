<?php
/* @var $this BiayaObatController */
/* @var $model BiayaObat */

$this->breadcrumbs=array(
	'Biaya Obats'=>array('index'),
	$model->id_biaya=>array('view','id'=>$model->id_biaya),
	'Update',
);

$this->menu=array(
	array('label'=>'List BiayaObat', 'url'=>array('index')),
	array('label'=>'Create BiayaObat', 'url'=>array('create')),
	array('label'=>'View BiayaObat', 'url'=>array('view', 'id'=>$model->id_biaya)),
	array('label'=>'Manage BiayaObat', 'url'=>array('admin')),
);
?>

<h1>Update BiayaObat <?php echo $model->id_biaya; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>