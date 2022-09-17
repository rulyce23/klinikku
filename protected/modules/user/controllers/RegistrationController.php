<?php

class RegistrationController extends Controller
{
	public $defaultAction = 'registration';
	


	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return (isset($_POST['ajax']) && $_POST['ajax']==='registration-form')?array():array(
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
		);
	}
	/**
	 * Registration user
	 */
	public function actionRegistration() {
            if($this->module->disableRegisration)
		{
                Yii::app()->user->setFlash('danger', "ปิดระบบการสมัครสมาชิก");
			$this->redirect(Yii::app()->homeUrl);
		}
            $model = new RegistrationForm;
            $profile=new Profile;
            $profile->regMode = true;
            
            UWprofilepic::handleProfilePic($model,$profile);
            
			// ajax validator
			if(isset($_POST['ajax']) && $_POST['ajax']==='registration-form')
			{
				echo UActiveForm::validate(array($model,$profile));
				Yii::app()->end();
			}
			
		    if (Yii::app()->user->id) {
		    	$this->redirect(Yii::app()->controller->module->profileUrl);
		    } else {
		    	if(isset($_POST['RegistrationForm'])) {
					$model->attributes=$_POST['RegistrationForm'];
					$profile->attributes=((isset($_POST['Profile'])?$_POST['Profile']:array()));
					if($model->validate()&&$profile->validate())
					{
						$soucePassword = $model->password;
						$model->activkey=UserModule::encrypting(microtime().$model->password);
						$model->password=UserModule::encrypting($model->password);
						$model->verifyPassword=UserModule::encrypting($model->verifyPassword);
						$model->createtime=time();
						$model->lastvisit=((Yii::app()->controller->module->loginNotActiv||(Yii::app()->controller->module->activeAfterRegister&&Yii::app()->controller->module->sendActivationMail==false))&&Yii::app()->controller->module->autoLogin)?time():0;
						$model->superuser=0;
						$model->status=((Yii::app()->controller->module->activeAfterRegister)?User::STATUS_ACTIVE:User::STATUS_NOACTIVE);
						
						if ($model->save()) {
							$profile->user_id=$model->id;
							$profile->save();
							if (Yii::app()->controller->module->sendActivationMail) {
								$activation_url = $this->createAbsoluteUrl('/user/activation/activation',array("activkey" => $model->activkey, "email" => $model->email));
								//UserModule::sendMail($model->email,UserModule::t("You registered from {site_name}",array('{site_name}'=>Yii::app()->name)),UserModule::t("Please activate you account go to {activation_url}",array('{activation_url}'=>$activation_url)));
                                                                $mail=Yii::app()->Smtpmail;
                                                                //$mail->SMTPDebug = 2;
                                                                $mail->SetFrom('contact@programmerthailand.com', 'Programmer Thailand'); //
                                                                $mail->Subject = 'แจ้งยืนยันการสมัครสมาชิกกับ Programmer Thailand';
                                                                $msg = UserModule::t("คุณได้ลงทะเบียนกับเว็บไซต์ {site_name}",array('{site_name}'=>Yii::app()->name)).'<br />'.UserModule::t("กรุณายืนยันสมาชิกโดยไปที่ Link นี้: {activation_url}",array('{activation_url}'=>$activation_url));
                                                                $mail->MsgHTML($msg);
                                                                $mail->CharSet="UTF-8";
                                                                $mail->AddAddress($model->email, $model->username);
                                                                if(!$mail->Send()) {
                                                                    Yii::app()->user->setFlash('error','มีข้อผิดพลาด '. $mail->ErrorInfo);
                                                                }else {
                                                                    Yii::app()->user->setFlash('success','ขอบคุณสำหรับการสมัครสมาชิก กรุณาตรวจสอบอีเมลล์เพื่อทำการยืนยันข้อมูล หากมีข้อผิดพลาดในการสมัครสมาชิกกรุณาแจ้ง contact@programmerthailand.com');
                                                                }
                                                                if(!empty($profile->mobile)){
                                                                    /*Yii::import('ext.sms.thsms');
                                                                    $sms = new thsms();
                                                                    $sms->username = 'kongoon';
                                                                    $sms->password = '44121165';
                                                                    $sms->send( '0000', $profile->mobile, 'ขอบคุณสำหรับการสมัครสมาชิกกับ Programmer Thailand ขอให้สนุกกับการเรียนรู้นะครับ');
                                                                     * 
                                                                     */
                                                                }
                                                                $this->redirect(array('/user/registration/postregistration'));
							}
							
							if ((Yii::app()->controller->module->loginNotActiv||(Yii::app()->controller->module->activeAfterRegister&&Yii::app()->controller->module->sendActivationMail==false))&&Yii::app()->controller->module->autoLogin) {
									$identity=new UserIdentity($model->username,$soucePassword);
									$identity->authenticate();
									Yii::app()->user->login($identity,0);
									$this->redirect(Yii::app()->controller->module->returnUrl);
							} else {
								if (!Yii::app()->controller->module->activeAfterRegister&&!Yii::app()->controller->module->sendActivationMail) {
									Yii::app()->user->setFlash('success',UserModule::t("ขอบคุณสำหรับการสมัครสมาชิก กรุณาติดต่อ contact@programmerthailand เพื่อยืนยันสมาชิก"));
								} elseif(Yii::app()->controller->module->activeAfterRegister&&Yii::app()->controller->module->sendActivationMail==false) {
									Yii::app()->user->setFlash('success',UserModule::t("ขอบคุณสำหรับการสมัครสมาชิก กรุณา {{login}}.",array('{{login}}'=>CHtml::link(UserModule::t('เข้าสู่ระบบ'),Yii::app()->controller->module->loginUrl))));
								} elseif(Yii::app()->controller->module->loginNotActiv) {
									Yii::app()->user->setFlash('success',UserModule::t("ขอบคุณสำหรับการสมัครสมาชิก กรุณาตรวจสอบอีเมลล์หรือเข้าสู่ระบบ"));
								} else {
									Yii::app()->user->setFlash('success',UserModule::t("ขอบคุณสำหรับการสมัครสมาชิก กรุณาตรวจสอบอีเมลล์"));
								}
                                                                
								$this->refresh();
							}
						}
					} else $profile->validate();
				}
			    $this->render('/user/registration',array('model'=>$model,'profile'=>$profile));
		    }
	}
        public function actionPostRegistration(){
            $this->render('/user/post_registration');
        }
}