<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model, 'comment_title'),
);

if(!Yii::app()->user->isGuest){
	$this->menu=array(
		array('label'=>Yii::t('app', 'Listar') . ' Comentários' , 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Escrever') . ' Comentário', 'url'=>array('create')),
		array('label'=>Yii::t('app', 'Atualizar') . ' Comentário', 'url'=>array('update', 'id' => $model->comment_id)),
		array('label'=>Yii::t('app', 'Deletar') . ' Comentário', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->comment_id), 'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>Yii::t('app', 'Gerenciar') . ' Comentários' , 'url'=>array('admin')),
	);
}
?>

<div>	
	<h5><?php echo GxHtml::encode(GxHtml::valueEx($model, 'comment_title')); ?></h5>
	<span id="author-name"><p><?php echo 'Autor: '.GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->user)), array('user/view', 'id' => GxActiveRecord::extractPkValue($model->user, true))); ?></p></span>
	<p>
		<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?>
		<br/>
	</p>
	<div id="post-view-footer">
		<span><?php echo 'Data: '.GxHtml::encode(GxHtml::valueEx($model, 'comment_date')); ?></span>
	</div>
	<?php GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->post_id)), array('post/view', 'id' => GxActiveRecord::extractPkValue($model->post, true)))?>
</div>
<hr>
<?php if(!Yii::app()->user->isGuest){?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		array(
			'name' => 'Post',
			'type' => 'raw',
			'value' => $model->post !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->post, 'post_title')), array('post/view', 'id' => GxActiveRecord::extractPkValue($model->post, true))) : null,
			),
		array(
			'name' => 'Usuário',
			'type' => 'raw',
			'value' => $model->user !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->user)), array('user/view', 'id' => GxActiveRecord::extractPkValue($model->user, true))) : null,
			),
	),
)); ?>
<?php }else{}?>
