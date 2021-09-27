<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
$lang = Yii::$app->language;

$lang = Yii::$app->language;
$this->title = Yii::$app->params['home'][$lang];
?>
<div class="banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner banner-slider-inner text-center">
            <div class="carousel-item banner-max-height active item-bg">
                <img class="d-block w-100 h-100" src="<?=Yii::$app->request->baseUrl.'/'?>img/1.jpg" alt="banner">
                <div class="carousel-content container banner-info-2 bi-2">
                    <h2><?=Yii::$app->params['company'][$lang]?></h2>
                    <p><?=Yii::$app->params['banner1'][$lang]?></p>
                    <a href="<?=Url::to(['site/about'])?>" class="btn btn-lg btn-round btn-theme"><?=Yii::$app->params['more'][$lang]?></a>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="<?=Yii::$app->request->baseUrl.'/'?>img/2.jpg" alt="banner">
                <div class="carousel-content container banner-info-2 bi-2 text-l">
                    <h2><?=Yii::$app->params['apply'][$lang]?></h2>
                    <p><?=Yii::$app->params['aboutApply'][$lang]?></p>
                    <a href="<?=Url::to(['cars/index'])?>" class="btn btn-lg btn-round btn-theme"><?=Yii::$app->params['more'][$lang]?></a>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="<?=Yii::$app->request->baseUrl.'/'?>img/3.jpg" alt="banner">
                <div class="carousel-content container banner-info-2 bi-2 text-r">
                    <h2><?=Yii::$app->params['ser'][$lang]?></h2>
                    <p><?=Yii::$app->params['aboutSer'][$lang]?></p>
                    <a href="<?=Url::to(['service/index'])?>" class="btn btn-lg btn-round btn-theme"><?=Yii::$app->params['more'][$lang]?></a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev none-580" href="#bannerCarousole" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
        </a>
        <a class="carousel-control-next none-580" href="#bannerCarousole" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
        </a>
    </div>
</div>
<!-- Banner end -->

<!-- Search box 2 start -->
<div class="search-box-2">
    <div class="container">
        <div class="row">

        </div>
    </div>
</div>
<!-- Search box 2 end -->

<!-- Featured car start -->
<div class="featured-car content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><?=Yii::$app->params['cars'][$lang]?></h1>
            <p><?=Yii::$app->params['aboutCars'][$lang]?></p>
        </div>
        <div class="row">

        <?php foreach($cars as $item) : ?>
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
<?php
$lang = Yii::$app->language;
switch ($lang) {
    case 'ru': $content = $item->content_ru;
        break;
    case 'en':$content = $item->content_en;
        break;
    case 'uz': $content = $item->content_uz;
        break;
}
?>

            <div class="col-lg-4 col-md-6">
                <div class="car-box-3">
                    <div class="car-thumbnail" style="background:url(<?=Yii::$app->request->baseUrl.'/'?>uploads/<?=$item->image?>) center center ;height:300px; background-size:cover; "; >
                        <a href="<?=Url::to(['cars/view','alias' => $item->title_en])?>" class="car-img">
                            <div class="for"><?=Yii::$app->params['have'][$lang]?></div>
                            <div class="price-box">
                                <span class="del"><del>$950.00</del></span>
                                <br>
                                <span>ы</span>
                            </div>
                        </a>
                        <div class="carbox-overlap-wrapper">
                            <div class="overlap-box">
                                <div class="overlap-btns-area">
                                    <a class="overlap-btn" href="<?=Url::to(['cars/view','alias' => $item->title_en])?>">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <div class="car-magnify-gallery">
                                        <a href="<?=Yii::$app->request->baseUrl.'/'?>uploads/<?=$item->image?>" class="overlap-btn" >
                                            <i class="fa fa-expand"></i>
                                            <img class="hidden" src="<?=Yii::$app->request->baseUrl.'/'?>uploads/<?=$item->image?>" alt="<?=$title?>">
                                        </a>

                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="<?=Url::to(['cars/view','alias' => $item->title_en])?>"><?=$title?></a>
                        </h1>


                    </div>

                </div>
            </div>
                <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- Featured car end -->

<!-- Service section start -->
<div class="service-section content-area-2">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1><?=Yii::$app->params['best'][$lang]?></h1>
            <p><?=Yii::$app->params['aboutBest'][$lang]?></p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-shield"></i>
                    </div>
                    <div class="detail">
                        <h5><?=Yii::$app->params['safe'][$lang]?></h5>
                        <p><?=Yii::$app->params['aboutSafe'][$lang]?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-deal"></i>
                    </div>
                    <div class="detail">
                        <h5><?=Yii::$app->params['trust'][$lang]?></h5>
                        <p><?=Yii::$app->params['aboutTrust'][$lang]?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-money"></i>
                    </div>
                    <div class="detail">
                        <h5><?=Yii::$app->params['price'][$lang]?></h5>
                        <p><?=Yii::$app->params['aboutPrice'][$lang]?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-support-2"></i>
                    </div>
                    <div class="detail">
                        <h5><?=Yii::$app->params['support'][$lang]?></h5>
                        <p><?=Yii::$app->params['aboutSupport'][$lang]?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Service section end -->

<!-- Latest offers Start -->
<div class="latest-offers categories content-area-7">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1><?=Yii::$app->params['gallery'][$lang]?></h1>
            <p><?=Yii::$app->params['aboutGallery'][$lang]?></p>
        </div>
        <div class="row row-2">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                <?php foreach($photo as $item) : ?>
                    <div class="col-md-6 col-lg-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-2-bg" style="background:url(<?=Yii::$app->request->baseUrl.'/'?>uploads/<?=$item->image?>) center center ;height:255px; background-size:cover;">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <div class="lo-text clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
            <?php foreach($video as $item) : ?>
            <div class="col-lg-5 col-md-12 col-pad">
                <div class="category">
                       <iframe width="100%" height="530" src="<?=$item->link?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<!-- Latest offers end -->


<!-- Testimonial 3 start -->
<div class="testimonial-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title">
                    <h1><?=Yii::$app->params['review'][$lang]?></h1>
                </div>
                <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="1" class=""></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="testimonial-info">
                                <div class="sz" style="height:200px">
                                    <p><?=Yii::$app->params['review3'][$lang]?></p>
                                </div>
                                <div class="media mb-4">

                                    <div class="media-body align-self-center" style="text-align:center;">
                                        <h5>
                                            <a href="#"><?=Yii::$app->params['name1'][$lang]?></a>
                                        </h5>
                                        <h6><?=Yii::$app->params['client'][$lang]?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial-info">
                                <div class="sz" style="height:200px">
                                    <p><?=Yii::$app->params['review1'][$lang]?></p>
                                </div>
                                <div class="media mb-4">

                                    <div class="media-body align-self-center" style="text-align:center;">
                                        <h5>
                                            <a href="#"><?=Yii::$app->params['name2'][$lang]?></a>
                                        </h5>
                                        <h6><?=Yii::$app->params['client'][$lang]?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial-info">
                                <div class="sz" style="height:200px">
                                    <p><?=Yii::$app->params['review2'][$lang]?></p>
                                </div>
                                <div class="media mb-4">

                                    <div class="media-body align-self-center" style="text-align:center; width:90px">
                                        <h5>
                                            <a href="#"><?=Yii::$app->params['name3'][$lang]?></a>
                                        </h5>
                                        <h6><?=Yii::$app->params['client'][$lang]?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 3 end -->

<!-- Blog start -->
<div class="blog content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><?=Yii::$app->params['ourNews'][$lang]?></h1>
            <p><?=Yii::$app->params['aboutNews'][$lang]?></p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <?php foreach($news as $item) : ?>
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
                <?php
                $lang = Yii::$app->language;
                switch ($lang) {
                    case 'ru': $content = $item->short_ru;
                        break;
                    case 'en':$content = $item->short_en;
                        break;
                    case 'uz': $content = $item->short_uz;
                        break;
                }
                ?>

                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo" id="lightgallery">
	                    	<a href="<?=Yii::$app->request->baseUrl.'/'?>uploads/<?=$item->image?>">
	                            <img src="<?=Yii::$app->request->baseUrl.'/'?>uploads/<?=$item->image?>" alt="blog-3" class="img-fluid">
	                        </a>
                            <div class="date-box-2 db-2"><?=date('d.m',$item->created)?><br><?=date('Y',$item->created)?></div>

                        </div>
                        <div class="detail">
                            <h3>
                                <a href="<?=Url::to(['news/view', 'alias' => $item->title_en])?>"><?=$title?></a>
                            </h3>
                            <p><?=$content?></p>
                            <a href="<?=Url::to(['news/view', 'alias' => $item->title_en])?>" class="b-btn "><?=Yii::$app->params['more'][$lang]?></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->

