<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbJadwal;

/**
 * TbJadwalSearch represents the model behind the search form of `app\models\TbJadwal`.
 */
class TbJadwalSearch extends TbJadwal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_jadwal', 'id_kategori'], 'integer'],
            [['tanggal', 'judul', 'detail'], 'safe'],
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
        $query = TbJadwal::find();

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
            'id_jadwal' => $this->id_jadwal,
            'tanggal' => $this->tanggal,
            'id_kategori' => $this->id_kategori,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'detail', $this->detail]);

        return $dataProvider;
    }
}
