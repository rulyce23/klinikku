<div class="row">
    <?php echo $form->labelEx($model,'oldpass'); ?>
    <?php echo $form->passwordField($model,'oldpass',
        array('size'=>30));?>
    <?php echo $form->error($model,'oldpass'); ?>
</div>
    
<div class="row">
    <?php echo $form->labelEx($model,'newpass'); ?>
    <?php echo $form->passwordField($model,'newpass',
        array('size'=>30));?>
    <?php echo $form->error($model,'newpass'); ?>
</div>
    
<div class="row">
    <?php echo $form->labelEx($model,'confirm'); ?>
    <?php echo $form->passwordField($model,'confirm',
        array('size'=>30));?>
    <?php echo $form->error($model,'confirm'); ?>
</div>