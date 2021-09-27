<?php
namespace frontend\controllers;

use common\models\Gallery;
use common\models\Product;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class CarsController extends Controller
{
    public function actionIndex(){

        $cars = Product::find()->orderBy(['id' => SORT_DESC])->all();


        return $this->render('index', [
            'cars' => $cars,
        ]);
    }
    public function actionView($alias){
        $model = Product::find()->where(['title_en' => $alias])->one();
        $cars = Product::find()->orderBy(['id' => SORT_DESC])->limit(3)->all();


        return $this->render('view', [
            'model' => $model,
            'cars' => $cars,
        ]);
    }
}
