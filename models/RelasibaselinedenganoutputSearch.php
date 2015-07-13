<?php

namespace kemdikbud\to\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kemdikbud\to\models\Relasibaselinedenganoutput;

/**
 * RelasibaselinedenganoutputSearch represents the model behind the search form about `kemdikbud\to\models\Relasibaselinedenganoutput`.
 */
class RelasibaselinedenganoutputSearch extends Relasibaselinedenganoutput
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_base_line', 'id_output', 'id_user_created', 'id_user_updated'], 'integer'],
            [['nama_tabel', 'nama_kolom', 'nama_kegiatan', 'date_created', 'date_updated', 'date_approved'], 'safe'],
            [['approved'], 'boolean'],
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
        $query = Relasibaselinedenganoutput::find();

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
            'id_base_line' => $this->id_base_line,
            'id_output' => $this->id_output,
            'date_created' => $this->date_created,
            'date_updated' => $this->date_updated,
            'approved' => $this->approved,
            'date_approved' => $this->date_approved,
            'id_user_created' => $this->id_user_created,
            'id_user_updated' => $this->id_user_updated,
        ]);

        $query->andFilterWhere(['like', 'nama_tabel', $this->nama_tabel])
            ->andFilterWhere(['like', 'nama_kolom', $this->nama_kolom])
            ->andFilterWhere(['like', 'nama_kegiatan', $this->nama_kegiatan]);

        return $dataProvider;
    }
}
