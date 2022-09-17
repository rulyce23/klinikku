<?php
class PasswordForm extends CFormModel{
    public $oldpass;
    public $newpass;
    public $confirm;
    
    public function rules(){
        return array(
            array('oldpass, newpass, confirm','required'),
        );
    }
    
    public function attributeLabels(){
        return array(
        'oldpass'=>'Password Lama',
        'newpass'=>'Password Baru',
        'confirm'=>'Konfirm Password Baru',
        );
    }
}
?>