<?php

class PostController extends GxController {
	public function accessRules(){
		return array(
			array('allow','actions'=>array('index','view'),'users'=>array('*')),
			array('allow','actions'=>array('index','view','update','create','delete'),'users'=>array('@')),
		);
	}

	public function filters()
    {
        return array(
            'accessControl',
        );
    }
	
	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Post'),
		));
	}

	public function actionCreate() {
		$model = new Post;

		if (isset($_POST['Post'])) {
			$model->setAttributes($_POST['Post']);
			$model->post_date=date('Y-m-d H:i:s');
			$username=Yii::app()->user->name;
			$user = User::model()->findByAttributes(array('name'=>$username));
			$model->user_id=$user->user_id;
			
			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->post_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Post');


		if (isset($_POST['Post'])) {
			$model->setAttributes($_POST['Post']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->post_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		
			if (Yii::app()->getRequest()->getIsPostRequest()) {
				$username=Yii::app()->user->name;
				$user = User::model()->findByAttributes(array('name'=>$username));			
				$post = $this->loadModel($id, 'Post');
				if($post->user_id===$user->user_id){
					$post->delete();	
				}
				if (!Yii::app()->getRequest()->getIsAjaxRequest()){
					$this->redirect(array('admin'));
				}			
			} else
				throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));

	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Post');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Post('search');
		$model->unsetAttributes();

		if (isset($_GET['Post']))
			$model->setAttributes($_GET['Post']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
}