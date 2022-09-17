<!--<ul class="actions">
<?php 
	if (count($list)) {
		foreach ($list as $item)
			echo "<li>".$item."</li>";
	}
?>
	<li><?php echo CHtml::link(UserModule::t('List User'),array('/user')); ?></li>
	<li><?php echo CHtml::link(UserModule::t('Manage User'),array('admin')); ?></li>
	<li><?php echo CHtml::link(UserModule::t('Manage Profile Field'),array('profileField/admin')); ?></li>
</ul><!-- actions -->

<div class="text-center">
    
<?php
$this->widget(
    'booster.widgets.TbButtonGroup',
    array(
        'context' => 'primary',
        'buttons' => array(
            array('label' => UserModule::t('Create User'), 'url' => array('/user/admin/create')),
            array('label' => UserModule::t('Manage User'), 'url' => array('/user/admin'),'visible'=>UserModule::isAdmin()),
            array('label' => UserModule::t('List User'), 'url' => array('/user')),
            array('label' => UserModule::t('Manage Profile Field'), 'url' => array('profileField/admin')),
            
        ),
    )
);
?>
</div>
