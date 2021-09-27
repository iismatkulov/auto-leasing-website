<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel common\models\DocumentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Documents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Document', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
            'attribute' => 'user_id',
            'value' => function($data){
            return $data->user->fullname;
            }
            ],
            'created:date',
            'image',
            [
            'label'=>'sss',
            'format'=>'raw',
            'value'=>function($data){
            return Html::a('Профиль',  Yii::getAlias('/frontend/web/uploads/').$data->image, ['class' => 'btn btn-primary', 'target'=>'_blank']);
            }
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
