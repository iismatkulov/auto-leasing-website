<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $fullname;
    public $address;
    public $phone;
    public $pass_ser;
    public $pass_numb;
    public $pass_date;
    public $pass_who;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['fullname', 'trim'],
            ['fullname', 'required'],
            ['fullname', 'string', 'min' => 2, 'max' => 255],


            ['address', 'trim'],
            ['address', 'required'],
            ['address', 'string', 'min' => 2, 'max' => 255],

            ['phone', 'trim'],
            ['phone', 'required'],
            ['phone', 'string', 'min' => 2, 'max' => 255],



            ['pass_ser', 'trim'],
            ['pass_ser', 'required'],
            ['pass_ser', 'string', 'min' => 2, 'max' => 2],

            ['pass_numb', 'trim'],
            ['pass_numb', 'required'],
            ['pass_numb', 'string', 'min' => 2, 'max' => 7],

            ['pass_date', 'trim'],
            ['pass_date', 'required'],
            ['pass_date', 'integer', 'min' => 2, 'max' => true],


            ['pass_who', 'trim'],
            ['pass_who', 'required'],
            ['pass_who', 'string', 'min' => 2, 'max' => 256],




            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->fullname = $this->fullname;
        $user->address = $this->address;
        $user->phone = $this->phone;
        $user->pass_ser = $this->pass_ser;
        $user->pass_numb = $this->pass_numb;
        $user->pass_date = $this->pass_date;
        $user->pass_who = $this->pass_who;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        return $user->save() && $this->sendEmail($user);

    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
