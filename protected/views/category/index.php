<?php

$this->breadcrumbs = array(
	Category::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Criar') . ' Categoria','url' => array('create')),
	array('label'=>Yii::t('app', 'Gerenciar') . ' Categorias', 'url' => array('admin')),
);
?>

<h4><?php echo 'Lista de Categorias'; ?></h4>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 