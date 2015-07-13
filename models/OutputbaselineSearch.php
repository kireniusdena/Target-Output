<?php

namespace kemdikbud\to\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kemdikbud\to\models\Outputbaseline;

/**
 * OutputbaselineSearch represents the model behind the search form about `kemdikbud\to\models\Outputbaseline`.
 */
class OutputbaselineSearch extends Outputbaseline
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_base_line', 'id_user_created', 'id_user_updated'], 'integer'],
            [['nama_tabel', 'nama_kolom_array', 'nama_kolom_json', 'nama_class', 'date_created', 'date_updated', 'date_approved'], 'safe'],
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
        $query = Outputbaseline::find();

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
            'date_created' => $this->date_created,
            'id_user_created' => $this->id_user_created,
            'date_updated' => $this->date_updated,
            'id_user_updated' => $this->id_user_updated,
            'approved' => $this->approved,
            'date_approved' => $this->date_approved,
        ]);

        $query->andFilterWhere(['like', 'nama_tabel', $this->nama_tabel])
            ->andFilterWhere(['like', 'nama_kolom_array', $this->nama_kolom_array])
            ->andFilterWhere(['like', 'nama_kolom_json', $this->nama_kolom_json])
            ->andFilterWhere(['like', 'nama_class', $this->nama_class]);

        return $dataProvider;
    }
}
