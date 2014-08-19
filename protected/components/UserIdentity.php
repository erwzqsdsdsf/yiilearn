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
	public function authenticate()
	{
		$user=User::model()->findByAttributes(array(
            'username'=>$this->username //这里user name是useridetn的固有属性。前面产生的。

        ));
     //   $user=User::model()->find('username=:name',array('name'=>$this->username));    // name是useridetn的固有属性。前面产生的。


		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($user->check($this->password))
            $this->errorCode=self::ERROR_NONE;

		else
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
		return !$this->errorCode; //只有error等于null的时候，才是返回真。否则都是假，也就是验证没有通过。
	}
//    这里验证有3种情况，第一个是，没有这个用户，第二个是用户名错误。第三个是认证通过。
//这三个关系，条件是并列的。所以用if else！
//第一个是找出用户，第二个是用那个模型去验证用户输入的密码！
//用户id和用户密码的哈希值，都是已经存在的！在第一步找的时候，都load了数据。值需要做check就可以了！
}