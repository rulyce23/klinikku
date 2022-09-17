<?php

// this line loads the library 
$twilio_path=dirname(__FILE__).'/../../../vendor/twilio-php/Services/Twilio.php';
require($twilio_path); 

class TwilioSMSProvider extends BaseSMSProvider {
  
  public $account_sid=null;
  public $auth_token=null;
  
  public function sendSMS($to, $text) {
    
    $CURLOPT_SSL_VERIFYPEER=true;
    
    if (isset(Yii::app()->params['DISABLE_CURLOPT_SSL_VERIFYPEER'])) {
      $CURLOPT_SSL_VERIFYPEER=false;
    }
    
    $http = new Services_Twilio_TinyHttp(
      'https://api.twilio.com',
      array('curlopts' => array(
          CURLOPT_SSL_VERIFYPEER => $CURLOPT_SSL_VERIFYPEER,
          CURLOPT_SSL_VERIFYHOST => 2,
      )));

    $client = new Services_Twilio($this->account_sid, $this->auth_token, "2010-04-01", $http);
    
//    $client = new Services_Twilio($this->account_sid, $this->auth_token); 
    
    try {

      /* @var $message Services_Twilio_Rest_Message */
      $message = $client->account->messages->sendMessage(
        $this->from, // From a Twilio number in your account
        $to, // Text any number
        $text
      );
    
    } catch (Services_Twilio_RestException $ex) {
      $this->lastErrorMessage=$ex->getMessage();
      Yii::log($ex->getMessage(), CLogger::LEVEL_ERROR, 'sms');
      return false;
    }
    
    Yii::log("Twilio sent SMS: {$message->sid}", CLogger::LEVEL_INFO, 'sms');
    
    return true;
    
  }
}
