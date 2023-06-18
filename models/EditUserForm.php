<?php


namespace app\models;


use yii\base\Model;
use yii\db\Exception;

class EditUserForm extends Model
{
	public $username;
	public $email;

	public function rules()
	{
		return [
			['username', 'trim'],
			['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
			['username', 'string', 'min' => 2, 'max' => 255],
			['email', 'trim'],
			['email', 'email'],
			['email', 'string', 'max' => 255],
			['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
		];
	}
	public function edit($user)
	{
		if (!$this->validate()) {
			return null;
		}

		$this->username !== '' ? $user->username = htmlspecialchars($this->username) : null;
		$this->email !== '' ? $user->email = htmlspecialchars($this->email) : null;
		if ($user->save()) {
			return true;
		} else {
			return null;
		}
	}
}