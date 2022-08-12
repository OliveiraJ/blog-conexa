<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Atualizar'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'Listar Postagens') , 'url'=>array('index')),
	array('label' => Yii::t('app', 'Criar Postagem') , 'url'=>array('create')),
	array('label' => Yii::t('app', 'Visualizar Postagens') , 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Gerenciar Postagens') , 'url'=>array('admin')),
);
?>

<h4><?php echo Yii::t('app', 'Atualizar Postagem: ') . GxHtml::encode(GxHtml::valueEx($model)); ?></h4>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>