<?php

use yii\helpers\Url;

$lang = Yii::$app->language;
$this->title = Yii::$app->params['services'][$lang];
?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1><?=Yii::$app->params['services'][$lang]?></h1>
            <ul class="breadcrumbs">
                <li><a href="<?=Yii::$app->homeUrl?>"><?=Yii::$app->params['home'][$lang]?></a></li>
                <li class="active"><?=Yii::$app->params['services'][$lang]?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Shop list start -->
<div class="shop-list content-area">
    <div class="container">
        <div class="row">

            </div>
            <?php foreach($service as $item) : ?>
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
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="shop-box">
                    <div class="shop-theme">
                        <img class="img-fluid" src="<?=Yii::$app->request->baseUrl.'/'?>uploads/<?=$item->image?>" alt="shop-theme">

                    </div>
                    <div class="shop-details">
                        <h3><a href="<?=Url::to(['service/view', 'alias' => $item->title_en])?>"><?=$title?></a></h3>
                        <a class="btn btn-border btn-sm" href="<?=Url::to(['service/view', 'alias' => $item->title_en])?>" role="button"><?=Yii::$app->params['more'][$lang]?></a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<!-- Shop list end -->
