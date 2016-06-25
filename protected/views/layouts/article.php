<?php /* @var $this Controller */ ?>
<title>Статьи сайта <?php echo Setting::getData('sitename'); ?></title>
<?php $this->beginContent('//layouts/main'); ?>
<!-- startbootstrap-scrolling-nav -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/static/startbootstrap-scrolling-nav/css/scrolling-nav.css" rel="stylesheet">
<nav class="navbar <?php echo Setting::getData('navbar_position'); ?> <?php echo Setting::getData('navbar_theme'); ?>"  role="navigation">
    <div class="container">

        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><?php echo Setting::getData('sitename'); ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo Yii::app()->createUrl('/site/index'); ?>">Главная</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <?php if (Setting::getData('articles') == 1): ?>
                        <li><a href="<?php echo Yii::app()->createUrl('/article/index'); ?>">Все статьи</a></li>
                <?php endif ?>
                    <?php if (Yii::app()->user->name == 'admin' || Yii::app()->user->name == 'superadmin'): ?>
                        <li><a href="<?php echo Yii::app()->createUrl('/site/admin/'); ?>">Админка</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('/site/logout'); ?>">Выйти</a></li>
                    <?php endif; ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div>
</nav>

<div class="container">

    <div id="block_preview" class="block-content">
        <div class="container">
            <h1>Блог сайта <?php echo Setting::getData('sitename'); ?></h1>
            <br>
            <div class="row">
                <div class="col-sm-9">
                    <?php echo $content; ?>
                </div>
                <div class="col-sm-3">
                    <div class="list-group">
                        <a href="<?php echo Yii::app()->createUrl('/article/index'); ?>" class="list-group-item <?php echo($_GET['cat'])?'':'active' ?>">Все категории:</a>
                        <?php foreach (Category::tree() as $value): ?>
                 
                            <a href="?cat=<?php echo $value['id'] ?>" class="list-group-item <?php echo($value['id'] == $_GET['cat'])?'active':'' ?>">
                                <?php echo Category::repeatLevelSymbol($value['level']) ?>
                                <?php echo $value['name']; ?>
                            </a>

                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div id="block_preview" class="block-content <?php echo Block::getByAlias('footer')->animate ?>" style="<?php echo Block::buildStyle(Block::getByAlias('footer')->id, 1); ?>">
    <div class="container">
            <?php $this->widget('application.extensions.blockwidget.BlockWidget', array('item' => Block::getByAlias('footer'))); ?>
    </div>
</div>

<!-- Scrolling Nav JavaScript -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/startbootstrap-scrolling-nav/js/jquery.easing.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/startbootstrap-scrolling-nav/js/scrolling-nav.js"></script>

<?php $this->endContent(); ?>
