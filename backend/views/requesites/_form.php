<?php

use phpnt\summernote\SummernoteWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Requisites */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requisites-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'director_name')->textInput() ?>

    <?= $form->field($model, 'company_name')->textInput() ?>

    <?= $form->field($model, 'content')->label(false)->widget(SummernoteWidget::class,[
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

    <?= $form->field($model, 'imageFile')->fileInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
