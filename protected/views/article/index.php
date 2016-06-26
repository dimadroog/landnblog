<?php 
    if ($_GET['cat']) {
        $title = 'Статьи сайта '.Setting::getData('sitename').'. Категория - '.Category::name($_GET['cat']);
        $description = 'Материалы категории - '.Category::name($_GET['cat']).'. '.Setting::getData('seo_description');
        $keywords = Category::name($_GET['cat']).', '.Setting::getData('seo_keywords');
    } else {
        $title = 'Статьи сайта '.Setting::getData('sitename').'. Все материалы сайта ';
        $description = 'Все материалы сайта '.Setting::getData('sitename').'. '.Setting::getData('seo_description');
        $keywords = Setting::getData('seo_keywords');
    }
    $this->pageTitle = $title;
    Yii::app()->clientScript->registerMetaTag($description , description);
    Yii::app()->clientScript->registerMetaTag($keywords , keywords);
?>

<h1>Блог сайта <?php echo Setting::getData('sitename'); ?></h1>
<br>
<div class="row">
    <div class="col-sm-9">

		<ol class="breadcrumb">
		    <li><a href="<?php echo Yii::app()->createUrl('/article/index'); ?>">Все статьи</a></li>
			<?php if ($current_cat->id): ?>	
				<?php foreach (Category::arrNames($current_cat->id) as $id => $name): ?>
					<li>
						<a href="?cat=<?php echo $id; ?>"><?php echo $name; ?></a>
					</li>
				<?php endforeach ?>
			<?php endif ?>
		</ol>

		<?php foreach ($articles as $item): ?>
			<div class="panel panel-default">
			    <div class="panel-body">
			    	
			    	<div class="fl">
			    		<h3><a href="<?php echo Yii::app()->createUrl('/article/view/'.$item->id); ?>"><?php echo $item->title; ?></a></h3>
			    		<p class="text-muted">Дата: <?php echo date('d.m.Y', $item->date); ?></p>
			    		<p><?php echo $item->preview; ?></p>
			            <p class="text-right"><a href="<?php echo Yii::app()->createUrl('/article/view/'.$item->id); ?>">Читать далее</a></p>
			    	</div>

		            <div class="fl">	
			            <p>
			            <?php if ($item->articleCategory): ?>
			            	<span class="text-muted">Категории: </span>
			            	<?php foreach ($item->articleCategory as $value): ?>
			            		<a class="text-muted" href="?cat=<?php echo $value['id'] ?>"><?php echo $value->name; ?>;</a>
			            	<?php endforeach ?>
			            <?php endif ?>
			            </p>
		            </div>
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

    </div>
    <div class="col-sm-3">

        <div class="list-group">
            <a href="<?php echo Yii::app()->createUrl('/article/index'); ?>" class="list-group-item <?php echo($_GET['cat'])?'':'active' ?>">Все категории:</a>
            <?php foreach (Category::tree() as $value): ?>
     
                <a href="<?php echo Yii::app()->createUrl('/article/index'); ?>?cat=<?php echo $value['id'] ?>" class="list-group-item <?php echo($value['id'] == $_GET['cat'])?'active':'' ?>">
                    <?php echo Category::repeatLevelSymbol($value['level']) ?>
                    <?php echo $value['name']; ?>
                </a>

            <?php endforeach; ?>
        </div>

    </div>
</div>