<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $lang
 * @property int $is_sub
 * @property int $page_id
 * @property int $position
 * @property string $keywords
 * @property string $description
 * @property string $title
 * @property string $content
 * @property string $alias
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lang', 'is_sub', 'position', 'keywords', 'description', 'title', 'content', 'alias'], 'required'],
            [['is_sub', 'page_id', 'position'], 'integer'],
            [['content'], 'string'],
            [['lang', 'keywords', 'description', 'title', 'alias'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lang' => 'Lang',
            'is_sub' => 'Is Sub',
            'page_id' => 'Page ID',
            'position' => 'Position',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'title' => 'Title',
            'content' => 'Content',
            'alias' => 'Alias',
        ];
    }
}
