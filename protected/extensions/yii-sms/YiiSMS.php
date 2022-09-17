<?php

Yii::import('application.modules.oi.extensions.yii-sms.*');
Yii::import('application.modules.oi.extensions.yii-sms.providers.*');

class YiiSMS extends CApplicationComponent {
    
  public $dryRun=false;
  public $defaultProvider=null;
  public $providers=array();
  public $afterSend=null;
  
  private $_providers=array();
  
  public function init() {
    
    if ($this->defaultProvider===null) {
      throw new CHttpException(500,'Please set the default SMS provider you want to use.');
    }
    
    if (count($this->providers)===0) {
      throw new CHttpException(500,'Please define a SMS provider.');
    }
    
    foreach ($this->providers as $name => $config) {
      $config['class']="{$name}SMSProvider";
      $this->_providers[$name]=Yii::createComponent($config);
    }
    
    parent::init();
  }
  
  public function send($to, $text, $extra=array()) {
    
    $this->getProvider()->lastErrorMessage=null;
    
    if ($this->dryRun) {
      $sent=true;
    } else {
      $sent=$this->getProvider()->sendSMS($to, $text);
    }
    
    Yii::log("Send SMS to {$to}: $text", CLogger::LEVEL_TRACE, 'sms');
    
    if ($this->afterSend !== null) {
      call_user_func_array($this->afterSend, array($to, $text, $sent, $this->getProvider()->lastErrorMessage, $extra));
    }
    
    return $sent;
    
  }
  
  public function getLastErrorMessage() {
    $result=$this->getProvider()->lastErrorMessage;
    return $result;
  }
  
  /**
   * Returns the SMS provider
   * @return BaseSMSProvider
   */
  private function getProvider() {
    return $this->_providers[$this->defaultProvider];
  }
  
}