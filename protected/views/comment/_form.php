<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'comment-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'comment_title'); ?>
		<?php echo $form->textField($model, 'comment_title', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'comment_title'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'comment_text'); ?>
		<?php echo $form->textArea($model, 'comment_text'); ?>
		<?php echo $form->error($model,'comment_text'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'post_id'); ?>
		<?php echo $form->dropDownList($model, 'post_id', GxHtml::listDataEx(Post::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'post_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->dropDownList($model, 'user_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'user_id'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->