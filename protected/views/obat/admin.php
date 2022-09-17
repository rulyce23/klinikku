<?php
/* @var $this ObatController */
/* @var $model Obat */

$this->breadcrumbs=array(
	'Obats'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Obat', 'url'=>array('index')),
	array('label'=>'Buat Data Obat Baru', 'url'=>array('create')),
	array('label'=>'Buat Data Biaya Obat Baru', 'url'=>array('biayaObat/create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#obat-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Kelola Obat</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
	'model2'=>$model2,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'obat-grid',
	'dataProvider'=>$model->search(),
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'filter'=>$model,
	'columns'=>array(
		'nm_obat',
		'jenis_obat',
		'harga',
		'aturan_pakai',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'biaya-obat-grid',
	'dataProvider'=>$model2->search(),
	'filter'=>$model2,
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'columns'=>array(
	'Pasi.nm_pasien',
	array(
		'name' => 'Obat.nm_obat',
		'value' => function($data) {
			return $data->Obat->nm_obat;
		}
	),
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
