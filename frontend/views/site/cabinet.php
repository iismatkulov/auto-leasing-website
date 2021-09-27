<?php
$user =\common\models\User::find()->where(['id' => Yii::$app->user->id])->one();
$lang = Yii::$app->language;
$this->title = Yii::$app->params['cabinet'][$lang];

use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html; ?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1><?=Yii::$app->params['cabinet'][$lang]?></h1>
            <ul class="breadcrumbs">
                <li><a href="<?=Yii::$app->homeUrl?>"><?=Yii::$app->params['home'][$lang]?></a></li>
                <li class="active"><?=Yii::$app->params['cabinet'][$lang]?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Agent page start -->
<div class="agent-page content-area-5">
    <div class="container">
        <!-- Heading -->
        <h1 class="heading-2"><?=Yii::$app->params['info'][$lang]?></h1>

        <div class="row">
            <div class="col-lg-12">
                <div class="row team-2 mb-50" style="padding: 30px">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-pad align-self-center bg">
                        <div class="detail">
                            <h4 style="margin-top: 10px">
                                <?=Yii::$app->params['data'][$lang]?> :
                            </h4>
                            <div class="contact">
                                <ul>
                                    <li>
                                        <i class="flaticon-user"></i><a href="#"><?=Yii::$app->params['info'][$lang]?> : <?=$user->fullname?></a>
                                    </li>

                                    <li>
                                        <i class="flaticon-pin"></i><a><?=Yii::$app->params['address'][$lang]?> : <?=$user->address?></a>
                                    </li>
                                    <li>
                                        <i class="flaticon-mail"></i><a href="mailto:<?=$user->email?>"><?=Yii::$app->params['email'][$lang]?> : <?=$user->email?></a>
                                    </li>
                                    <li>
                                        <i class="flaticon-phone"></i><a href="tel:<?=$user->phone?>"><?=Yii::$app->params['phone'][$lang]?> : <?=$user->phone?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-pad align-self-center bg">
                        <div class="detail">
                            <h4 style="margin-top: 10px">
                                <?=Yii::$app->params['passport'][$lang]?> :
                            </h4>
                            <div class="contact">
                                <ul>

                                    <li>
                                        <i class="fa fa-file-text-o"></i><?=Yii::$app->params['seriya'][$lang]?> : <?=$user->pass_ser?>
                                    </li>
                                    <li>
                                        <i class="fa fa-file-text"></i><?=Yii::$app->params['nomer'][$lang]?> : <?=$user->pass_numb?>
                                    </li>
                                    <li>
                                        <i class="fa fa-calendar"></i> <?=Yii::$app->params['date'][$lang]?> : <?=$user->pass_date?>
                                    </li>
                                    <li>
                                        <i class="fa fa-building"></i><?=Yii::$app->params['give'][$lang]?> : <?=$user->pass_who?>
                                    </li>

                                </ul>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="pull-right" style="margin-top: 30px">
<!--                    -->
                    <a href="<?=\yii\helpers\Url::to(['site/dogovor1'])?>" class="btn btn-warning"><i class="fa fa-download"></i> <?=Yii::$app->params['download'][$lang]?> 1</a>

                    <a href="<?=\yii\helpers\Url::to(['site/dogovor2'])?>" class="btn btn-warning"><i class="fa fa-download"></i> <?=Yii::$app->params['download'][$lang]?> 2</a>
                    <a>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-upload"></i> <?=Yii::$app->params['zagruzka'][$lang]?>
                    </button>
                    </a>
                    <a href="<?=\yii\helpers\Url::to(['site/changepassword'])?>" class="btn btn-primary"><i class="fa fa-refresh"></i> <?=Yii::$app->params['change'][$lang]?></a>
                    <a href="<?=\yii\helpers\Url::to(['site/logout'])?>" class="btn btn-danger"><i class="fa fa-sign-out"></i> <?=Yii::$app->params['logout'][$lang]?></a>
                </div>
            </div>
        </div>
        <!-- Related car start -->
    </div>
</div>
<!-- Agent page end -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999">
    <div class="modal-dialog" role="document">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data','method' => 'post']]); ?>

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?=Yii::$app->params['upload'][$lang]?> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if($user->is_pass == 0) : ?>
                <h4><?=Yii::$app->params['zam'][$lang]?></h4>
                <p><?=Yii::$app->params['zamInfo'][$lang]?></p>
                <?= $form->field($model, 'imageFile')->fileInput() ?>
                <?php else : ?>
                <p class="btn-success" style="padding: 10px"><i class="fa fa-check"></i> Паспорт загружен</p>
                <?php endif; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?=Yii::$app->params['close'][$lang]?></button>
                <?php if($user->is_pass == 0) : ?>
                <?=Html::submitButton('Save', ['class' => 'btn btn-primary']);?>
                <?php else : ?>

                <?php endif; ?>

            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
