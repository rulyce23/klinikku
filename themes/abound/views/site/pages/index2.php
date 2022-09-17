<?php
/* @var $this TDaftarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tdaftars',
);

$this->menu=array(
	array('label'=>'Create TDaftar', 'url'=>array('create')),
	array('label'=>'Manage TDaftar', 'url'=>array('admin')),
);
?>

<h1>Tdaftars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
