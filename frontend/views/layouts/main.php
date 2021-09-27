<?php

/* @var $this \yii\web\View */
/* @var $content string */

use cinghie\multilanguage\widgets\MultiLanguageWidget;
use common\models\Pages;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
$lang = Yii::$app->language;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="page_loader"></div>

<!-- Top header start -->
<header class="top-header bg-active" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-7">
                <div class="list-inline">
                    <a href="tel:+998915385550"><i class="fa fa-phone"></i>+998(91)538-55-50</a>
                    <a href="tel:info@samautolizing.com"><i class="fa fa-envelope"></i>info@samautolizing.uz</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-5">
                <ul class="top-social-media pull-right" style="margin-top:-15px">
                    <?php if(Yii::$app->user->isGuest) : ?>
                    <li>
                        <a href="<?=Url::to(['site/login'])?>" class="sign-in"><i class="fa fa-sign-in"></i> <?=Yii::$app->params['login'][$lang]?></a>
                    </li>
                    <li>
                        <a href="<?=Url::to(['site/signup'])?>" class="sign-in"><i class="fa fa-user"></i> <?=Yii::$app->params['register'][$lang]?></a>
                    </li>
                    <?php else : ?>
                        <li>
                            <a href="<?=Url::to(['site/cabinet'])?>" class="sign-in"><i class="fa fa-user"></i> <?php $user = \common\models\User::find()->where(['id' => Yii::$app->user->id])->one(); echo $user->username?></a>
                        </li>
                    <?php endif;?>
                    <li>
                        <?= MultiLanguageWidget::widget([
                            'addCurrentLang' => true, // add current lang
                            'calling_controller' => $this->context,
                            'image_type'  => 'rounded', // classic or rounded
                            'link_home'   => true, // true or false
                            'widget_type' => 'classic', // classic or selector
                            'width'       => '20'
                        ]); ?>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- Main header start -->
<div class="main-header sticky-header sh-2">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand company-logo-2" href="<?=Yii::$app->homeUrl?>">
                <img src="<?=Yii::$app->request->baseUrl.'/'?>img/logos/black-logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse w-100" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link" href="<?=Yii::$app->homeUrl?>">
                            <?=Yii::$app->params['home'][$lang]?>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?=Url::to(['site/about'])?>">
                            <?=Yii::$app->params['about'][$lang]?>
                        </a>
                    </li>
                    <?php $pages = Pages::find()->where(['!=', 'id', 1])->andWhere(['is_sub' => 0])->andWhere(['lang' => Yii::$app->language])->orderBy(['position' => SORT_ASC])->all();
                    foreach ($pages as $page){ ?>
                        <li class="nav-item dropdown">
                            <a href="<?php echo Url::to(['pages/view', 'alias' => $page->alias]); ?>" class="nav-link">
                                <span data-hover="<?php echo $page->title; ?>" class="mm-text"><?php echo $page->title; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                $pagesItems = Pages::find()->where(['!=', 'id', 1])->andWhere(['is_sub' => 1])->andWhere(['lang' => Yii::$app->language])->andWhere(['page_id' => $page->id])->orderBy(['position' => SORT_ASC])->all();
                                foreach ($pagesItems as $pageItems){
                                    $pagesCount = Pages::find()->where(['page_id' => $pageItems->id])->andWhere(['is_sub' => 1])->andWhere(['lang' => Yii::$app->language])->andWhere(['page_id' => $pageItems])->count();?>
                                    <li>
                                        <a href="<?php echo Url::to(['pages/view', 'alias' => $pageItems->alias]);  ?>" class="dropdown-item">
                                            <span data-hover="<?php echo $pageItems->title; ?>" class="mm-text"><?php echo $pageItems->title; ?></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <?php $pageItems = Pages::find()->where(['page_id' => $pageItems->id])->andWhere(['is_sub' => 1])->andWhere(['lang' => Yii::$app->language])->andWhere(['page_id' => $pageItems])->orderBy(['position' => SORT_ASC])->all();
                                            foreach ($pageItems as $pageItem){?>
                                                <li>
                                                    <a href="<?php echo Url::to(['pages/view', 'alias' => $pageItem->alias]); ?>" class="dropdown-item">
                                                        <span data-hover="<?php echo $pageItem->title; ?>"><?php echo $pageItem->title; ?></span>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>

                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=Url::to(['cars/index'])?>">
                            <?=Yii::$app->params['car'][$lang]?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=Url::to(['service/index'])?>">
                            <?=Yii::$app->params['services'][$lang]?>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="<?=Url::to(['news/index'])?>">
                            <?=Yii::$app->params['news'][$lang]?>
                        </a>
                    </li>
                    <li class="nav-item  dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?=Yii::$app->params['gallery'][$lang]?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?=Url::to(['gallery/index','id' => 0])?>">Фотографии</a></li>
                            <li><a class="dropdown-item" href="<?=Url::to(['gallery/index','id' => 1])?>">Видео</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?=Url::to(['site/contact'])?>"><?=Yii::$app->params['contact'][$lang]?></a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- Main header end -->



        <?= Alert::widget() ?>
        <?= $content ?>

<footer class="footer overview-bgi">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <img src="<?=Yii::$app->request->baseUrl.'/'?>img/logos/logo.png" alt="logo" class="f-logo">
                    <div class="s-border"></div>
                    <div class="m-border"></div>
                    <div class="text">
                        <P><?=Yii::$app->params['infoFooter'][$lang]?></P>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>
                        <?=Yii::$app->params['contact'][$lang]?>
                    </h4>
                    <div class="s-border"></div>
                    <div class="m-border"></div>
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-pin"></i><?=Yii::$app->params['addresss'][$lang]?>
                        </li>
                        <li>
                            <i class="flaticon-mail"></i><a href="mailto:info@samautolizing.com">info@samautolizing.uz</a>
                        </li>
                        <li>
                            <i class="flaticon-phone"></i><a href="tel:+998915385550">+998(91)538-55-50</a>
                        </li>
                        <li>
                            <i class="flaticon-fax"></i>+998(90)281-55-50
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        <?=Yii::$app->params['links'][$lang]?>
                    </h4>
                    <div class="s-border"></div>
                    <div class="m-border"></div>
                    <ul class="links">
                        <li>
                            <a href="<?=Yii::$app->homeUrl?>"><i class="fa fa-angle-right"></i><?=Yii::$app->params['home'][$lang]?></a>
                        </li>
                        <li>
                            <a href="<?=Url::to(['site/about'])?>"><i class="fa fa-angle-right"></i><?=Yii::$app->params['about'][$lang]?></a>
                        </li>
                        <li>
                            <a href="<?=Url::to(['cars/index'])?>"><i class="fa fa-angle-right"></i><?=Yii::$app->params['car'][$lang]?></a>
                        </li>
                        <li>
                            <a href="<?=Url::to(['service/index'])?>"><i class="fa fa-angle-right"></i><?=Yii::$app->params['services'][$lang]?></a>
                        </li>
                        <li>
                            <a href="<?=Url::to(['news/index'])?>"><i class="fa fa-angle-right"></i><?=Yii::$app->params['news'][$lang]?></a>
                        </li>
                        <li>
                            <a href="<?=Url::to(['site/contact'])?>""><i class="fa fa-angle-right"></i><?=Yii::$app->params['contact'][$lang]?></a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4><?=Yii::$app->params['map'][$lang]?></h4>
                    <div class="s-border"></div>
                    <div class="m-border"></div>
                    <div class="Subscribe-box">
                        <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d49129.93557466644!2d66.91612842910156!3d39.680739900000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1591581426322!5m2!1sru!2s" width="100%" height="230" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p class="copy">© 2020 <a href="#"><?=Yii::$app->params['company'][$lang]?>.</a> Powered by <a href="https:\\diamondsolutions.uz">Diamond Solutions</a></p>
                </div>
                <div class="col-lg-6">
                    <div class="social-list-2">
                        <ul>
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
