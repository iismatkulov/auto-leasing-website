<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use common\models\Pages;

$this->title = 'Страницы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Новый', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute'=>'lang',
                'value'=>function($data){
                $arr = array("ru" => "Русский", "en" => "English", "uz" => "O'zbek");
                    return $arr[$data->lang];
                },
                'filter' => array("ru" => "Русский", "en" => "English", "uz" => "O'zbek"),
            ],
            'title',
            [
                'attribute' => 'is_sub',
                'format' => 'raw',
                'filter' => array("0" => "Главный меню", "1" => "Под меню"),
                'value' => function($data){
                    if($data->is_sub==0){
                        return 'Главный меню';
                    }
                    else if($data->is_sub==1){
                        return 'Под меню';
                    }
                }
            ],
            [
                'attribute'=>'page_id',
                'value'=>'page_id',
                'filter' => ArrayHelper::map(Pages::find()->where(['is_sub' => 0])->all(), 'id', 'title'),
            ],
            'position',
            //'keywords',
            //'description',
            //'content:ntext',
            //'alias',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
