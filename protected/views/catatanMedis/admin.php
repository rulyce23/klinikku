<?php
/* @var $this CatatanMedisController */
/* @var $model CatatanMedis */

$this->breadcrumbs=array(
	'Catatan Medis'=>array('index'),
	'Kelola',
);

$this->menu=array(
	array('label'=>'List Catatan Medis', 'url'=>array('index')),
	array('label'=>'Buat Catatan Medis Pasien', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#catatan-medis-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Kelola Catatan Medis</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'catatan-medis-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'columns'=>array(
		'id_medis',
		'User.username',
		'Dokter.nm_dokter',
		'Wilayah.nm_wilayah',
		'Obat.nm_obat',
		'diagnosa',
		/*
		'tgl_tindakan',
		'diagnosa_final',
		'tgl_selesai',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
));
$bb=array();

foreach($aa->getData() as $i=>$ii)

	$bb[$i]=array($ii['id_pasien'],($ii['diagnosa']));


$this->Widget('ext.yiihighcharts.highcharts.HighchartsWidget', array(

   'options'=>array(

      'series' => array(

         array('type'=>'pie',

               'data' => $bb

              )

      ),

      'title' => array('text' => 'E-Klinik Data Result'),

      'tooltip' => array(

		'formatter' => 'js:function(){ return "<b>"+this.point.name+"</b> :"+this.y; }'

      ),

      'plotOptions'=>array('pie'=>(array(

                    'allowPointSelect'=>true,

                    'showInLegend'=>true,

                    'cursor'=>'pointer',

                )

            )                       

        ),

      'credits'=>array('enabled'=>false),

   )

));

?>

