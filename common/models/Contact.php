<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $fullname
 * @property string $email
 * @property string $phone
 * @property string $subject
 * @property string $comment
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'email', 'phone', 'subject', 'comment'], 'required'],
            [['comment'], 'string'],
            [['fullname', 'email', 'phone', 'subject'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'email' => 'Email',
            'phone' => 'Phone',
            'subject' => 'Subject',
            'comment' => 'Comment',
        ];
    }
}
