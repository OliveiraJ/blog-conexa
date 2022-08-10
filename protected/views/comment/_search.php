<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'comment_id'); ?>
		<?php echo $form->textField($model, 'comment_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'comment_title'); ?>
		<?php echo $form->textField($model, 'comment_title', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'comment_text'); ?>
		<?php echo $form->textArea($model, 'comment_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'comment_date'); ?>
		<?php echo $form->textField($model, 'comment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'post_id'); ?>
		<?php echo $form->dropDownList($model, 'post_id', GxHtml::listDataEx(Post::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'user_id'); ?>
		<?php echo $form->dropDownList($model, 'user_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
