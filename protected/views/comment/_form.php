<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'comment-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Campos com'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'são obrigatórios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'Título'); ?>
		<?php echo $form->textField($model, 'comment_title', array('maxlength' => 255)); ?><span class="required">*</span> 
		<?php echo $form->error($model,'comment_title'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Comentário'); ?>
		<?php echo $form->textArea($model, 'comment_text'); ?><span class="required">*</span> 
		<?php echo $form->error($model,'comment_text'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Título do Post'); ?>
		<?php echo $form->dropDownList($model, 'post_id', GxHtml::listDataEx(Post::model()->findAllAttributes(null, true))); ?><span class="required">*</span> 
		<?php echo $form->error($model,'post_id'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Salvar'));
$this->endWidget();
?>
</div><!-- form -->