<?php
class EWebUser extends CWebUser{
 
    protected $_model;
 
    public  function isAdmin(){
        $user = $this->loadUser();
        if ($user)
           return $user->level==LevelLookUp::ADMIN;
        return false;
    }
 
   public  function isMemberPasien(){
        $user = $this->loadUser();
        if ($user)
           return $user->level==LevelLookUp::MEMBERPASIEN;
	   
        return false;
    }
	
  
   public function isGuest(){
        $user = $this->loadUser();
        if ($user)
           return $user->level==LevelLookUp::GUEST;
        return false;
    }


	// saving logged users into a state

	
    // Load user model.
    protected function loadUser()
    {
        if ( $this->_model === null ) {
                $this->_model =Users::model()->findByPk( $this->id );
        }
        return $this->_model;
    }

public function getLevel()
    {
        $user=$this->loadUser();
        if($user)
            return $user->level;
        return 100;
    }
}
?>