<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $title_ru
 * @property string $title_en
 * @property string $title_uz
 * @property string $content_ru
 * @property string $content_en
 * @property string $content_uz
 * @property  integer $price
 * @property  integer $percent
 * @property  integer $percent_price
 * @property  integer $total
 * @property string $image
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public $imageFile;
    public function rules()
    {
        return [
            [['title_ru', 'title_en', 'title_uz', 'image', 'price', 'percent', 'percent_price', 'total'], 'required'],
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
            'title_ru' => 'Заголовок на русском',
            'title_en' => 'Заголовок на английском',
            'title_uz' => 'Заголовок на узбекском',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'content_uz' => 'Content Uz',
            'image' => 'Фотография',
            'price' => 'Заводская цена',
            'percent' => 'Процентная ставка',
            'percent_price' => 'Сумма процентной ставки',
            'total' => 'Всего',
        ];
    }
}
