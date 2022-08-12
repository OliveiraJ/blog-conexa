<?php

$this->breadcrumbs = array(
	Comment::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Criar Comentários'), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Gerenciar Comentários'), 'url' => array('admin')),
);
?>

<h4><?php echo 'Lista de comentários'; ?></h4>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 