<?php

use yii\helpers\Url;

$lang = Yii::$app->language;

?>
<?php
$lang = Yii::$app->language;
switch ($lang) {
    case 'ru': $title = $model->title_ru;
        break;
    case 'en':$title = $model->title_en;
        break;
    case 'uz': $title = $model->title_uz;
        break;
}
?>
<?php
$lang = Yii::$app->language;
switch ($lang) {
    case 'ru': $content = $model->content_ru;
        break;
    case 'en':$content = $model->content_en;
        break;
    case 'uz': $content = $model->content_uz;
        break;
}
?>
<div class="details-banner" style="background: url(<?=Yii::$app->request->baseUrl.'/'?>img/222.jpg) center center !important;">
    <div class="container breadcrumb-area-2">
        <div class="row">
            <div class="col-lg-12 col-md-12 clearfix">
                <div class="text text-left">
                    <h1><?=$title?></h1>
                    <div class="location"><?=Yii::$app->params['cost'][$lang]?><?=$model->price?> <?=Yii::$app->params['sum'][$lang]?></div>
                    <div class="ratings-2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="cover-buttons">
                        <ul>
                            <li><a href="<?=Url::to(['site/contact'])?>"><?=Yii::$app->params['contactUs'][$lang]?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Details banner end -->

<!-- Car details page start -->
<div class="car-details-page content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-8">
                        <div id="carDetailsSlider" class="carousel car-details-sliders slide slide-2">
                            <!-- main slider carousel items -->
                            <div class="carousel-inner">
                                <div class="active item carousel-item" data-slide-number="0">
                                    <img src="<?=Yii::$app->request->baseUrl.'/'?>uploads/<?=$model->image?>" class="img-fluid" alt="slider-car">
                                </div>

                            </div>
                            <!-- main slider carousel nav controls -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget recent-posts">
                            <h3 class="sidebar-title"><?=Yii::$app->params['popCars'][$lang]?></h3>
                            <div class="s-border"></div>
                            <div class="m-border"></div>
                            <?php foreach ($cars as $item) : ?>
                                <?php
                                $lang = Yii::$app->language;
                                switch ($lang) {
                                    case 'ru': $title = $item->title_ru;
                                        break;
                                    case 'en':$title = $item->title_en;
                                        break;
                                    case 'uz': $title = $item->title_uz;
                                        break;
                                }
                                ?>

                            <div class="media mb-4">
                                <a class="pr-3" href="car-details.html">
                                    <img class="media-object" src="<?=Yii::$app->request->baseUrl.'/'?>uploads/<?=$item->image?>" alt="small-car">
                                </a>
                                <div class="media-body align-self-center">
                                    <h5>
                                        <a href="car-details.html"><?=$title?></a>
                                    </h5>
                                    <div class="listing-post-meta">
                                        $345,00
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Car details page end -->
