<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'Título'); ?>
		<?php echo $form->textField($model, 'comment_title', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Texto'); ?>
		<?php echo $form->textArea($model, 'comment_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Data'); ?>
		<?php echo $form->textField($model, 'comment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Título da Postagem'); ?>
		<?php echo $form->dropDownList($model, 'post_id', GxHtml::listDataEx(Post::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>
	<?php if(Yii::app()->user->name==='admin') {?>
		<div class="row">
			<?php echo $form->label($model, 'Usuário'); ?>
			<?php echo $form->dropDownList($model, 'user_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
		</div>
	<?php }else {}?>
	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Pesquisar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
