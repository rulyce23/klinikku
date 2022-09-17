<?Php
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
?>