<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Category;

/**
 * CategorySearch represents the model behind the search form of `app\models\Category`.
 */
class CategorySearch extends Category
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'rating', 'color', 'sweet', 'country', 'type', 'degree', 'after_taste', 'snack', 'price'], 'safe'],
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
        $query = Category::find();

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
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'rating', $this->rating])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'sweet', $this->sweet])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'degree', $this->degree])
            ->andFilterWhere(['like', 'after_taste', $this->after_taste])
            ->andFilterWhere(['like', 'snack', $this->snack])
            ->andFilterWhere(['like', 'price', $this->price]);

        return $dataProvider;
    }
}
