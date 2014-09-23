<?php
/* @var $this CategoryAdminController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Categories'=>"index",
	'Create'=>"",
);

$this->menu=array(
	array('label'=>'List Category', 'url'=>array('index')),
	array('label'=>'Manage Category', 'url'=>array('admin')),
);
?>

<h1>Create Category</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>