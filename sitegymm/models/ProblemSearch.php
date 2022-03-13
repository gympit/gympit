<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Problem;



/**
 * ProblemSearch represents the model behind the search form of `app\models\Problem`.
 */
class ProblemSearch extends Problem
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idUser'], 'integer'],
            [['name','timestamp', 'status', 'phone', 'adress', 'mark', 'text'], 'safe'],
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
        $query = Problem::find();

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
            'timestamp' => $this->timestamp,
            'idUser' => $this->idUser,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
        ->andFilterWhere(['like', 'status', $this->status])
        ->andFilterWhere(['like', 'phone', $this->phone])
        ->andFilterWhere(['like', 'adress', $this->adress])
        ->andFilterWhere(['like', 'text', $this->text])
        ->andFilterWhere(['like', 'mark', $this->mark]);

        return $dataProvider;
    }

    public function byUserSearch($params, $idUser)
    {
        $query = Problem::find();

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
            'timestamp' => $this->timestamp,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
        ->andFilterWhere(['like', 'phone', $this->phone])
        ->andFilterWhere(['like', 'adress', $this->adress])
        ->andFilterWhere(['like', 'text', $this->text])
        ->andFilterWhere(['like', 'status', $this->status]);
        
        $query->orderBy(['timestamp'=>SORT_DESC]);

        return $dataProvider;
    }
}
