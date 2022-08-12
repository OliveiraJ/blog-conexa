<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Atualizar'),
);

if(!Yii::app()->user->isGuest){

	$this->menu = array(
		array('label' => Yii::t('app', 'Listar Comentários') , 'url'=>array('index')),
		array('label' => Yii::t('app', 'Criar Comentário') , 'url'=>array('create')),
		array('label' => Yii::t('app', 'Visualizar Comentários') , 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
		array('label' => Yii::t('app', 'Gerenciar Comentários') , 'url'=>array('admin')),
	);
}
?>

<h4><?php echo Yii::t('app', 'Atualizar Comentário: ') . GxHtml::encode(GxHtml::valueEx($model)); ?></h4>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>