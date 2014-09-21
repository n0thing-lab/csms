<?php
/* @var $this CategoryAdminController */
/* @var $model Category */
/* @var $form CActiveForm */
?>

<div class="form-horizontal">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'category-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="form-group">
			<div class="col-sm-10">
			<?php
				$this->widget('ext.yii-image-attachment.ImageAttachmentWidget', array(
					'model' => $model,
					'behaviorName' => 'cover',
					'apiRoute' => 'categoryAdmin/saveImageAttachment',
				));
			?>
			</div>
		</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'parent', array('class'=>"col-sm-2 control-label")); ?>
		<div class="col-sm-10">
            <?php echo $form->dropDownList($model, 'parent',
	            CHtml::listData(Category::model()->findAll(), 'id', 'name'), array('prompt' =>'Выберите категорию', 'class'=>"form-control")); ?>
            <?php echo $form->error($model,'parent'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'name', array('class'=>"col-sm-2 control-label")); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255, 'class'=>"form-control", "placeholder"=>"Name")); ?>
			<?php echo $form->error($model,'name'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>"btn btn-default")); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->