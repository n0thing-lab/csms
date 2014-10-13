<?php
/* @var $this DocumentController */
/* @var $model Document */

$this->breadcrumbs=array(
	'Documents Manage'=>$this->createUrl("documentAdmin/admin"),
	$model->name=>"",
);

$this->menu=array(
	array('label'=>'Create Document', 'url'=>array('create')),
	array('label'=>'View Document', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Document', 'url'=>array('admin')),
);
?>

<h1>Update Document <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>