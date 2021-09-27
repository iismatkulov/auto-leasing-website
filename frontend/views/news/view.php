<?php
use yii\helpers\Url;


                $lang = Yii::$app->language;
                switch ($lang) {
                    case 'ru': $title = $model->title_ru;
                        break;
                    case 'en':$title = $model->title_en;
                        break;
                    case 'uz': $title = $model->title_uz;
                        break;
                }

                $lang = Yii::$app->language;
                switch ($lang) {
                    case 'ru': $content = $model->content_ru;
                        break;
                    case 'en':$content = $model->content_en;
                        break;
                    case 'uz': $content = $model->content_uz;
                        break;
                }


$lang = Yii::$app->language;
$this->title = $title;
?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1><?=Yii::$app->params['more'][$lang]?></h1>
            <ul class="breadcrumbs">
                <li><a href="<?=Url::to(['news/index'])?>""><?=Yii::$app->params['news'][$lang]?></a></li>
                <li class="active"><?=Yii::$app->params['more'][$lang]?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Blog body start -->
<div class="blog-body content-area-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- Blog 1 start -->
                <div class="blog-1 blog-big mb-50">
                    <div class="blog-photo">
                        <img src="<?=Yii::$app->request->baseUrl.'/'?>uploads/<?=$model->image?>" alt="blog-img" class="img-fluid">
                    </div>
                    <div class="detail">
                        <h3>
                            <a href="blog-details.html"><?=$title?></a>
                        </h3>
                        <p><?=$content?></p>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Search box -->
                    <!-- Posts By Category Start -->
                    <div class="posts-by-category widget">
                        <h3 class="sidebar-title"><?=Yii::$app->params['news'][$lang]?></h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <ul class="list-unstyled list-cat">
                            <?php foreach ($news as $item) : ?>
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
                                <li><a href="<?=Url::to(['news/view','alias' => $item->title_en])?>"><?=$title?> </a></li>
                            <?php endforeach; ?>

                        </ul>
                    </div>

                    <!-- Recent posts start -->
                    <div class="widget recent-posts">
                        <h3 class="sidebar-title"><?=Yii::$app->params['cars'][$lang]?></h3>
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
                        <?php endforeach;?>                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog body end -->
