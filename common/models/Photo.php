<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "photo".
 *
 * @property int $id
 * @property string $image
 * @property int $user_id
 */
class Photo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'photo';
    }

    /**
     * {@inheritdoc}
     */
    public $imageFile;
    public function rules()
    {
        return [
            [['image', 'user_id'], 'required'],
            [['user_id'], 'integer'],
            [['image'], 'string', 'max' => 256],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, docx, pdf'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'user_id' => 'User ID',
        ];
    }
}
