<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Room;

/**
 * RoomSearch represents the model behind the search form of `app\models\Room`.
 */
class RoomSearch extends Room
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Quality', 'View', 'Else', 'Img'], 'safe'],
            [['Quantity', 'Bed', 'Room', 'Balcony', 'Id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Room::find();

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
            'Quantity' => $this->Quantity,
            'Bed' => $this->Bed,
            'Room' => $this->Room,
            'Balcony' => $this->Balcony,
            'Id' => $this->Id,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Quality', $this->Quality])
            ->andFilterWhere(['like', 'View', $this->View])
            ->andFilterWhere(['like', 'Else', $this->Else])
            ->andFilterWhere(['like', 'Img', $this->Img]);

        return $dataProvider;
    }
}
