<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">



    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Проверка пройдена', ['view', 'id' => $model->id, 'is_pass' => 1 ], ['class' => 'btn btn-warning']) ?>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div class="row">
        <div class="col-lg-12">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'username',
                    'fullname',
                    'address',
                    'phone',
                    'email:email',
                    'created_at:date',
                    'updated_at:date',
                    'pass_ser',
                    'pass_numb',
                    'pass_date',
                    'pass_who',
                    [
                       'attribute' => 'is_pass',
                        'value' => function($data){
                            return $data->arr[$data->is_pass];
                        }
                    ],


                ],
            ]) ?>
            
        </div>
        <div class="row">
            <div class="col-lg-4">
                <?php foreach ($photo as $item) : ?>
                    <a href="<?=Yii::$app->request->baseUrl.'/'?>uploads/<?=$item->image?>" class="btn btn-success" target="_blank"><i class="fa fa-upload"></i> Файл</a>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
