<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

if(!Yii::app()->user->isGuest){
	$this->menu=array(
		array('label'=>Yii::t('app', 'Listar Usuários') , 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Criar Usuário'), 'url'=>array('create'), 'visible'=>!Yii::app()->user->isGuest&&Yii::app()->user->name==='admin'),
		array('label'=>Yii::t('app', 'Atualizar Usuário'), 'url'=>array('update', 'id' => $model->user_id), 'visible'=>!Yii::app()->user->isGuest&&Yii::app()->user->name==='admin'),
		array('label'=>Yii::t('app', 'Deletar Usuário'), 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest&&Yii::app()->user->name==='admin','linkOptions' => array('submit' => array('delete', 'id' => $model->user_id), 'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>Yii::t('app', 'Gerenciar Usuários'), 'url'=>array('admin'), 'visible'=>!Yii::app()->user->isGuest&&Yii::app()->user->name==='admin'),
	);
}
?>

<h4><?php echo 'Usuário: '.GxHtml::encode(GxHtml::valueEx($model)); ?></h4>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'user_id',
		'name',
		'surname',
		'email',
	),
)); ?>

<h4><?php echo GxHtml::encode($model->getRelationLabel('Comentários')); ?></h4>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->comments as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('comment/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h4><?php echo GxHtml::encode($model->getRelationLabel('Postagens')); ?></h4>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->posts as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('post/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>