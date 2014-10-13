<?php
/* @var $this UserAdminController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users Manage'=>"admin",
	'Create'=>"",
);

$this->menu=array(
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Create User</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>