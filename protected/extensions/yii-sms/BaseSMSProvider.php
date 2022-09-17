<?php

abstract class BaseSMSProvider extends CApplicationComponent {
  public $from=null;
  
  public $lastErrorMessage=null;
  
  abstract public function sendSMS($to, $text);
}
