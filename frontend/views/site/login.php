<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$lang = Yii::$app->language;
$this->title = Yii::$app->params['login'][$lang];
?>
<!-- Contact section start -->
<div class="contact-section">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-6 align-self-center pad-0">
                <div class="form-section align-self-center">
                    <h3><?=Yii::$app->params['login'][$lang]?></h3>
                    <div class="btn-section clearfix">
                        <a href="<?=\yii\helpers\Url::to(['site/login'])?>" class="link-btn active btn-1  active-bg"><?=Yii::$app->params['login'][$lang]?></a>
                        <a href="<?=\yii\helpers\Url::to(['site/signup'])?>" class="link-btn btn-2"><?=Yii::$app->params['register'][$lang]?></a>
                    </div>
                    <div class="clearfix"></div>
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data','method' => 'post']]); ?>
                        <div class="form-group form-box">
                            <label><?=Yii::$app->params['username'][$lang]?></label>
                            <?= $form->field($model, 'username')->textInput(['maxlength' => 255, 'class' => 'input-text'])->label(false); ?>
                        </div>
                        <div class="form-group form-box clearfix">
                            <label><?=Yii::$app->params['password'][$lang]?></label>
                            <?= $form->field($model, 'password')->passwordInput(['maxlength' => 255, 'class' => 'input-text'])->label(false); ?>
                        </div>
                        <div class="form-group clearfix mb-0">
                            <button type="submit" class="btn-md btn-theme btn float-left"><?=Yii::$app->params['login'][$lang]?></button>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <div class="col-lg-6 align-self-center pad-0 bg-img">
                <div class="info clearfix">
                    <div class="logo-2">
                        <a href="index.html">
                            <img src="<?=Yii::$app->request->baseUrl.'/'?>img/logos/logo.png" alt="logo">
                        </a>
                    </div>
                    <h3>Welcome to Logdy</h3>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->
