<?php

namespace frontend\controllers;

use common\models\News;
use common\models\Pages;
use common\models\Product;
use yii\web\Controller;

class NewsController extends Controller
{

    public function actionIndex()
    {
        $model = News::find()->orderBy(['id' => SORT_DESC])->all();

        return $this->render('index',[
            'model' => $model,
        ]);
    }
    public function actionView($alias){
        $model = News::find()->where(['title_en' => $alias])->one();
        $news = News::find()->orderBy(['id' => SORT_DESC])->limit(5)->all();
        $cars = Product::find()->orderBy(['id' => SORT_DESC])->limit(5)->all();



        return $this->render('view', [
           'model' => $model,
            'news' => $news,
            'cars' => $cars,
        ]);
    }

}