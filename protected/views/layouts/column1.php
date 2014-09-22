
<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div id="content">
    <?php if (isset($this->breadcrumbs)): ?>
    <ol class="breadcrumb">
    <li><a href="/">
        <i class="fa fa-home"></i>
    </a></li>
    <?php foreach ($this->breadcrumbs as $value): ?>
            <li><a href="#"><?=$value?></a></li>
        <?php endforeach; ?>
    </ol>
    <?php endif; ?>

	<?php echo $content; ?>
</div><!-- content -->
<?php $this->endContent(); ?>