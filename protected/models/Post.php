<?php

Yii::import('application.models._base.BasePost');

class Post extends BasePost
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function getUrl(){
		return Yii::app()->createUrl('post/view', array(
			'id'=>$this->post_id,
			'title'=>$this->post_title,
		));
	}

	protected function afterDelete(){
		parent::afterDelete();
		Comment::model()->deleteAll('post_id='.$this->post_id);
	}
}