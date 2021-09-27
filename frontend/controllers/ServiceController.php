<?php
namespace frontend\controllers;

use common\models\Gallery;
use common\models\Product;
use common\models\Service;
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
class ServiceController extends Controller
{
    public function actionIndex(){
        $service = Service::find()->all();

        return $this->render('index', [
            'service' => $service,
        ]);
    }
    public function actionView($alias){
        $model = Service::find()->where(['title_en' => $alias])->one();
        $services = Service::find()->all();
        $cars = Product::find()->orderBy(['id' => SORT_DESC])->limit(5)->all();


        return $this->render('view',[
            'model' => $model,
            'services' => $services,
            'cars' => $cars,
        ]);
    }
}
