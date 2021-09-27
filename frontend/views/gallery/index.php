<?php
$lang = Yii::$app->language;
$this->title = Yii::$app->params['gallery'][$lang];
?>
<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1><?=Yii::$app->params['gallery'][$lang]?></h1>
            <ul class="breadcrumbs">
                <li><a href="<?=Yii::$app->homeUrl?>"><?=Yii::$app->params['home'][$lang]?></a></li>
                <li class="active"><?=Yii::$app->params['gallery'][$lang]?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Photo gallery start -->
<div class="photo-gallery content-area-13">
    <div class="container">
        <div class="row filter-portfolio">
            <div class="cars">
            <div class="row">
            <?php foreach($gallery as $item): ?>
            <?php if($item->status == 0) : ?>
                <div class="col-lg-4 col-md-4 col-sm-12 filtr-item" data-category="3" style="height:233px !important">
                    <?php
					    echo \kowap\lightgallery\LightGalleryWidget::widget([
				        'items' => [
				            [
				                'thumb' => Yii::$app->request->baseUrl.'/uploads/'.$item->image,
				                'src' => Yii::$app->request->baseUrl.'/uploads/'.$item->image
				            ],
				        ],
				        // more options http://sachinchoolur.github.io/lightGallery/docs/api.html
				        'options' => [
				            'mode' => 'lg-zoom-in-big',
				            'download' => false,
				            'zoom' => true,
				            'share' => true,
				            'autoplay' => true,
				        ]]);
					?>
                </div>
                <?php else : ?>
                <div class="col-lg-4 col-md-4 col-sm-12 filtr-item" data-category="3" style="height:233px !important">
                    <div class="portfolio-item" style="height:233px">
                       <iframe width="100%" height="233" src="<?=$item->link?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <?php endif;?>
            </div>
            <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
<!-- Photo gallery end -->
