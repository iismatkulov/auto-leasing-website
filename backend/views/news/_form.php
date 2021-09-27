<?php

use phpnt\summernote\SummernoteWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

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
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#short_ru">Короткая информация на Русском</a></li>
                <li><a data-toggle="tab" href="#short_en">Короткая информация на Английском</a></li>
                <li><a data-toggle="tab" href="#short_uz">Короткая информация на Узбекском</a></li>

            </ul>

            <div class="tab-content">
                <div id="short_ru" class="tab-pane fade in active">
                    <?= $form->field($model, 'short_ru')->label(false)->widget(SummernoteWidget::class,[
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
                <div id="short_en" class="tab-pane fade">
                    <?= $form->field($model, 'short_en')->label(false)->widget(SummernoteWidget::class,[
                        'options' => [
                            'id' => '2'
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
                <div id="short_uz" class="tab-pane fade">
                    <?= $form->field($model, 'short_uz')->label(false)->widget(SummernoteWidget::class,[
                        'options' => [
                            'id' => '3'
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
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#content_ru">Контент на Русском</a></li>
                <li><a data-toggle="tab" href="#content_en">Контент на Английском</a></li>
                <li><a data-toggle="tab" href="#content_uz">Контент на Узбекском</a></li>

            </ul>

            <div class="tab-content">
                <div id="content_ru" class="tab-pane fade in active">
                    <?= $form->field($model, 'content_ru')->label(false)->widget(SummernoteWidget::class,[
                        'options' => [
                            'id' => '4'
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
                <div id="content_en" class="tab-pane fade">
                    <?= $form->field($model, 'content_en')->label(false)->widget(SummernoteWidget::class,[
                        'options' => [
                            'id' => '5'
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
                <div id="content_uz" class="tab-pane fade">
                    <?= $form->field($model, 'content_uz')->label(false)->widget(SummernoteWidget::class,[
                        'options' => [
                            'id' => '6'
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
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
    <?= $form->field($model, 'imageFile')->fileInput() ?>
        </div>
        <div class="col-md-6">
            <?= DatePicker::widget([
                'model' => $model,
                'attribute' => 'created',
                'template' => '{addon}{input}',
                'clientOptions' => [
                    'autoclose' => true,
                    'format' => 'dd-M-yyyy'
                ]
            ]);?>
        </div>

    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
