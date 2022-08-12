<?php

$this->breadcrumbs = array(
	Post::label(2),
	Yii::t('app', 'Index'),
);

if(!Yii::app()->user->isGuest){
	$this->menu = array(
		array('label'=>Yii::t('app', 'Escrever Postagem'), 'url' => array('create')),
		array('label'=>Yii::t('app', 'Gerenciar Postagens'), 'url' => array('admin')),
	);
}
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array(
		'post_date'
	)
)); 