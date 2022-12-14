<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'Listar Postagens'), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Escrever Postagem'), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('post-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h4><?php echo Yii::t('app', 'Gerencie suas postagens'); ?></h4>

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
	'id' => 'post-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'post_id',
		'post_text',
		'post_title',
		'post_date',
		array(
				'name'=>'post_category',
				'value'=>'GxHtml::valueEx($data->postCategory)',
				'filter'=>GxHtml::listDataEx(Category::model()->findAllAttributes(null, true)),
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