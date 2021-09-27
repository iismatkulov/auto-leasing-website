<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "requisites".
 *
 * @property int $id
 * @property string $image
 * @property string $content
 * @property string $director_name
 */
class Requisites extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'requisites';
    }

    /**
     * {@inheritdoc}
     */
    public $imageFile;
    public function rules()
    {
        return [
            [['image', 'content', 'director_name', 'company_name'], 'required'],
            [['image', 'director_name', 'company_name'], 'string', 'max' => 256],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, pdf, docx'],
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
            'content' => 'Content',
            'director_name' => 'Director Name',
        ];
    }
}
