<?php

Yii::import('application.models._base.BasePost');

class Post extends BasePost
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function search() {
		$criteria = new CDbCriteria;
		$userId = Yii::app()->user->id;
		if($userId!=1){
			$criteria->addCondition('user_id = '.$userId,"AND");
		}
		
		$criteria->compare('post_id', $this->post_id);
		$criteria->compare('post_text', $this->post_text, true);
		$criteria->compare('post_title', $this->post_title, true);
		$criteria->compare('post_date', $this->post_date, true);
		$criteria->compare('post_category', $this->post_category);
		$criteria->compare('user_id', $this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}