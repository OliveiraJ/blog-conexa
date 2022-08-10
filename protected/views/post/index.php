<?php

$this->breadcrumbs = array(
	Post::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>'Criar Post', 'url' => array('create')),
	array('label'=>'Gerenciar Posts', 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Post::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 