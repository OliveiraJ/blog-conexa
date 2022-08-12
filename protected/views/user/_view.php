<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('Id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->user_id), array('view', 'id' => $data->user_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('Nome')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Sobrenome')); ?>:
	<?php echo GxHtml::encode($data->surname); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />


</div>