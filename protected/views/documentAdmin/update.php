<?php
/* @var $this DocumentController */
/* @var $model Document */

$this->breadcrumbs=array(
	'Documents'=>"index",
	'Manage'=>$this->createUrl("documentAdmin/admin"),
	$model->name=>$this->createUrl("documentAdmin/".$model->id),
);

$this->menu=array(
	array('label'=>'List Document', 'url'=>array('index')),
	array('label'=>'Create Document', 'url'=>array('create')),
	array('label'=>'View Document', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Document', 'url'=>array('admin')),
);
?>

<h1>Update Document <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>