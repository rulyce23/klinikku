<?php
/* @var $this TDatajurnalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tdatajurnals',
);

$this->menu=array(
	array('label'=>'Create TDatajurnal', 'url'=>array('create')),
	array('label'=>'Manage TDatajurnal', 'url'=>array('admin')),
);
?>

<h1>Tdatajurnals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
