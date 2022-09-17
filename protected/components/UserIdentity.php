<?php
class UserIdentity extends CUserIdentity
{
    private $_id;
 /**
  * Authenticates a user.
  * The example implementation makes sure if the username and password
  * are both 'demo'.
  * In practical applications, this should be changed to authenticate
  * against some persistent user identity storage (e.g. database).
  * @return boolean whether authentication succeeds.
  */
 public function authenticate()
 {
	 
                $model = new Users;
			$user= $model->findByAttributes(array('username'=>$this->username));
                if($user===null){
                    $this->errorCode=self::ERROR_USERNAME_INVALID;
                }else{
                    if($user->password !== $user->encrypt($this->password)){
                        $this->errorCode=self::ERROR_PASSWORD_INVALID;
                    }else{
                        $this->_id = $user->id_user;
                        $this->errorCode=self::ERROR_NONE;
                    }
                }
  return !$this->errorCode;
 }        
    public function getId()
    {
        return $this->_id;
    }
}