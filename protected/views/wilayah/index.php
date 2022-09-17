<?php
/* @var $this WilayahController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Wilayah',
);

$this->menu=array(
	array('label'=>'Create Wilayah', 'url'=>array('create')),
	array('label'=>'Manage Wilayah', 'url'=>array('admin')),
);
?>

<h1>Wilayah</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
