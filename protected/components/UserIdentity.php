<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
        protected $_id;
        public function authenticate()
	{
		$user = User::model()->find('username=:username', array(':username'=>$this->username));
		if(!$user)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(md5($this->password)!==$user->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
                $this->_id = $user->id; 
                $this->setState('id', $user->id);
                $this->setState('username', $user->username);
                switch($user->role)
                {
                    case 'admin':
                            $this->setState('returnUrl', '../product/index');
                        break;
                }
		return !$this->errorCode;
	}
        
        public function getId() {
            return $this->_id;
        }
}