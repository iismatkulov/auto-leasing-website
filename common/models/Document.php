<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "document".
 *
 * @property int $id
 * @property int $user_id
 * @property int $created
 * @property string $image
 */
class Document extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'document';
    }

    /**
     * {@inheritdoc}
     */
    public $imageFile;
    public function rules()
    {
        return [
            [['user_id', 'created', 'image'], 'required'],
            [['user_id', 'created'], 'integer'],
            [['image'], 'string', 'max' => 256],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, pdf, docx',],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'Клиент',
            'created' => 'Дата добавления',
            'image' => 'Фотография',
            'imageFile' => 'Passport'
        ];
    }
    public function getUser(){
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

}
