<?php
$lang = Yii::$app->language;
?>
<!-- Car details page start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1><?=$model->title?></h1>
            <ul class="breadcrumbs">
                <li><a href="<?=Yii::$app->homeUrl?>"><?=Yii::$app->params['home'][$lang]?></a></li>
                <li class="active"><?=$model->title?></li>
            </ul>
        </div>
    </div>
</div>

<div class="car-details-page content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="car-details-section">
                    <!-- Advanced search start -->
                    <!-- Description start -->
                    <div class="Description mb-50">
                        <h3 class="heading-2"><?=$model->title?></h3>
                        <p><?=$model->content?></p>
                    </div>
                    <!-- Car amenities start -->
                    <!-- Inside car start -->
                    <!-- location start -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Car details page end -->
