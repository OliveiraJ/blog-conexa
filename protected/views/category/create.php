<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Listar') . ' Categorias' , 'url' => array('index')),
	array('label'=>Yii::t('app', 'Gerenciar') . ' Categorias', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Crie') . ' uma categoria'; ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>