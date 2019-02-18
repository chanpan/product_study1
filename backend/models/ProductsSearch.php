<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Products;

/**
 * ProductsSearch represents the model behind the search form of `common\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pro_id', 'pro_name', 'pro_detail', 'created_date'], 'safe'],
            [['pro_price', 'created_by'], 'integer'],
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
        $query = Products::find();

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
            'pro_price' => $this->pro_price,
            'created_by' => $this->created_by,
            'created_date' => $this->created_date,
        ]);

        $query->andFilterWhere(['like', 'pro_id', $this->pro_id])
            ->andFilterWhere(['like', 'pro_name', $this->pro_name])
            ->andFilterWhere(['like', 'pro_detail', $this->pro_detail]);

        return $dataProvider;
    }
}
