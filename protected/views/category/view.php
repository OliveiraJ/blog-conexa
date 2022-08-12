<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

if(Yii::app()->user->id===1){
	$this->menu=array(
		array('label'=>Yii::t('app', 'Listar') . ' Categoria' , 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Criar') . ' Categoria' , 'url'=>array('create')),
		array('label'=>Yii::t('app', 'Autualizar') . ' Categoria' , 'url'=>array('update', 'id' => $model->category_id)),
		array('label'=>Yii::t('app', 'Deletar') . ' Categoria' , 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->category_id), 'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>Yii::t('app', 'Gerenciar') . ' Categoria' , 'url'=>array('admin')),
	);
}
?>

<h5><?php echo GxHtml::encode($model->getRelationLabel('posts')); ?></h5>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->posts as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel, 'post_title')), array('post/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
		echo '<br/>';
	}
	echo GxHtml::closeTag('ul');
?>