<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schedule_levoberezhnaya_1".
 *
 * @property integer $id
 * @property string $name_Lesson
 * @property string $time_Lesson
 * @property string $date_Lesson
 * @property string $sale_Lesson
 * @property string $google_map_Lesson
 * @property string $status_color_Lesson
 * @property integer $active_Lesson
 */
class ScheduleLevoberezhnaya1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schedule_levoberezhnaya_1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['active_Lesson'], 'integer'],
            [['name_Lesson', 'time_Lesson', 'date_Lesson', 'sale_Lesson', 'google_map_Lesson', 'status_color_Lesson'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_Lesson' => 'Name  Lesson',
            'time_Lesson' => 'Time  Lesson',
            'date_Lesson' => 'Date  Lesson',
            'sale_Lesson' => 'Sale  Lesson',
            'google_map_Lesson' => 'Google Map  Lesson',
            'status_color_Lesson' => 'Status Color  Lesson',
            'active_Lesson' => 'Active  Lesson',
        ];
    }
}
