<?php
/* @var $this DocumentController */
/* @var $model Document */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'documentAdmin-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->dropDownList($model, 'category_id', CHtml::listData(Category::model()->findAll(), 'id', 'name'), array(
			'prompt' =>'Выберите категорию',
			'ajax' => array(
				'type'=>'POST', //request type
				'url'=>CController::createUrl('documentAdmin/dynamicCategories'),
				'data'=>array('id'=>'js:this.value'),
				'update'=>'.secondDropdown',
			),
	));
		?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php
			$data = array();
			if(isset($model->category_id) && !empty($model->category_id)){
				$lol = Category::model()->findByPk($model->category_id);
				$param = $lol->id;
				if(isset($lol->parent) && !empty($lol->parent)){
					$param = $lol->parent;
					$model->category_id1 = $lol->id;
				}
				$data = CHtml::listData(Category::model()->findAllByAttributes(array('parent'=>$param)), 'id', 'name');
			}
			var_dump($model->category_id1);
			echo $form->labelEx($model,'parent');
			echo $form->dropDownList($model, 'category_id1', $data, array('class'=>'secondDropdown', 'prompt' =>'Выберите подкатегорию'));

		?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->