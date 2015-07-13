<?php

namespace kemdikbud\to\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kemdikbud\to\models\Baselinewilayah;

/**
 * BaselinewilayahSearch represents the model behind the search form about `kemdikbud\to\models\Baselinewilayah`.
 */
class BaselinewilayahSearch extends Baselinewilayah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kode_wilayah'], 'integer'],
            [['nama_wilayah'], 'safe'],
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
        $query = Baselinewilayah::find();

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
            'kode_wilayah' => $this->kode_wilayah,
        ]);

        $query->andFilterWhere(['like', 'nama_wilayah', $this->nama_wilayah]);

        return $dataProvider;
    }
}
