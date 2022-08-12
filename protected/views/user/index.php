<?php

$this->breadcrumbs = array(
	User::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Cadastrar') . ' Usuário', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Gerenciar') . ' Usuários', 'url' => array('admin')),
);
?>

<h4><?php echo 'Lista de Usuários'; ?></h4>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 