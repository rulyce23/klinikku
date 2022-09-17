<?php
/* @var $this CatatanMedisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Catatan Medis',
);

$this->menu=array(
	array('label'=>'Buat Catatan Medis', 'url'=>array('create')),
	array('label'=>'Kelola Catatan Medis', 'url'=>array('admin')),
);
?>

<h1>Catatan Medises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
