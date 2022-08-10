
<div class="view" >

	<?php //echo GxHtml::encode($data->getAttributeLabel('post_id')); ?>
	<?php //echo GxHtml::link(GxHtml::encode($data->post_id), array('view', 'id' => $data->post_id)); ?>
	<div style="font-weight: bold;">
		<?php echo GxHtml::encode($data->getAttributeLabel('Título')); ?>:
		<?php echo GxHtml::link(GxHtml::encode($data->post_title), array('view', 'id' => $data->post_id));?>
	</div>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('Post')); ?>:
	<br/>
	<div style="margin: 20px;color:#121212">
		
		<p>
			<?php echo GxHtml::encode($data->post_text); ?>
		</p>
	</div>
	<br />
	<div style="display: flex; justify-content:space-between; font-size:x-small">
		<span style="display:inline-block">
			<?php echo GxHtml::encode($data->getAttributeLabel('Publicado em')); ?>:
			<?php echo GxHtml::encode($data->post_date); ?>
			<br />
		</span>
		<span style="display:inline-block">
			<?php echo GxHtml::encode($data->getAttributeLabel('Autor')); ?>:
			<?php echo GxHtml::encode(GxHtml::valueEx($data->user)); ?>
			<br />
		</span>
	</div>

</div>