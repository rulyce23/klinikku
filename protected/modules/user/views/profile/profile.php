<?php
$this->pageTitle = Yii::app()->name . ' - ' . UserModule::t("Profile");
$this->breadcrumbs = array(
    UserModule::t("Profile"),
);
?>
<?php
$this->beginWidget(
        'booster.widgets.TbHeroUnit', array(
    'heading' => UserModule::t('Your profile'),
        )
);
?>

<p>ข้อมูลส่วนตัวของคุณ</p>

<?php $this->endWidget(); ?>
<div class="row-fluid">
    <?php echo $this->renderPartial('menu'); ?>

    <?php if (Yii::app()->user->hasFlash('profileMessage')): ?>
        <div class="success">
            <?php echo Yii::app()->user->getFlash('profileMessage'); ?>
        </div>
    <?php endif; ?>
    <h3>ข้อมูลส่วนตัว</h3>
    <table class="table table-bordered">
        <tr>
            <td><?php echo CHtml::encode($model->getAttributeLabel('username')); ?>
            </td>
            <td><?php echo CHtml::encode($model->username); ?>
            </td>
        </tr>
        <?php
        $pf = Profile::model()->findByAttributes(array('user_id'=>Yii::app()->user->getId()));
        $profileFields = ProfileField::model()->forOwner()->sort()->findAll();
        if ($profileFields) {
            foreach ($profileFields as $field) {
                //echo "<pre>"; print_r($profile); die();
                ?>
                <tr>
                    <td><?php echo CHtml::encode(UserModule::t($field->title)); ?>
                    </td>
                    <td><?php echo (($field->widgetView($profile)) ? $field->widgetView($profile) : CHtml::encode((($field->range) ? Profile::range($field->range, $profile->getAttribute($field->varname)) : $profile->getAttribute($field->varname)))); ?>
                    </td>
                </tr>
                <?php
            }//$profile->getAttribute($field->varname)
        }
        ?>


        <tr>
            <td><?php echo CHtml::encode($model->getAttributeLabel('email')); ?>
            </td>
            <td><?php echo CHtml::encode($model->email); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($model->getAttributeLabel('createtime')); ?>
            </td>
            <td><?php echo date("d.m.Y H:i:s", $model->createtime); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($model->getAttributeLabel('lastvisit')); ?>
            </td>
            <td><?php echo date("d.m.Y H:i:s", $model->lastvisit); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($model->getAttributeLabel('status')); ?>
            </td>
            <td><?php echo CHtml::encode(User::itemAlias("UserStatus", $model->status));
        ?>
            </td>
        </tr>
    </table>

    <div class="span2">
        <img src="">
    </div>
    <div class="span10"></div>

</div>
