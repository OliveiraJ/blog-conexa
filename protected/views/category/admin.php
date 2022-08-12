<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Gerenciar'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'Listar') . ' Categorias', 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Criar') . ' Categoria' , 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('category-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h5><?php echo 'Pesquise por categorias'; ?></h5>

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
	'id' => 'category-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'category_id',
		'cateogry_name',
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>