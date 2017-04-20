<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property integer $id
 * @property string $nameDate
 * @property string $timeDate
 * @property string $weekDate
 * @property string $lengthDate
 * @property integer $status
 * @property integer $on
 * @property integer $filial_id
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nameDate', 'timeDate'], 'safe'],
            [['status', 'on', 'filial_id'], 'integer'],
            [['weekDate', 'lengthDate'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nameDate' => 'Name Date',
            'timeDate' => 'Time Date',
            'weekDate' => 'Week Date',
            'lengthDate' => 'Length Date',
            'status' => 'Status',
            'on' => 'On',
            'filial_id' => 'Filial ID',
        ];
    }
}
