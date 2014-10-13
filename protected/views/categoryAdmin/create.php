<?php
/* @var $this CategoryAdminController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Categories Manage'=>"admin",
	'Create'=>"",
);

$this->menu=array(
	array('label'=>'Manage Category', 'url'=>array('admin')),
);
?>

<h1>Create Category</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>