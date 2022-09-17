<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'User',
	'Kelola User Akun',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<center>
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Kelola Akun',
		));
		?>
<div class="form">
<center>
<h1>Kelola User Akun</h1>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_user',
		'nama',
		'jk',
		'telepon',
		'email',
		/*
		'username',
		'password',
		'level',
		'status',
		'picture',
		*/
		array(
			'class'=>'CButtonColumn',
			 'template' => '{update2}{viewme}{delete}',
			    'buttons' => array(
                  'update2' => array(
                    'label' => 'Update Profile',
                    'url' => 'Yii::app()->createUrl("users/update2", array("id"=>$data->id_user))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/update.png',
                ),
                  'viewme' => array(
                    'label' => 'View My Profile Picture & Data',
                    'url' => 'Yii::app()->createUrl("users/viewme", array("id"=>$data->id_user))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/view.png',
		),
		),
		),
	),
)); ?>
<?php $this->endWidget(); ?>
