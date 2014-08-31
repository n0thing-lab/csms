<?php
/* @var $this CategoryController */

$this->breadcrumbs=array(
    'Category'=> 'asd',
);
?>

<h1>Category - <?=$model->name?></h1>

<?php
foreach ($categories as $category): ?>
    <div class="col-md-3">
        <a href="/category/view/id/<?=$category->id?>" class="thumbnail">
            <img style="width:200px; height:200px">
            <h4 class="text-center"><?=$category->name?></h4>
        </a>
    </div>
<?php endforeach;
foreach ($documents as $document): ?>
<div class="col-md-3">
	<a href="/document/view/id/<?=$document->id?>" class="thumbnail">
		<img style="width:200px; height:200px">
		<h4 class="text-center"><?=$document->name?> - это документ</h4>
	</a>
</div>
<?php endforeach;?>