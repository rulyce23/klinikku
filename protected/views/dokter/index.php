<?php
/* @var $this DokterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dokter',
);

$this->menu=array(
	array('label'=>'Buat Data Dokter', 'url'=>array('create')),
	array('label'=>'Kelola Dokter', 'url'=>array('admin')),
);
?>

<h1>Dokters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
