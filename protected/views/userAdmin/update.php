<?php
/* @var $this UserAdminController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users Manage'=>$this->createUrl("documentAdmin/admin"),
	$model->name=>"",
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Update User <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>