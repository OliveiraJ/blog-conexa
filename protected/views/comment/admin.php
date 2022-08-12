<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Gerenciar'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'Listar') . ' Comentários' , 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Criar') . ' Comentário' , 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('comment-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Gerencie') . ' os comentários'; ?></h1>

<p>
Você pode utilizar operadores de comparação (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) no início de cada um de seus valores de pesquisa para especificar como a comparação deve ser feita.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Busca Avançada'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'comment-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'comment_id',
		'comment_title',
		'comment_text',
		'comment_date',
		array(
				'name'=>'post_id',
				'value'=>'GxHtml::valueEx($data->post, "post_title")',
				'filter'=>GxHtml::listDataEx(Post::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'user_id',
				'value'=>'GxHtml::valueEx($data->user)',
				'filter'=>GxHtml::listDataEx(User::model()->findAllAttributes(null, true)),
				),
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>