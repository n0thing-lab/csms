
	<?php /* @var $this Controller */ ?>
	<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
	<div class="col-md-3">
		<ul class="nav nav-pills nav-stacked">
			<li class="<?=Yii::app()->controller->id=='categoryAdmin'? 'active' : ''?>"><a href="/categoryAdmin/index">Категории</a></li>
			<li class="<?=Yii::app()->controller->id=='documentAdmin'? 'active' : ''?>"><a href="/documentAdmin/index">Документы</a>
            <li class="<?=Yii::app()->controller->id=='userAdmin'? 'active' : ''?>"><a href="/userAdmin/index">Пользователи</a>
		</ul>
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
	<div class="col-md-9">
		<div id="content">
			<?php if (isset($this->breadcrumbs)): ?>
				<ol class="breadcrumb">
					<li><a href="/">
							<i class="fa fa-home"></i>
						</a></li>
					<?php foreach ($this->breadcrumbs as $value): ?>
						<li><a href="#"><?php $value?></a></li>
					<?php endforeach; ?>
				</ol>
			<?php endif; ?>

			<?php echo $content; ?>
		</div><!-- content -->
	</div>
</div>
	<?php $this->endContent(); ?>
