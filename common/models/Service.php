<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property string $title_ru
 * @property string $title_en
 * @property string $title_uz
 * @property string $content_ru
 * @property string $content_en
 * @property string $content_uz
 * @property string $image
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public $imageFile;
    public function rules()
    {
        return [
            [['title_ru', 'title_en', 'title_uz', 'content_ru', 'content_en', 'content_uz', 'image'], 'required'],
            [['content_ru', 'content_en', 'content_uz'], 'string'],
            [['title_ru', 'title_en', 'title_uz', 'image'], 'string', 'max' => 256],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'title_uz' => 'Title Uz',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'content_uz' => 'Content Uz',
            'image' => 'Image',
        ];
    }
}
