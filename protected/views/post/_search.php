<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<?php if(Yii::app()->user->id===1){ 	?>
	<div class="row">
		<?php echo $form->label($model, 'Id do Post'); ?>
		<?php echo $form->textField($model, 'post_id'); ?>
	</div>
	<?php }else{}?>

	<div class="row">
		<?php echo $form->label($model, 'Postagem'); ?>
		<?php echo $form->textArea($model, 'post_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Título'); ?>
		<?php echo $form->textField($model, 'post_title', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Data'); ?>
		<?php echo $form->textField($model, 'post_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Categoria'); ?>
		<?php echo $form->dropDownList($model, 'post_category', GxHtml::listDataEx(Category::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
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
