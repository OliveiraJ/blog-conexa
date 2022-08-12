<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('Id')); ?>:
	<?php echo GxHtml::encode($data->comment_id); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('Título')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->comment_title), array('view', 'id' => $data->comment_id)); ?>

	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Comentário')); ?>:
	<?php echo GxHtml::encode($data->comment_text); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Data')); ?>:
	<?php echo GxHtml::encode($data->comment_date); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('Autor')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->user)); ?>
	<br />

</div>