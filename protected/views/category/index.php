<?php
/* @var $this CategoryController */

$this->breadcrumbs=array(
	'Category',
);
?>



<h1><?=$this->pageTitle?></h1>

<div class="row">
	<div class="add-button col-md-3 text-center">
		<a href="#" class="text-success">
			<i class="fa fa-plus-square fa-5x"></i>
		</a>
	</div>
    <?php
        $categories = Category::model()->findAll();
    foreach ($categories as $category): ?>
        <div class="col-md-3">
            <a href="#<?=$category->id?>" class="thumbnail">
                <img style="width:200px; height:200px">
                <h4 class="text-center"><?=$category->name?></h4>
            </a>
        </div>
    <?php endforeach;?>
    <div class="col-md-3">
        <a href="#" class="thumbnail">
            <img style="width:200px; height:200px">
            <h4 class="text-center">da</h4>
        </a>
    </div>
    <div class="col-md-3">
        <a href="#" class="thumbnail">
            <img style="width:200px; height:200px">
            <h4 class="text-center">da</h4>
        </a>
    </div>
    <div class="col-md-3">
        <a href="#" class="thumbnail">
            <img style="width:200px; height:200px">
            <h4 class="text-center">da</h4>
        </a>
    </div>
</div>

<script>
$(document).ready(function(){
	var height = $('.add-button').parent().find('div.col-md-3:nth-child(2)').find('img').height();
	var h = $('.add-button').height();

	$('.add-button i').css({'margin-top':(height-h)/2});
});
	
</script>

