<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model, 'post_title'),
);

if(!Yii::app()->user->isGuest){

	$this->menu=array(
		array('label'=>Yii::t('app', 'Listar Postes') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Escrever') . ' ' . $model->label(), 'url'=>array('create')),
		array('label'=>Yii::t('app', 'Atualizar') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->post_id)),
		array('label'=>Yii::t('app', 'Deletar') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->post_id), 'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>Yii::t('app', 'Gerenciar') . ' ' . $model->label(2), 'url'=>array('admin')),
	);
}
?>


<div>	
	<h5><?php echo GxHtml::encode(GxHtml::valueEx($model, 'post_title')); ?></h5>
	<span id="author-name"><p><?php echo 'Autor: '.GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->user)), array('user/view', 'id' => GxActiveRecord::extractPkValue($model->user, true))); ?></p></span>
	<p>
		<?php echo GxHtml::encode(GxHtml::valueEx($model, 'post_text')); ?>
		<br/>
	</p>
	<div id="post-view-footer">
		<span><?php echo 'Categoria: '.GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->postCategory)), array('category/view', 'id' => GxActiveRecord::extractPkValue($model->postCategory, true))); ?></span>
		<span><?php echo 'Data: '.GxHtml::encode(GxHtml::valueEx($model, 'post_date')); ?></span>
	</div>
</div>

<hr>
<h5><?php echo GxHtml::encode($model->getRelationLabel('Comentários')); ?></h5>

<div>
<?php
	foreach($model->comments as $relatedModel) {
		
		$relatedModel->user_id;
		echo "<div id='comment-title'>";
		echo 	GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('comment/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo "</div>";
		echo "
		<div id='comment-body'>
			<p>
				$relatedModel->comment_text
			</p>
		</div>
		<div id='comment-date'>
			Data: $relatedModel->comment_date
		</div>
		<hr/>
		";
	}
?>
</div>