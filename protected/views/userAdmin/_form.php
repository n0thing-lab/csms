<?php
/* @var $this UserAdminController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form-horizontal">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'name', array('class'=>"col-sm-2 control-label")); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>250, 'class'=>"form-control")); ?>
			<?php echo $form->error($model,'name'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'surname', array('class'=>"col-sm-2 control-label")); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'surname',array('size'=>60,'maxlength'=>250, 'class'=>"form-control")); ?>
			<?php echo $form->error($model,'surname'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email', array('class'=>"col-sm-2 control-label")); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>250, 'class'=>"form-control")); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password', array('class'=>"col-sm-2 control-label")); ?>
		<div class="col-sm-10">
			<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>250, 'class'=>"form-control")); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>"btn btn-default")); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->