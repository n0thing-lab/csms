<?php
/* @var $this CategoryController */

$this->breadcrumbs=array(
    'Category'=> 'asd',
);
?>


<?php if ($model->parent == 0): ?>

    <div class="row">
    <h1>Category - <?=$model->name?></h1>
    <?php
    foreach ($categories as $category): ?>
        <div class="col-md-3">
            <a href="/category/view/id/<?=$category->id?>" class="thumbnail">
                <img style="width:200px; height:200px">
                <h4 class="text-center"><?=$category->name?></h4>
            </a>
        </div>
    <?php endforeach; ?>
    </div>
<?php endif; ?>

<div class="row">
<h1> Документы по категории - <?=$model->name?></h1>
<?php
	$docs = new Document;
	$docs->category_id = $model->id;

	$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $docs->search(),
    'filter' => $docs,
	'itemsCssClass'=>'table table-bordered',
	'columns'=>array(
		'id',
		'name',
		'year',
	),
)); ?>
</div>