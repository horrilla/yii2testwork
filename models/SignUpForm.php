<?php

namespace app\models;

use Yii;
use yii\base\Model;

class SignupForm extends Model
{

	public $username;
	public $email;
	public $password;

	public function rules()
	{
		return [
			['username', 'trim'],
			['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
			['username', 'string', 'min' => 2, 'max' => 255],
			['email', 'trim'],
			['email', 'required'],
			['email', 'email'],
			['email', 'string', 'max' => 255],
			['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
			['password', 'string', 'min' => 6],
		];
	}

	public function signup()
	{

		if (!$this->validate()) {
			return null;
		}

		$user = new User();
		$user->username = htmlspecialchars($this->username);
		$user->email = htmlspecialchars($this->email);
		$user->setPassword(htmlspecialchars($this->password));
		$user->generateAuthKey();
		return $user->save() ? $user : null;
	}

}