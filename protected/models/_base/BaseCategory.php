<?php

/**
 * This is the model base class for the table "category".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Category".
 *
 * Columns in table "category" available as properties of the model,
 * followed by relations of table "category" available as properties of the model.
 *
 * @property integer $category_id
 * @property string $cateogry_name
 *
 * @property Post[] $posts
 */
abstract class BaseCategory extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'category';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Category|Categories', $n);
	}

	public static function representingColumn() {
		return 'cateogry_name';
	}

	public function rules() {
		return array(
			array('cateogry_name', 'required'),
			array('cateogry_name', 'length', 'max'=>100),
			array('category_id, cateogry_name', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'posts' => array(self::HAS_MANY, 'Post', 'post_category'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'category_id' => Yii::t('app', 'Category'),
			'cateogry_name' => Yii::t('app', 'Cateogry Name'),
			'posts' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('category_id', $this->category_id);
		$criteria->compare('cateogry_name', $this->cateogry_name, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}