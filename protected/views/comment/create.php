<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Criar'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Listar') . ' Comentários' , 'url' => array('index')),
	array('label'=>Yii::t('app', 'Gerenciar') . ' Comentários' , 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Criar') . ' Comentário'; ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>