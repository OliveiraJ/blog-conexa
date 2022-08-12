<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Cadastro'),
);

if(Yii::app()->user->id===1){
	$this->menu = array(
		array('label'=>Yii::t('app', 'Listar') . ' Usuários', 'url' => array('index')),
		array('label'=>Yii::t('app', 'Gerenciar') . ' Usuários', 'url' => array('admin')),
	);
}
?>

<h5><?php echo Yii::t('app', 'Efetue seu cadastro preenchendo os campos abaixo.'); ?></h5>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>