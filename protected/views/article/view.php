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

<!-- <div class="advert"> -->
    <img src="http://info-c.ru/userfiles/image/foto/111/baners/reklama.jpg">
<!-- </div> -->

<h1><?php echo $item->title; ?></h1><br>
<div class="row">
    <?php if ($item->articleCategory): ?>
        <div class="col-sm-9">
            <ol class="breadcrumb">
                <li><a href="<?php echo Yii::app()->createUrl('/article/index'); ?>">Все статьи</a></li>
                <?php if ($last_cat->id): ?> 
                    <?php foreach (Category::arrNames($last_cat->id) as $id => $name): ?>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('/article/index'); ?>?cat=<?php echo $id; ?>"><?php echo $name; ?></a>
                        </li>
                    <?php endforeach ?>
                <?php endif ?>
            </ol>
    <?php else: ?>
        <div class="col-sm-12">
    <?php endif ?>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="half-article">
                    <p class="text-muted right-to-left">Дата: <?php echo date('d.m.Y', $item->date); ?></p>
                    <p><?php echo $item->content; ?></p>
                </div>

                <div class="half-article">    
                    <p>
                    <?php if ($item->articleCategory): ?>
                        <span class="text-muted">Категории: </span>
                        <?php foreach ($item->articleCategory as $value): ?>
                            <a class="text-muted" href="<?php echo Yii::app()->createUrl('/article/index'); ?>?cat=<?php echo $value['id'] ?>"><?php echo $value->name; ?>;</a>
                        <?php endforeach ?>
                    <?php endif ?>
                    </p>
                </div>
            </div>
        </div>

    </div>

    <?php if ($item->articleCategory): ?>
        <div class="col-sm-3">
        
            <div class="list-group">
                <a href="<?php echo Yii::app()->createUrl('/article/index'); ?>" class="list-group-item <?php echo($_GET['cat'])?'':'active' ?>">Все категории:</a>
                <?php foreach (Category::tree() as $value): ?>
         
                    <a href="<?php echo Yii::app()->createUrl('/article/index'); ?>?cat=<?php echo $value['id'] ?>" class="list-group-item <?php echo($value['id'] == $_GET['cat'])?'active':'' ?>">
                        <?php echo Category::repeatLevelSymbol($value['level']); ?>
                        <?php echo $value['name']; ?>
                    </a>

                <?php endforeach; ?>
            </div>

        </div>
    <?php endif ?>    

</div>


<?php if ($related_articles): ?>  
    <h3>Похожие статьи:</h3>
    <?php foreach ($related_articles as $id => $title): ?>
        <p><a href="<?php echo Yii::app()->createUrl('/article/view/'.$id); ?>"><?php echo $title; ?></a></p>
    <?php endforeach ?>
<?php else: ?>
    <h3>Недавние статьи:</h3>
    <?php foreach ($all_articles as $value): ?>
        <p><a href="<?php echo Yii::app()->createUrl('/article/view/'.$value->id); ?>"><?php echo $value->title; ?></a></p>
    <?php endforeach ?>
<?php endif ?>
