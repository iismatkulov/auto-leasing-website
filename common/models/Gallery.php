<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string $image
 * @property string $link
 * @property int $status
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }
    public function getArray()
    {
        return $arr = [
            0 => 'Фотография',
            1 => 'Видео',
        ];
    }
    /**
     * {@inheritdoc}
     */
    public $imageFile;
    public function rules()
    {
        return [
            [[ 'status'], 'required'],
            [['status'], 'integer'],
            [['image', 'link'], 'string', 'max' => 256],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Фотография',
            'link' => 'Ссылка на видео',
            'status' => 'Тип медии',
        ];
    }
}
