<?php 
    $str = '';
    foreach ($item->articleCategory as $value) {
        $str .= $value->name.', ';
    }
    $keywords = $str.Setting::getData('seo_keywords');

    $this->pageTitle = $item->title.' | '.Setting::getData('sitename');
    Yii::app()->clientScript->registerMetaTag(strip_tags($item->preview) , description);
    Yii::app()->clientScript->registerMetaTag($keywords , keywords);
?>


<br>
<div class="row">
    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="fl">
                    <h1><?php echo $item->title; ?></h1><br>
                    <p><?php echo $item->content; ?></p>
                </div>

                <div class="fl">    
                    <p class="text-muted">Дата: <?php echo date('d.m.Y', $item->date); ?></p>
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