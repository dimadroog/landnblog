<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<!-- startbootstrap-scrolling-nav -->
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
	            <a class="navbar-brand"  href="<?php echo Yii::app()->createUrl('/site/index'); ?>"><?php echo Setting::getData('sitename'); ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
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

<div id="template_content" class="block-content">
    <?php echo $content; ?>
</div>

<div id="" class="block-content <?php echo Block::getByAlias('footer')->animate ?>" style="<?php echo Block::buildStyle(Block::getByAlias('footer')->id, 1); ?>">
        <?php $this->widget('application.extensions.blockwidget.BlockWidget', array('item' => Block::getByAlias('footer'))); ?>
</div>


<?php $this->endContent(); ?>
