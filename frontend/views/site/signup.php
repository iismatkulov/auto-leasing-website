<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use dosamigos\datepicker\DatePicker;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$lang = Yii::$app->language;
$this->title = Yii::$app->params['register'][$lang] ;
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Contact section start -->
<div class="contact-section" style="margin-top: 50px">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-12 align-self-center pad-0">
                <div class="form-section clearfix">
                    <h3><?=Yii::$app->params['create'][$lang]?></h3>
                    <div class="btn-section clearfix">
                        <a href="<?=\yii\helpers\Url::to(['site/login'])?>" class="link-btn active btn-1 default-bg"><?=Yii::$app->params['login'][$lang]?></a>
                        <a href="<?=\yii\helpers\Url::to(['site/signup'])?>" class="link-btn btn-2 active-bg"><?=Yii::$app->params['register'][$lang]?></a>
                    </div>
                    <div class="clearfix"></div>
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data','method' => 'post']]); ?>
                        <div class="row">
                        <div class="form-group form-box col-md-6">
                            <label><?=Yii::$app->params['username'][$lang]?> </label>
                            <?= $form->field($model, 'username')->textInput(['maxlength' => 255, 'class' => 'input-text'])->label(false); ?>
                        </div>
                        <div class="form-group form-box col-md-6">
                            <label><?=Yii::$app->params['name'][$lang]?> </label>
                            <?= $form->field($model, 'fullname')->textInput(['maxlength' => 255, 'class' => 'input-text'])->label(false); ?>
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group form-box col-md-6">
                            <label><?=Yii::$app->params['phone'][$lang]?> </label>
                            <?= $form->field($model, 'phone',['options' => ['style' => 'width:100%']])->textInput(['maxlength' => 255, 'class' => 'input-text'])->label(false); ?>
                        </div>

                        <div class="form-group form-box col-md-6">
                            <label><?=Yii::$app->params['address'][$lang]?> </label>
                            <?= $form->field($model, 'address')->textInput(['maxlength' => 255, 'class' => 'input-text'])->label(false); ?>
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group form-box col-md-6">
                            <label><?=Yii::$app->params['email'][$lang]?> </label>
                            <?= $form->field($model, 'email')->textInput(['maxlength' => 255, 'class' => 'input-text'])->label(false); ?>
                        </div>
                            <div class="form-group form-box clearfix col-md-6">
                                <label><?=Yii::$app->params['password'][$lang]?> </label>
                                <?= $form->field($model, 'password')->passwordInput(['maxlength' => 255, 'class' => 'input-text'])->label(false); ?>
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group form-box col-md-6">
                                <label><?=Yii::$app->params['seriya'][$lang]?> </label>
                                <?= $form->field($model, 'pass_ser')->textInput(['maxlength' => 255, 'class' => 'input-text'])->label(false); ?>
                            </div>
                        <div class="form-group form-box col-md-6">
                            <label><?=Yii::$app->params['nomer'][$lang]?> </label>
                            <?= $form->field($model, 'pass_numb')->textInput(['maxlength' => 255, 'class' => 'input-text'])->label(false); ?>
                        </div>

                        </div>
                        <div class="row">
                        <div class="form-group form-box col-md-6">
                            <label><?=Yii::$app->params['give'][$lang]?> </label>
                            <?= $form->field($model, 'pass_who')->textInput(['maxlength' => 255, 'class' => 'input-text'])->label(false); ?>
                        </div>
                            <div class="form-group form-box col-md-6">
                                <label><?=Yii::$app->params['date'][$lang]?> </label>
                                <?= DatePicker::widget([
                                    'model' => $model,
                                    'attribute' => 'pass_date',
                                    'class' => 'input-text',
                                    'options' => ['class' => 'input-text'],
                                    'template' => '{addon}{input}',
                                    'clientOptions' => [
                                        'autoclose' => true,
                                        'format' => 'dd-M-yyyy',
                                        'class' => 'input-text',

                                    ]
                                ]);?>
                            </div>

                        </div>

                        <div class="form-group clearfix mb-0">
                            <button type="submit" class="btn-md btn-theme float-left"><?=Yii::$app->params['reg'][$lang]?></button>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact section end -->
