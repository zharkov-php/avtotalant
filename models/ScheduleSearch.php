<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Schedule;

/**
 * ScheduleSearch represents the model behind the search form about `app\models\Schedule`.
 */
class ScheduleSearch extends Schedule
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'on', 'filial_id'], 'integer'],
            [['nameDate', 'timeDate', 'weekDate', 'lengthDate'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Schedule::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'nameDate' => $this->nameDate,
            'timeDate' => $this->timeDate,
            'status' => $this->status,
            'on' => $this->on,
            'filial_id' => $this->filial_id,
        ]);

        $query->andFilterWhere(['like', 'weekDate', $this->weekDate])
            ->andFilterWhere(['like', 'lengthDate', $this->lengthDate]);

        return $dataProvider;
    }
}
