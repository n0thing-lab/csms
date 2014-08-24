<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<?php if (isset($this->breadcrumbs)): ?>
    <ol class="breadcrumb">
        <?php foreach ($this->breadcrumbs as $value): ?>
            <li><a href="#"><?=$value?></a></li>
        <?php endforeach; ?>
    </ol>
<?php endif; ?>

<div class="span-19">
	<div id="content">
		<ol class="breadcrumb">
  			<li><a href="#">Home</a></li>
		</ol>
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>