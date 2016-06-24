<?php foreach ($articles as $item): ?>
	<div class="panel panel-default">
	    <div class="panel-body">
	    	<div class="row">
		    	<div class="col-sm-6 category-item-admin">
		    		<?php echo $item->title; ?>
		    	</div>
		    	<div class="col-sm-6 right-to-left">
	                <a class="btn btn-xs btn-warning" href="<?php echo Yii::app()->createUrl('/article/edit/'.$item->id); ?>">Редактировать</a>
	                <a class="btn btn-xs btn-danger" href="<?php echo Yii::app()->createUrl('/article/delete/'.$item->id); ?>"onclick="return confirm('Дочерние категории будут перемещены в корень каталога')">Удалить</a>
		    	</div>
	    	</div>
		</div>
	</div>
<?php endforeach; ?>	
<?php if (!$articles): ?>
	<h3 class="text-muted">Пока нет статей</h3>
<?php endif; ?>

