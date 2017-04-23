<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ScheduleLevoberezhnaya1;

/**
 * ScheduleLevoberezhnaya1Search represents the model behind the search form about `app\models\ScheduleLevoberezhnaya1`.
 */
class ScheduleLevoberezhnaya1Search extends ScheduleLevoberezhnaya1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'active_Lesson'], 'integer'],
            [['name_Lesson', 'time_Lesson', 'date_Lesson', 'sale_Lesson', 'google_map_Lesson', 'status_color_Lesson'], 'safe'],
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
        $query = ScheduleLevoberezhnaya1::find();

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
            'active_Lesson' => $this->active_Lesson,
        ]);

        $query->andFilterWhere(['like', 'name_Lesson', $this->name_Lesson])
            ->andFilterWhere(['like', 'time_Lesson', $this->time_Lesson])
            ->andFilterWhere(['like', 'date_Lesson', $this->date_Lesson])
            ->andFilterWhere(['like', 'sale_Lesson', $this->sale_Lesson])
            ->andFilterWhere(['like', 'google_map_Lesson', $this->google_map_Lesson])
            ->andFilterWhere(['like', 'status_color_Lesson', $this->status_color_Lesson]);

        return $dataProvider;
    }
}
