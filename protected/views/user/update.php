<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Atualizar'),
);

if(!Yii::app()->user->isGuest){

	$this->menu = array(
		array('label' => Yii::t('app', 'Listar Usuários') , 'url'=>array('index')),
		array('label' => Yii::t('app', 'Criar Usuário') , 'url'=>array('create'), 'visible'=> Yii::app()->user->id==1),
		array('label' => Yii::t('app', 'Visualizar Usuário') , 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
		array('label' => Yii::t('app', 'Gerenciar Usuário') , 'url'=>array('admin'), 'visible'=> Yii::app()->user->id==1),
	);
}
?>

<h4><?php echo Yii::t('app', 'Atualizar') . ' Usuário ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h4>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>