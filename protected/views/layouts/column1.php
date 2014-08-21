
<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div id="content">
    <ol class="breadcrumb">
    <?php
        if (isset($this->breadcrumbs))
        {
            foreach ($this->breadcrumbs as $value)
    ?>
            <li><a href="#"><?=$value?></a></li>
    <?php
        }
    ?>
    </ol>
	<?php echo $content; ?>
</div><!-- content -->
<?php $this->endContent(); ?>