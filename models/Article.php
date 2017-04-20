<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $description
 * @property string $content
 * @property string $title
 * @property string $date
 * @property string $image
 * @property integer $viewed
 * @property integer $personal_id
 * @property integer $status
 * @property integer $menu_id
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'content'], 'string'],
            [['date'], 'safe'],
            [['viewed', 'personal_id', 'status', 'menu_id'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'title' => 'Title',
            'date' => 'Date',
            'image' => 'Image',
            'viewed' => 'Viewed',
            'personal_id' => 'Personal ID',
            'status' => 'Status',
            'menu_id' => 'Menu ID',
            'description' => 'Description',
        ];
    }
}
