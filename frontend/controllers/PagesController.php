<?php

namespace frontend\controllers;

use common\models\Pages;
use yii\web\Controller;

class PagesController extends Controller
{

    public function actionView($alias)
    {
        $model = Pages::find()->where(['alias' => $alias])->one();

        return $this->render('view',[
            'model' => $model,
        ]);
    }

}