<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'post-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'post_title'); ?>
		<?php echo $form->textField($model, 'post_title', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'post_title'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'post_text'); ?>
		<?php echo $form->textArea($model, 'post_text'); ?>
		<?php echo $form->error($model,'post_text'); ?>
		</div><!-- row -->
		<!-- <div class="row">
		<?php //echo $form->labelEx($model,'user_id'); ?>
		<?php //echo $form->dropDownList($model, 'user_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true))); ?>
		<?php //echo $form->error($model,'user_id'); ?>
		</div> -->

		<label><?php //echo GxHtml::encode($model->getRelationLabel('comments')); ?></label>
		<?php //echo $form->checkBoxList($model, 'comments', GxHtml::encodeEx(GxHtml::listDataEx(Comment::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Salvar'));
$this->endWidget();
?>
</div><!-- form -->