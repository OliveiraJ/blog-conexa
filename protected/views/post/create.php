<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Criar'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Listar ') . ' ' . $model->label(2), 'url' => array('index')),
	array('label'=>Yii::t('app', 'Gerenciar') . ' ' . $model->label(2), 'url' => array('admin')),
);
?>

<h4><?php echo Yii::t('app', 'Escreva uma Postagem')?></h4>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>