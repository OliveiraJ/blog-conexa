<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->post_id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->post_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
//'post_id',
'post_title',
'post_text',
'post_date',
array(
			'name' => 'user',
			'type' => 'raw',
			'value' => $model->user !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->user)), array('user/view', 'id' => GxActiveRecord::extractPkValue($model->user, true))) : null,
			),
	),
)); ?>

<div>
	<h3><?php echo $model->post_title; ?></h3>
	<p><?php echo $model->post_text; ?></p>
	<div>
		<span><?php echo $model->post_date; ?></span>
		<span><?php echo $model->user !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->user)), array('user/view', 'id' => GxActiveRecord::extractPkValue($model->user, true))) : null; ?></span>
	</div>
</div>

<h2><?php echo GxHtml::encode($model->getRelationLabel('comentários')); ?></h2>
<div>
<?php
	//echo GxHtml::openTag('ul');
	foreach($model->comments as $relatedModel) {
		//echo GxHtml::openTag('li');
		$relatedModel->user_id;
		echo "<div id='coment-title'>";
		echo 	GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('comment/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo "</div>";
		echo "
		<div id='coment-body'>
			$relatedModel->comment_text
		</div>
		<div id='coment-date'>
			$relatedModel->comment_date
		</div>
		";
		//echo GxHtml::closeTag('li');
	}
	//echo GxHtml::closeTag('ul');
?>
</div>
