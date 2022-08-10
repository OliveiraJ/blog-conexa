<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('comment_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->comment_id), array('view', 'id' => $data->comment_id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('comment_title')); ?>:
	<?php echo GxHtml::encode($data->comment_title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('comment_text')); ?>:
	<?php echo GxHtml::encode($data->comment_text); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('comment_date')); ?>:
	<?php echo GxHtml::encode($data->comment_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('post_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->post)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->user)); ?>
	<br />

</div>