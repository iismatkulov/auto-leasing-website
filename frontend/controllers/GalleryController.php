<?php
namespace frontend\controllers;

use common\models\Gallery;
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
class GalleryController extends Controller
{
    public function actionIndex($id){
        $gallery = Gallery::find()->where(['status' => $id])->all();

        return $this->render('index', [
            'gallery' => $gallery,
        ]);
    }
}
