<?php

Yii::import('application.models._base.BaseComment');

class Comment extends BaseComment
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function search() {
		$criteria = new CDbCriteria;
		$userId = Yii::app()->user->id;
		
		if($userId!=1){
			$criteria->addCondition(array('user_id = '.$userId),"AND");
		}

		$criteria->compare('comment_id', $this->comment_id);
		$criteria->compare('comment_title', $this->comment_title, true);
		$criteria->compare('comment_text', $this->comment_text, true);
		$criteria->compare('comment_date', $this->comment_date, true);
		$criteria->compare('post_id', $this->post_id);
		$criteria->compare('user_id', $this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}