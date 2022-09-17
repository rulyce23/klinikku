<?php
public function SendSMS(){
             Yii::import('application.vendors.twilio-php.Services.Twilio.Resource.php');
             Yii::import('application.vendors.twilio-php.Services.Twilio.Rest.Accounts.php');
             Yii::import('application.vendors.twilio-php.Services.Twilio.ListResource.php');
             Yii::import('application.vendors.twilio-php.Services.Twilio.HttpStream.php');
             include 'C:\Projects\EMR\webapp\protected\vendors\twilio-php\Services\Twilio.php';
             $AccountSid = "SID";
             $AuthToken = "Token";
             $client = new Services_Twilio($AccountSid, $AuthToken);
             $sms = $client->account->sms_messages->create(
                                      "111-222-3333", // From this number
                                      "9999999999", // To this number
                                      "First PHP Test message!"
                                       );
            // Display a confirmation message on the screen
            echo "Sent message {$sms->sid}";
}
?>