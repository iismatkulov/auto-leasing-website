<?php

use phpnt\summernote\SummernoteWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#title_ru">Заголовок на Русском</a></li>
                <li><a data-toggle="tab" href="#title_en">Заголовок на Английском</a></li>
                <li><a data-toggle="tab" href="#title_uz">Заголовок на Узбекском</a></li>

            </ul>

            <div class="tab-content">
                <div id="title_ru" class="tab-pane fade in active">
                    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true])->label(false) ?>
                </div>
                <div id="title_en" class="tab-pane fade">
                    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true])->label(false) ?>
                </div>
                <div id="title_uz" class="tab-pane fade">
                    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true])->label(false) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'percent')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
