<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'post-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Os campos com'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'são obrigatórios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'Título'); ?>
		<?php echo $form->textField($model, 'post_title', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'post_title'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Corpo'); ?>
		<?php echo $form->textArea($model, 'post_text'); ?>
		<?php echo $form->error($model,'post_text'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Categoria'); ?>
		<?php echo $form->dropDownList($model, 'post_category', GxHtml::listDataEx(Category::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'post_category'); ?>
		</div><!-- row -->
		

<?php
echo GxHtml::submitButton(Yii::t('app', 'Salvar'));
$this->endWidget();
?>
</div><!-- form -->