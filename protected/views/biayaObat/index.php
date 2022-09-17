<?php
/* @var $this BiayaObatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Biaya Obats',
);

$this->menu=array(
	array('label'=>'Create BiayaObat', 'url'=>array('create')),
	array('label'=>'Manage BiayaObat', 'url'=>array('admin')),
);
?>

<h1>Biaya Obats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
