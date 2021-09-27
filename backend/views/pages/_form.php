<?php

use common\models\Pages;
use phpnt\summernote\SummernoteWidget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$array = [
    ['code' => 'ru', 'name' => 'Русский'],
    ['code' => 'en', 'name' => 'English'],
    ['code' => 'uz', 'name' => 'O\'zbek'],
];
?>

<div class="pages-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-3">
        <?= $form->field($model, 'lang')->dropDownList(
            ArrayHelper::map($array, 'code', 'name'),
            [
                'prompt' => 'Выберите язык',
            ]) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'is_sub')->dropDownList([0 => 'Главная меню', 1 => 'Под меню'], ['prompt'=>'Выбрать', ]) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'page_id')->dropDownList(
            ArrayHelper::map(Pages::find()->all(), 'id', 'title')) ?>
    </div>


    <div class="col-md-3">
        <?= $form->field($model, 'position')->textInput() ?>
    </div>

    <div class="col-md-6">
        <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-6">
        <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-12">
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-12">
        <?= $form->field($model, 'content')->widget(SummernoteWidget::class,[
            'options' => [
                'id' => '1'
            ],
            'i18n' => true,             // переводить на другие языки
            'codemirror' => true,       // использовать CodeMirror (оформленный редактор кода)
            'emoji' => true,             // включить эмоджи
            'widgetOptions' => [
                /* Настройка панели */
                'placeholder' => Yii::t('app', 'Ваш комментарий.'),
                'height' => 200,
                'tabsize' => 2,
                'minHeight' => 200,
                'maxHeight' => 200,
                'focus' => false,
                /* Панель управления */
                'toolbar' => [
                    ['insert', ['picture', 'video', 'table']],
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['paragraph']],
                    ['height', ['height']],
                    ['misc', ['codeview']],
                ],
            ],
        ]); ?>
    </div>

    <div class="col-md-6">
        <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-6 text-right">
        <br />
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
