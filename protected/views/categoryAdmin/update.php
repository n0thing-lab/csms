<?php
/* @var $this CategoryAdminController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Categories'=>"index",
	'Manage'=>$this->createUrl("categoryAdmin/admin"),
	$model->name=>$this->createUrl("categoryAdmin/".$model->id),
);

$this->menu=array(
	array('label'=>'List Category', 'url'=>array('index')),
	array('label'=>'Create Category', 'url'=>array('create')),
	array('label'=>'View Category', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Category', 'url'=>array('admin')),
);
?>

<h1>Update Category <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>