<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('Id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->category_id), array('view', 'id' => $data->category_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('Nome')); ?>:
	<?php echo GxHtml::encode($data->cateogry_name); ?>
	<br />

</div>