<?php
/* @var $this DocumentController */
/* @var $model Document */

$this->breadcrumbs=array(
	'Documents Manage'=>"admin",
	'Create'=>"",
);

$this->menu=array(
	array('label'=>'Manage Document', 'url'=>array('admin')),
);
?>

<h1>Create Document</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>