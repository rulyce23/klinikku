<?php
Yii::import('application.vendor.twilio.*');
require_once('Services/Twilio.php');

class CommsController extends Controller
{
        public $sid = "AC7d3b90f857197b63e4fce3cfdd642705"; // Your Account SID from www.twilio.com/user/account
        public $token = "9f1f4aaf83af80d3095cf8ecdf1ac19a"; // Your Auth Token from www.twilio.com/user/account
        
        public function getSid()
        {
            return $sid;
        }
        
        public function getToken()
        {
            return $token;
        }
        
        public function actionSendsms()
        {
                $this->render('Sendsms');
        }

        public function actionReceivesms()
        {
                $this->render('Receivesms');
        }
}
?>