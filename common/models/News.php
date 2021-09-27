<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title_ru
 * @property string $title_en
 * @property string $title_uz
 * @property string $short_ru
 * @property string $short_en
 * @property string $short_uz
 * @property string $content_ru
 * @property string $content_en
 * @property string $content_uz
 * @property int $created
 * @property string $image
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public $imageFile;
    public function rules()
    {
        return [
            [['title_ru', 'title_en', 'title_uz', 'short_ru', 'short_en', 'short_uz', 'content_ru', 'content_en', 'content_uz', 'created', 'image'], 'required'],
            [['content_ru', 'content_en', 'content_uz'], 'string'],
            [['created'], 'integer'],
            [['title_ru', 'title_en', 'title_uz', 'short_ru', 'short_en', 'short_uz', 'image'], 'string', 'max' => 256],
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
            'short_ru' => 'Short Ru',
            'short_en' => 'Short En',
            'short_uz' => 'Short Uz',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'content_uz' => 'Content Uz',
            'created' => 'Created',
            'image' => 'Image',
        ];
    }
}
