<p class="text-muted"><?php echo Category::fullName($current_cat->id); ?></p>
<?php foreach ($articles as $item): ?>
	<div class="panel panel-default item">
	    <div class="panel-body">
    		<h3><?php echo $item->title; ?></h3>
    		<p><span class="text-muted">Дата: </span><?php echo date('d.m.Y', $item->date); ?></p>
    		<p><?php echo $item->preview; ?></p>
            <p>
            <?php if ($item->articleCategory): ?>
            	<span class="text-muted">Категории: </span>
            	<?php foreach ($item->articleCategory as $value): ?>
            		<a class="text-muted" href="?cat=<?php echo $value['id'] ?>"><?php echo $value->name; ?>;</a>&nbsp&nbsp
            	<?php endforeach ?>
            <?php endif ?>
            </p>
            <p><a href="<?php echo Yii::app()->createUrl('/article/view/'.$item->id); ?>">Перейти к статье</a></p>

		</div>
	</div>
<?php endforeach; ?>	
<?php if (!$articles): ?>
	<h3 class="text-muted">Пока нет статей</h3>
<?php endif; ?>


        <div class="text-center">
            <?php $this->widget('CLinkPager', array(
                'pages' => $pages,
                'header' => '',
                'firstPageLabel' => '<<',
                'lastPageLabel' => '>>',
                'nextPageLabel' => '>',
                'prevPageLabel' => '<',
                'selectedPageCssClass' => 'active',
                'maxButtonCount' => '3',
                'htmlOptions' => array('class' => 'pagination'),
            )); ?>
        </div>
