<?php

use yii\helpers\Url;

$lang = Yii::$app->language;
$this->title = Yii::$app->params['news'][$lang];
?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1><?=Yii::$app->params['news'][$lang]?></h1>
            <ul class="breadcrumbs">
                <li><a href="<?=Yii::$app->homeUrl?>"><?=Yii::$app->params['home'][$lang]?></a></li>
                <li class="active"><?=Yii::$app->params['news'][$lang]?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Blog body start -->
<div class="blog-body content-area">
    <div class="container">
        <div class="row">
            <?php foreach($model as $item) : ?>
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
            <div class="col-lg-4 col-md-6">
                <div class="blog-3">
                    <div class="blog-photo">
                        <img src="<?=Yii::$app->request->baseUrl.'/'?>uploads/<?=$item->image?>" alt="blog-3" class="img-fluid">
                        <div class="date-box-2 db-2"><?=date('d.m',$item->created)?><br><?=date('Y',$item->created)?></div>

                    </div>
                    <div class="detail">
                        <h3>
                            <a href="<?=Url::to(['news/view','alias' => $item->title_en])?>"><?=$title?></a>
                        </h3>
                        <p><?=$content?></p>
                        <a href="<?=Url::to(['news/view','alias' => $item->title_en])?>" class="b-btn "><?=Yii::$app->params['more'][$lang]?></a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<!-- Blog body end -->
