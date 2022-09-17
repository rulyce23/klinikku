<?php

/**
 * Simple Application Component that allows you to send SMS messages using LabsMobile Gateway.
 * Yii::app()->sms()->send(array('to'=>'+40746xxxxxx','message'=>'hello world!');
 *
 * More info about API, params, results: http://www.labsmobile.com/en/api
 */
class LabsMobileSms extends CApplicationComponent {

    // @var Mobile phone no to send the SMS to. It can be an array with more numbers. Phones must include country code. */
    public $to;

    // @var The message to be send */
    public $message;

    // @var Sender for the messages */
    public $sender;

    // @var LabsMobile account username */
    public $LMaccount_username;

    // @var LabsMobile account password */
    public $LMaccount_password;

    // @var LabsMobile client for API requests */
    public $LMaccount_clientapi;

    /**
     * Sends SMS request to LabsMobile platform.
     * @param array $config A key=>value array to configure the message: $to, $message, $sender
     * @return result of the resquest: 0 for success, others for errors
     * More info http://www.labsmobile.com/en/api
     */
    public function send($config) {
        //echo $this->LMaccount_username."<br>".$this->LMaccount_password."<br>".$this->LMaccount_clientapi;exit;
        foreach ($config as $k => $v) {
            $this->$k = $v;
        }

        if (is_array($this->to)) {
	        $to_str = implode("</msisdn><msisdn>", $this->to);
        } else {
	        $to_str = $this->to;
        }

        if(isset($this->sender)){
	        $sender_str = "<tpoa>".$this->sender."</tpoa>";
        } else {
            $sender_str = "";
        }

        $to_message = urlencode(htmlspecialchars($this->message, ENT_QUOTES));

        $url = 'https://api.labsmobile.com/clients/'.$this->LMaccount_clientapi."/";
        $sms_format = "<sms>
                <recipient>
                    <msisdn>$to_str</msisdn>
                </recipient>
                $sender_str
                <message>$to_message</message>
                </sms>";
      
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        //curl_setopt($ch, CURLOPT_USERPWD, $this->LMaccount_username.':'.$this->LMaccount_password);
        curl_setopt($ch, CURLOPT_USERPWD, 'shelley@shrishtionline.com:mk43sc94');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'XmlData='.$sms_format);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $result = curl_exec($ch);
        curl_close($ch);
          
        if(stripos($result, "<code>") !== FALSE) {
	        return $this->_xml_extract("code", $result);
        } else {
	        return 30;
        }
    }

    /**
     * Get the credits of an account from LabsMobile platform.
     * @return result of the resquest: number of credits
     * More info http://www.labsmobile.com/en/api
     */
    public function get_balance() {
        $url = "https://api.labsmobile.com/get/balance.php?username=".$this->LMaccount_username."&password=".$this->LMaccount_password;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $result = curl_exec($ch);
        curl_close($ch);

        if(stripos($result, "<code>") !== FALSE) {
	        return $this->_xml_extract("code", $result);
        } else {
	        return "";
        }
    }

    private function _xml_extract ($attr, $xml){
        $init = stripos($xml, "<".$attr.">");
        $end_pos = stripos($xml, "</".$attr.">");
        $init_pos = $init+strlen($attr)+2;
        return substr($xml, $init_pos, $end_pos-$init_pos);
    }
}

