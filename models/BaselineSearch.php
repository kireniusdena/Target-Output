<?php

namespace kemdikbud\to\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kemdikbud\to\models\Baseline;

/**
 * BaselineSearch represents the model behind the search form about `kemdikbud\to\models\Baseline`.
 */
class BaselineSearch extends Baseline
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jenis', 'wilayah', 'kode', 'volume', 'tahun'], 'integer'],
            [['uraian', 'satuan'], 'safe'],
            [['harga_satuan', 'harga_total'], 'number'],
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
        $query = Baseline::find();

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
            'jenis' => $this->jenis,
            'wilayah' => $this->wilayah,
            'kode' => $this->kode,
            'volume' => $this->volume,
            'harga_satuan' => $this->harga_satuan,
            'harga_total' => $this->harga_total,
            'tahun' => $this->tahun,
        ]);

        $query->andFilterWhere(['like', 'uraian', $this->uraian])
            ->andFilterWhere(['like', 'satuan', $this->satuan]);

        return $dataProvider;
    }
}
