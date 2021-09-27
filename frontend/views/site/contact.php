<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
$lang = Yii::$app->language;
$this->title = Yii::$app->params['contact'][$lang];
?>
<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1><?=Yii::$app->params['contact'][$lang]?></h1>
            <ul class="breadcrumbs">
                <li><a href="<?=Yii::$app->homeUrl?>"><?=Yii::$app->params['home'][$lang]?></a></li>
                <li class="active"><?=Yii::$app->params['contact'][$lang]?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Contact 2 start -->
<div class="contact-2 content-area-5">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1><?=Yii::$app->params['contactUs'][$lang]?></h1>
            <p><?=Yii::$app->params['question'][$lang]?></p>
        </div>
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data','method' => 'post']]); ?>
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <div class="form-group name">
                                <label style="margin-bottom: 0 !important;"><?=Yii::$app->params['name'][$lang]?></label>
                                <?= $form->field($model, 'fullname')->label(false)->textInput() ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group email">
                                <?=Yii::$app->params['email'][$lang]?>
                                <?= $form->field($model, 'email')->label(false)->textInput() ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <?=Yii::$app->params['subject'][$lang]?>
                            <div class="form-group subject">
                                <?= $form->field($model, 'subject')->label(false)->textInput() ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <?=Yii::$app->params['phone'][$lang]?>
                            <div class="form-group number">
                                <?= $form->field($model, 'phone')->label(false)->textInput() ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <?=Yii::$app->params['comment'][$lang]?>
                            <div class="form-group message">
                                <?=$form->field($model, 'comment')->label(false)->textarea(['rows' => 6]);?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="send-btn text-center">
                                <button type="submit" class="btn btn-md button-theme"><?=Yii::$app->params['send'][$lang]?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info-2">
                        <div class="ci-box">
                            <div class="icon">
                                <i class="flaticon-phone"></i>
                            </div>
                            <div class="detail">
                                <h5><?=Yii::$app->params['phone'][$lang]?>:</h5>
                                <p><a href="#">0477 8556 552</a></p>
                            </div>
                        </div>
                        <div class="ci-box">
                            <div class="icon">
                                <i class="flaticon-mail"></i>
                            </div>
                            <div class="detail">
                                <h5><?=Yii::$app->params['email'][$lang]?>:</h5>
                                <p><a href="#">info@themevessel.com</a></p>
                            </div>
                        </div>
                        <div class="ci-box">
                            <div class="icon">
                                <i class="flaticon-earth"></i>
                            </div>
                            <div class="detail">
                                <h5><?=Yii::$app->params['web'][$lang]?>:</h5>
                                <p><a href="#">info@themevessel.com</a></p>
                            </div>
                        </div>
                        <div class="ci-box mb-0">
                            <div class="icon">
                                <i class="lnr lnr-apartment"></i>
                            </div>
                            <div class="detail">
                                <h5><?=Yii::$app->params['address'][$lang]?>:</h5>
                                <p><?=Yii::$app->params['add'][$lang]?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<!-- Contact 2 end -->
