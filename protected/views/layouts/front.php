<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<style type="text/css">
    @media (min-width:768px) {    
        body, h1, h2, h3, h4, h5, h6{
            line-height: 1.7;
        }

        h1, h2, h3 {
            margin-top: 25px;
            margin-bottom: 15px;
        }
        body{
            font-size: 18px;
        }
        h1{
            font-size: 50px;
        }
        h2{
            font-size: 40px;
        }
        h3{
            font-size: 30px;
        }
        h4{
            font-size: 18px;
        }
        h5{
            font-size: 16px;
        }

        h6{
            font-size: 14px;
        }
    }
</style>
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
                    <?php foreach (Block::getAll() as $block): ?>
                        <?php if ($block->publish_menu == 1): ?>
                            <li><a class="page-scroll" href="#<?php echo $block->alias.$block->id ?>"><?php echo $block->name ?></a></li>
                        <?php endif ?>
                    <?php endforeach;?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <?php if (Setting::getData('articles') == 1): ?>
        				<li><a href="<?php echo Yii::app()->createUrl('/article/index'); ?>">Статьи</a></li>
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

<?php echo $content; ?>
    <!-- Scrolling Nav JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/static/startbootstrap-scrolling-nav/js/jquery.easing.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/static/startbootstrap-scrolling-nav/js/scrolling-nav.js"></script>

<?php $this->endContent(); ?>
