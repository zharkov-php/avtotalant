<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "filial".
 *
 * @property integer $id
 * @property string $description
 * @property string $content
 * @property string $title
 * @property string $text
 * @property string $image
 * @property integer $status
 */
class Filial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'filial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'content', 'text'], 'string'],
            [['status'], 'integer'],
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
            'description' => 'Description',
            'content' => 'Content',
            'title' => 'Title',
            'text' => 'Text',
            'image' => 'Image',
            'status' => 'Status',
        ];
    }
}
