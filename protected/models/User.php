<?php

Yii::import('application.models._base.BaseUser');

class User extends BaseUser
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function validatePassword($password){
		if($password===$this->password){
			return true;
		}
		return false;
	}
}