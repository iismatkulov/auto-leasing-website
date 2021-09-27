<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
$lang = Yii::$app->language;
$this->title = Yii::$app->params['about'][$lang];
?>
<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1><?=Yii::$app->params['about'][$lang]?></h1>
            <ul class="breadcrumbs">
                <li><a href="<?=Yii::$app->homeUrl?>"><?=Yii::$app->params['home'][$lang]?></a></li>
                <li class="active"><?=Yii::$app->params['about'][$lang]?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- About car start -->
<div class="about-car">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="about-slider-box simple-slider">
                    <img class="d-block w-100" src="<?=Yii::$app->request->baseUrl.'/'?>img/car-8.jpg" alt="about">
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="about-text">
                    <h3>AutoLizing 5 Yillik</h3>
                    <P><?=Yii::$app->params['aboutCom'][$lang]?></P>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About car end -->
<!-- Counters strat -->
<div class="counters-2 overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="counter-box-2">
                    <div class="icon">
                        <i class="flaticon-car"></i>
                    </div>
                    <div class="detail align-self-center">
                        <h2>475</h2>
                        <h5><?=Yii::$app->params['sell'][$lang]?></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="counter-box-2">
                    <div class="icon">
                        <i class="flaticon-blog"></i>
                    </div>
                    <div class="detail">
                        <h2>1402</h2>
                        <h5><?=Yii::$app->params['contract'][$lang]?></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="counter-box-2">
                    <div class="icon">
                        <i class="flaticon-user"></i>
                    </div>
                    <div class="detail">
                        <h2>254</h2>
                        <h5><?=Yii::$app->params['happy'][$lang]?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->

<div class="service-section content-area-2" style="margin-top: 80px">
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


