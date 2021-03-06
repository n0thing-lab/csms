<h1><?=$this->pageTitle?></h1>

<div class="row" style="width:100%; min-height: 270px;">
	<div class="add-button col-md-3 text-center">
		<a href="/categoryAdmin/create" class="text-success">
			<i class="fa fa-plus-square fa-5x"></i>
		</a>
	</div>
    <?php
        $categories = Category::model()->findAllByAttributes(array('parent'=>null));
    foreach ($categories as $category): ?>
        <div class="col-md-3">
            <a href="/category/view/id/<?=$category->id?>" class="thumbnail">

                <?php
                if($category->cover->hasImage())
                echo CHtml::image($category->cover->getUrl('medium'),'Medium image version');
                else
                    echo '<img style="width:200px; height:200px">';?>
                <h4 class="text-center"><?=$category->name?></h4>
            </a>
        </div>
    <?php endforeach;?>

</div>

<script>
$(document).ready(function(){
	var height = 269;
        //$('.add-button').parent().find('div.col-md-3:nth-child(2)').find('img').height();
	var h = $('.add-button').height();

	$('.add-button i').css({'margin-top':(height-h)/2});
});
	
</script>

