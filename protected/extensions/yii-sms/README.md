This extension allows you to send SMS from Yii using different SMS providers and also save a log of the SMS you send.

## Installation and configuration

1) Copy to 'extensions' folder

2) Download additional third-party provider files and place them in 'vendor' folder

Twilio: https://github.com/twilio/twilio-php

Note: in TwilioSMSProvider.php file you can see where it looks for the library and adjust it in case you've placed it somewhere else.  

    $twilio_path=dirname(__FILE__).'/../../../vendor/twilio-php/Services/Twilio.php';

3) Configure in main.php

In the "components" section of the configuration file add:  

    'sms'=>array(
      'class' => 'ext.yii-sms.YiiSMS',
      'defaultProvider' => 'Twilio', // the default provider to use
      // place here a class and a method to call after sending sms if you want to log the sms sent
      // 'afterSend'=>array('ClassName', 'methodName'), 
      'providers' => array(
        'Twilio'=>array(
          'from' => '123456', // Twilio from number
          'account_sid'=>'', // Twilio account_sid
          'auth_token'=>'', // Twilio auth_token
        ),
      ),
    ),

## How to use

    /* @var $sms YiiSMS */
    $sms=Yii::app()->sms;

    $to='+34600000000'; // phone number
    $text='This is a test SMS'; // text to send

    // extra params that can be retrieved if you want to log the SMS that was sent
    $extra=array(
      'extra_param_name'=>'extra_param_value',
    );

    $sms->send($to, $text, $extra);

## How to log the SMS that you send

1) Uncomment 'afterSend' param in the configuration and specify a valid class and method to call:  

    'afterSend'=>array('ModelSMS', 'logSentMessage'),

2) Define the method that will do the logging inside a class/model:  

    class ModelSMS extends CActiveRecord
    {

      // ...

      public function logSentMessage($to, $text, $sent, $lastErrorMessage, $extra=array()) {

        $model=new ModelSMS;
        $model->date=date("Y-m-d H:i:s");
        $model->text=$text;
        $model->phone=$to;
        $model->extra_param_name=isset($extra['extra_param_name']) ? $extra['extra_param_name'] : null;
        $model->sent=(int)$sent;
        $model->error_message=!empty($lastErrorMessage) ? $lastErrorMessage : null;
        $model->save();

      }

    }

## How to add more providers

If you don't want to use it with Twilio and want to add other provider you can follow this steps:

1) Download the provider third-party files/SDK if available and place it somewhere you can load it from (eg: vendor)

2) Create a new provider class under extensions/yii-sms/providers (you can duplicate TwilioSMSProvider.php)

3) Modify and adjust the code inside the new provider class

4) Change the 'defaultProvider' parameter in the configuration so you use this one instead of Twilio