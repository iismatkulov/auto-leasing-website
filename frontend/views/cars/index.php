<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$lang = Yii::$app->language;
?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1><?= Yii::$app->params['allCars'][$lang] ?></h1>
            <ul class="breadcrumbs">
                <li><a href="<?= Yii::$app->homeUrl ?>"><?= Yii::$app->params['home'][$lang] ?></a></li>
                <li class="active"><?= Yii::$app->params['allCars'][$lang] ?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Featured car start -->
<div class="featured-car content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <!-- Option bar start -->
                <!-- Car box 2 start -->
                <div class="row">
                    <?php foreach ($cars as $item) : ?>
                        <?php
                        $lang = Yii::$app->language;
                        switch ($lang) {
                            case 'ru':
                                $title = $item->title_ru;
                                break;
                            case 'en':
                                $title = $item->title_en;
                                break;
                            case 'uz':
                                $title = $item->title_uz;
                                break;
                        }
                        ?>
                        <?php
                        $lang = Yii::$app->language;
                        switch ($lang) {
                            case 'ru':
                                $content = $item->content_ru;
                                break;
                            case 'en':
                                $content = $item->content_en;
                                break;
                            case 'uz':
                                $content = $item->content_uz;
                                break;
                        }
                        ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="car-box-3">
                                <div class="car-thumbnail"
                                     style="background:url(<?= Yii::$app->request->baseUrl . '/' ?>uploads/<?= $item->image ?>) center center ;height:300px; background-size:cover; "
                                     ;>
                                    <a href="<?= Url::to(['cars/view', 'alias' => $item->title_en]) ?>" class="car-img">
                                        <div class="for"><?= Yii::$app->params['have'][$lang] ?></div>
                                        <div class="price-box">
                                            <span class="del"><del>$950.00</del></span>
                                            <br>
                                            <span>$1050.00</span>
                                        </div>
                                    </a>
                                    <div class="carbox-overlap-wrapper">
                                        <div class="overlap-box">
                                            <div class="overlap-btns-area">
                                                <a class="overlap-btn"
                                                   href="<?= Url::to(['cars/view', 'alias' => $item->title_en]) ?>">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <div class="car-magnify-gallery">
                                                    <a href="<?= Yii::$app->request->baseUrl . '/' ?>uploads/<?= $item->image ?>"
                                                       class="overlap-btn">
                                                        <i class="fa fa-expand"></i>
                                                        <img class="hidden"
                                                             src="<?= Yii::$app->request->baseUrl . '/' ?>uploads/<?= $item->image ?>"
                                                             alt="<?= $title ?>">
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail">
                                    <h1 class="title">
                                        <a href="<?= Url::to(['cars/view', 'alias' => $item->title_en]) ?>"><?= $title ?></a>
                                    </h1>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<!-- Featured car start -->
