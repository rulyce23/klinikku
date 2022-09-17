<?php
/* @var $this BiayaObatController */
/* @var $model BiayaObat */

$this->breadcrumbs=array(
	'Biaya Obats'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BiayaObat', 'url'=>array('index')),
	array('label'=>'Create BiayaObat', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#biaya-obat-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Biaya Obats</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'biaya-obat-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'columns'=>array(
		'id_biaya',
		'id_pasien',
		'id_obat',
		'harga',
		'jumlah',
		/*
		'harga_total',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
