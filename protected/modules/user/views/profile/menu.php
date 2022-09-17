<!--<ul class="actions">
<?php
if(UserModule::isAdmin()) {
?>
<li><?php echo CHtml::link(UserModule::t('Manage User'),array('/user/admin')); ?></li>
<?php
} else {
?>
<li><?php echo CHtml::link(UserModule::t('List User'),array('/user')); ?></li>
<?php
}
?>
<li><?php echo CHtml::link(UserModule::t('Profile'),array('/user/profile')); ?></li>
<li><?php echo CHtml::link(UserModule::t('Edit'),array('edit')); ?></li>
<li><?php echo CHtml::link(UserModule::t('Change password'),array('changepassword')); ?></li>
<li><?php echo CHtml::link(UserModule::t('Logout'),array('/user/logout')); ?></li>
</ul>-->
<div class="text-center">

<?php
$this->widget(
    'booster.widgets.TbButtonGroup',
    array(
        'context' => 'primary',
        'buttons' => array(
            array('label' => UserModule::t('Manage User'), 'url' => array('/user/admin'),'visible'=>UserModule::isAdmin()),
            array('label' => UserModule::t('List User'), 'url' => array('/user')),
            array('label' => UserModule::t('Profile'), 'url' => array('/user/profile')),
            array('label' => UserModule::t('Edit'), 'url' => array('edit')),
            array('label' => UserModule::t('Change password'), 'url' => array('changepassword')),
            array('label' => UserModule::t('Logout'), 'url' => array('/user/logout'))
        ),
    )
);
?>
</div>
