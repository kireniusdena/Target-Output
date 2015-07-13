<?php

namespace kemdikbud\to\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kemdikbud\to\models\Baselinejenis;

/**
 * BaselinejenisSearch represents the model behind the search form about `kemdikbud\to\models\Baselinejenis`.
 */
class BaselinejenisSearch extends Baselinejenis
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kode_jenis'], 'integer'],
            [['nama_jenis'], 'safe'],
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
        $query = Baselinejenis::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'kode_jenis' => $this->kode_jenis,
        ]);

        $query->andFilterWhere(['like', 'nama_jenis', $this->nama_jenis]);

        return $dataProvider;
    }
}
