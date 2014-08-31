<?php
/**
 * Created by JetBrains PhpStorm.
 * User: paul
 * Date: 31.08.14
 * Time: 17:34
 * To change this template use File | Settings | File Templates.
 */

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
<?php endforeach;?>