<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Medis',
	'Riwayat Catatan Medis',
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

<center>
<h1>Riwayat Medis</h1>
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'',
		));
		
?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'catatan-medis-grid',
	'dataProvider'=>$model->search(),
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	//'filter'=>$model,
	'columns'=>array(
		'id_medis',
		'diagnosa',
		'diagnosa_final',
		'tgl_tindakan',
		array(
			'class'=>'CButtonColumn',
			 'template' => '{viewme}',
			  'buttons' => array(
                  'viewme' => array(
                    'label' => 'Lihat Riwayat Medis',
                    'url' => 'Yii::app()->createUrl("catatanMedis/view2", array("id_medis"=>$data->id_medis))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/view.png',
                ),
		),
	),
	),
)); ?>
<a href="#" title="" onclick="printDiv('lol')" class="smallButton" style="margin: 5px;"><img src="HTML/images/icons/dark/inbox2.png" alt=""></a>
  <script>
            function printDiv(divName) {
                       var printContents = document.getElementById(divName).innerHTML;
                       var originalContents = document.body.innerHTML;

                       document.body.innerHTML = printContents;

                       window.print();

                       document.body.innerHTML = originalContents;
                  }
      </script>
<?php 
$this->endWidget();
?>

	
