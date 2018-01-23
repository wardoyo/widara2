<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbPesan;

/**
 * TbPesanSearch represents the model behind the search form of `app\models\TbPesan`.
 */
class TbPesanSearch extends TbPesan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pesan'], 'integer'],
            [['form', 'to', 'isi'], 'safe'],
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
        $query = TbPesan::find();

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
            'id_pesan' => $this->id_pesan,
        ]);

        $query->andFilterWhere(['like', 'form', $this->form])
            ->andFilterWhere(['like', 'to', $this->to])
            ->andFilterWhere(['like', 'isi', $this->isi]);

        return $dataProvider;
    }
}
